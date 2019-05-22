<?php
include_once "classDatabase.php";
class Pay
{

    public  $PaymethodID;
    public  $PaymethodType;
 

    public function __construct() {

    }
    
    public function select($id) 
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        if ($id !="")
		{	
			$sql="select * from paymentmethod where ID=$id";
			$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
			if ($row = mysqli_fetch_array($DataSet))
			{
                $this->PaymethodID=$id;
				$this->PaymethodType=$row["Type"];
            }
        }
    }

    public static function addpaymethod(Pay $pay)
    {
       /* $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
        $PaymethodType=$pay->PaymethodType;
         
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        DB::add("paymentmethod","Type,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$PaymethodType','$today','$today',0");

       // $conn->close();
        //header("Location:Pay.php");

    }
    public static function ViewPaymentMethods()
    {
         $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM paymentmethod WHERE IsDeleted=0";
		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($DataSet))
		{
            $MyObject= new Pay();
            $MyObject->PaymethodID=$row["ID"];
            $MyObject->PaymethodType=$row["Type"];
			$Result[$i]=$MyObject;
			$i++;
		}
		return $Result;
       // $conn->close();
    }
    public static function SelectID(Pay $pay)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
         
        $sql = "SELECT * FROM  paymentmethod WHERE Type= '$pay->PaymethodType'";

		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
	 
		$Result=new Pay();
		while ($row = mysqli_fetch_array($DataSet))
		{
            $Result->PaymethodID=$row["ID"];
            $Result->PaymethodType=$row["Type"];
		}
		return $Result;
        //$conn->close();
    }
    public static function delete($ChosenPayment)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql2 = "SELECT Option_ID FROM paymentmethodoptions WHERE Pay_ID='$ChosenPayment' AND IsDeleted=0";
            $resultQuery2= mysqli_query($mysql,$sql2);
            $OptionsCtr=0;
            $arr=array();
            while($row2= $resultQuery2->fetch_assoc())
            {
                $arr[$OptionsCtr]=$row2['Option_ID'];
                echo( $arr[$OptionsCtr]);
                $OptionsCtr++;
            }

            DB::delete("paymentmethodoptions","Pay_ID='$ChosenPayment'");
          /*$sql3 = "DELETE FROM alazharuni.paymentmethodoptions WHERE Pay_ID='$ChosenPayment' AND IsDeleted=0";
            
            $resultQuery3= $conn->query($sql3);*/
            DB::delete("paymentmethod","ID='$ChosenPayment'");

            $sql4 = "DELETE  FROM paymentmethod WHERE ID='$ChosenPayment' AND IsDeleted=0";
            
            $resultQuery4= mysqli_query($mysql,$sql4);
            $DissmissArray=array();
 
            for($i=0;$i<count($arr);$i++)
            {
              
                $sql5 = "SELECT ID FROM paymentmethodoptions WHERE Option_ID='$arr[$i]' AND IsDeleted=0";
                 
                $resultQuery5= mysqli_query($mysql,$sql5);
                while($row5= $resultQuery5->fetch_assoc())
                {
                    if($row5==true)
                    {

                    }
                    else
                    {
                        $DissmissArray[$i]=$arr[$i];
                    }
                }
            }
            
            for($i=0;$i<count( $DissmissArray);$i++)
            {
              
                $sql5 = "DELETE  FROM options WHERE ID='$DissmissArray[$i]' AND IsDeleted=0";
            }

        // $conn->close();
         
    }
    public static function update(Pay $pay)
    {
        $PaymethodID=$pay->PaymethodID;
        $PaymethodType=$pay->PaymethodType;
      
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        DB::update(" paymentmethod","Type='$PaymethodType',LastUpdatedDateTime='$today'","ID='$PaymethodID' AND IsDeleted=0");
        //$conn->close();
    }


}
?>
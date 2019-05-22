<?php
include_once "classDatabase.php";
class LinkPaymentAndOptions
{

    public  $ID;
    public  $Pay_ID;
    public  $Option_ID;
 

    public function __construct() {

    }
    public static function addpaymentmethodoption(LinkPaymentAndOptions $LinkPaymentAndOptions)
    {
       /* $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/

        $Pay_ID=$LinkPaymentAndOptions->Pay_ID;
        $Option_ID=$LinkPaymentAndOptions->Option_ID;
         
         
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        DB::add("paymentmethodoptions","Pay_ID,Option_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$Pay_ID','$Option_ID','$today','$today',0");
        

        //$conn->close();
        //header("Location:Pay.php");

    }

    public static function CheckIfFound(LinkPaymentAndOptions $LinkPaymentAndOptions)
    {

        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql="SELECT COUNT(1) FROM paymentmethodoptions WHERE Pay_ID='$LinkPaymentAndOptions->Pay_ID' AND Option_ID='$LinkPaymentAndOptions->Option_ID' AND IsDeleted='0'";
		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		$i=0;
        $Result;
        $row = mysqli_fetch_array($DataSet);
		if($row[0]>=1)
		{
           return true;
        }
        else{
            return false;
        }
		 
        //$conn->close();
    }

    public static function SelectLink(LinkPaymentAndOptions $LinkPaymentAndOptions)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
         
        $sql = "SELECT * FROM  paymentmethodoptions WHERE Pay_ID= '$LinkPaymentAndOptions->Pay_ID' AND IsDeleted='0'";

		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
	 
       
        $ResultNames;
        $i=0;
		while ($row = mysqli_fetch_array($DataSet))
		{   $Result=new LinkPaymentAndOptions();
            $Result->Pay_ID=$row["Pay_ID"];
            $Result->Option_ID=$row["Option_ID"];
           $ResultNames[$i]=Options::SelectName($Result);
$i++;

        }
        
		return $ResultNames;
       // $conn->close();
    }
    public static function Delete(LinkPaymentAndOptions $LinkPaymentAndOptions)
    {
        /*$conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
        
        DB::delete("paymentmethodoptions","Pay_ID='$LinkPaymentAndOptions->Pay_ID' AND Option_ID='$LinkPaymentAndOptions->Option_ID'");      
        //$conn->close();
    }
}
 
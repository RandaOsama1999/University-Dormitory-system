<?php
include_once "classDatabase.php";
class Fees
{

    public  $ID;
    public  $Fees_Type;
    public  $Fees_Number;

    public function __construct() {
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    }
    public function __construct1($id) {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        if ($id !="")
		{
            $sql = "SELECT * FROM fees WHERE IsDeleted=0 AND ID='$id'";
            $DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
			if ($row = mysqli_fetch_array($DataSet))
			{
                $this->ID=$id;
                $this->Fees_Type=$row['Fees_Type'];
                $this->Fees_Number=$row['Fees_Number'];
            }
            //$conn->close();
            
			
		}
        
    }
    
    public static function create(Fees $fees)
    {
        $Fees_Type=$fees->Fees_Type;
        $Fees_Number=$fees->Fees_Number;
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        DB::add("fees","Fees_Type,Fees_Number,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$Fees_Type','$Fees_Number','$today','$today',0");
        
        //$conn->close();
        //header("Location:AddRoom.php");

    }
     
    public static function delete(Fees $fees)
    {
        $Fees_ID=$fees->ID;
        DB::delete("fees","ID='$Fees_ID' AND IsDeleted=0");
        //$conn->close();
        //header("Location:DeleteRoom.php");

    
    }
    public static function update(Fees $fees)
    {
        $Fees_ID=$fees->ID;
        $Fees_Number=$fees->Fees_Number;
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        DB::update("fees","Fees_Number='$Fees_Number'","ID='$Fees_ID' AND IsDeleted=0");
        
        $conn->close();
       // header("Location:UpdateRoom.php");

    }
    public static function ViewAllFees()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $sql = "SELECT * FROM fees WHERE IsDeleted=0";
		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($DataSet))
		{
			$MyObj= new Fees($row["ID"]);
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
        //$conn->close();

    }
    public static function ViewdeleteDropdown()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM fees WHERE IsDeleted=0 AND ID!=1";
		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($DataSet))
		{
            $MyObject= new Fees();
            $MyObject->ID=$row["ID"];
            $MyObject->Fees_Type=$row["Fees_Type"];
            $MyObject->Fees_Number=$row["Fees_Number"];
			$Result[$i]=$MyObject;
			$i++;
		}
		return $Result;
        //$conn->close();
    }
    public static function ViewupdateDropdown()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM fees WHERE IsDeleted=0";
		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($DataSet))
		{
            $MyObject= new Fees();
            $MyObject->ID=$row["ID"];
            $MyObject->Fees_Type=$row["Fees_Type"];
            $MyObject->Fees_Number=$row["Fees_Number"];
			$Result[$i]=$MyObject;
			$i++;
		}
		return $Result;
       // $conn->close();
    }

}
?>
<?php
include_once "classDatabase.php";
include_once "classUserModel.php";
class ME
{

    public  $ID;
    public  $MaintenanceType_ID;

    public function __construct() {
       
        
    }

    public static function addME(ME $ME,Users $user)
    {
        $FirstName=$user->FirstName;
        $MiddleName=$user->MiddleName;
        $FamilyName=$user->FamilyName;
        $DateOfBirth=$user->DateOfBirth;
        $Mobile=$user->Mobile;
        $Home=$user->Home;
        $Address=$user->Address;
        $Email=$user->Email;
        $Password=$user->Password;
        $national_ID=$user->national_ID;

        $MaintenanceType_ID=$ME->MaintenanceType_ID;
        $usertype_ID=14;
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $last_id=DB::addwithid("user","FirstName,MiddleName,FamilyName,DateOfBirth,Mobile,Home,NationalID,Address_ID,Email,Password,usertype_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$FirstName','$MiddleName','$FamilyName','$DateOfBirth','$Mobile','$Home','$national_ID','$Address','$Email','$Password','$usertype_ID','$today','$today',0");
        DB::add("maintenanceengineer","User_ID,MaintenanceType_ID","$last_id,'$MaintenanceType_ID'");
        //$conn->close();
        //header("Location:AddUser.php");

    }
    public static function ViewDropdown()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM maintenancetype";
		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($DataSet))
		{
            $MyObject= new ME();
            $MyObject->ID=$row["ID"];
            $MyObject->MaintenanceType_ID=$row["Type"];
			$Result[$i]=$MyObject;
			$i++;
		}
		return $Result;
        //$conn->close();
    }
    /*public static function deleteME(Users $user)
    {
        $connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        $email=$user->Email;
        $connection->delete("user","Email='$email' AND IsDeleted=0");
        $conn->close();
        header('location: DeleteMEngineer.php');

    }
    public static function updateME(ME $ME,Users $user)
    {
        $id=$user->ID;
        $FirstName=$user->FirstName;
        $MiddleName=$user->MiddleName;
        $FamilyName=$user->FamilyName;
        $DateOfBirth=$user->DateOfBirth;
        $Mobile=$user->Mobile;
        $Home=$user->Home;
        $Address=$user->Address;
        $national_ID=$user->national_ID;

        $MaintenanceType_ID=$ME->MaintenanceType_ID;
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        $connection->update("user","FirstName='$FirstName' ,MiddleName='$MiddleName', FamilyName='$FamilyName', DateOfBirth='$DateOfBirth',Mobile='$Mobile', 
        Home='$Home',Address_ID='$Address', NationalID='$national_ID',LastUpdatedDateTime='$today'","ID=$id AND IsDeleted=0");
        
        $connection->update("maintenanceengineer","MaintenanceType_ID='$MaintenanceType_ID'","User_ID=$id");
       
        $conn->close();
        header("Location:UpdateSearchUserInfo.php");

    }*/

}
?>
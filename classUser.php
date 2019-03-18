<?php
include_once "classDatabase.php";
class Users
{

    public  $ID;
    public  $FirstName;
    public  $MiddleName;
    public  $FamilyName;
    public  $DateOfBirth;
    public  $Mobile;
    public  $Home;
    public  $Address;
    public  $Email;
    public  $Password;
    public  $usertype_ID;
    public  $national_ID;
    public  $facultyID;
    public  $GradeID;

    public function __construct() {
       
        
    }

    public static function create(Users $user)
    {
        $connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
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
        $usertype_ID=$user->usertype_ID;
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $connection->add("user","FirstName,MiddleName,FamilyName,DateOfBirth,Mobile,Home,NationalID,Address_ID,Email,Password,usertype_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$FirstName','$MiddleName','$FamilyName','$DateOfBirth','$Mobile','$Home','$national_ID','$Address','$Email','$Password','$usertype_ID','$today','$today',0");
        

        $conn->close();
        header("Location:AddUser.php");

    }
    public static function delete(Users $user)
    {
        $connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        $email=$user->Email;
        $connection->delete("user","Email='$email' AND IsDeleted=0");
                
        $conn->close();
        header('location: DeleteUser.php');

    }
    public static function update(Users $user)
    {
        $id=$user->ID;
        $FirstName=$user->FirstName;
        $MiddleName=$user->MiddleName;
        $FamilyName=$user->FamilyName;
        $DateOfBirth=$user->DateOfBirth;
        $Mobile=$user->Mobile;
        $Home=$user->Home;
        $Address=$user->Address;
        $Password=$user->Password;
        $national_ID=$user->national_ID;

        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        $connection->update("user","FirstName='$FirstName' ,MiddleName='$MiddleName', FamilyName='$FamilyName', DateOfBirth='$DateOfBirth',Mobile='$Mobile', 
        Home='$Home',Address_ID='$Address',Password='$Password', NationalID='$national_ID',LastUpdatedDateTime='$today'","ID=$id AND IsDeleted=0");
        $conn->close();
        header("Location:AllPages.php");

    }
    public static function updateother(Users $user)
    {
        $id=$user->ID;
        $FirstName=$user->FirstName;
        $MiddleName=$user->MiddleName;
        $FamilyName=$user->FamilyName;
        $DateOfBirth=$user->DateOfBirth;
        $Mobile=$user->Mobile;
        $Home=$user->Home;
        $Address=$user->Address;
        $Password=$user->Password;
        $national_ID=$user->national_ID;
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        $connection->update("user","FirstName='$FirstName' ,MiddleName='$MiddleName', FamilyName='$FamilyName', DateOfBirth='$DateOfBirth',Mobile='$Mobile', 
        Home='$Home',Address_ID='$Address',Password='$Password', NationalID='$national_ID',LastUpdatedDateTime='$today'","ID=$id AND IsDeleted=0");
        $conn->close();
        header("Location:UpdateSearchUserInfo.php");

    }


}
?>
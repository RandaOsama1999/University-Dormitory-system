<?php
include_once "classDatabase.php";
include_once "classUser.php";
class Student
{

    public  $ID;
    public  $facultyID;
    public  $GradeID;

    public function __construct() {
       
        
    }

    public static function SignUp(Student $Student,Users $user)
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

        $facultyID=$Student->facultyID;
        $GradeID=$Student->GradeID;
        $State_ID=2;
        $usertype_ID=1;
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $last_id=$connection->addwithid("user","FirstName,MiddleName,FamilyName,DateOfBirth,Mobile,Home,NationalID,Address_ID,Email,Password,usertype_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$FirstName','$MiddleName','$FamilyName','$DateOfBirth','$Mobile','$Home','$national_ID','$Address','$Email','$Password','$usertype_ID','$today','$today',0");
        $connection->add("student","Student_ID,Faculty_ID,Grade_ID,State_ID","$last_id,'$facultyID','$GradeID','$State_ID'");
        $conn->close();
        header("Location:page-register.php");

    }
    public static function addStudent(Student $Student,Users $user)
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

        $facultyID=$Student->facultyID;
        $GradeID=$Student->GradeID;
        $State_ID=2;
        $usertype_ID=1;
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $last_id=$connection->addwithid("user","FirstName,MiddleName,FamilyName,DateOfBirth,Mobile,Home,NationalID,Address_ID,Email,Password,usertype_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$FirstName','$MiddleName','$FamilyName','$DateOfBirth','$Mobile','$Home','$national_ID','$Address','$Email','$Password','$usertype_ID','$today','$today',0");
        $connection->add("student","Student_ID,Faculty_ID,Grade_ID,State_ID","$last_id,'$facultyID','$GradeID','$State_ID'");
        $conn->close();
        header("Location:AddStudent.php");

    }
    public static function deletestudent(Users $user)
    {
        $connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        $email=$user->Email;
        /*$sql = "SELECT * FROM user WHERE Email='$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id=$row['ID'];
                $connection->delete("student","Student_ID='$id' AND IsDeleted=0");
            }
        }*/
        $connection->delete("user","Email='$email' AND IsDeleted=0");
        $conn->close();
        header('location: DeleteStudent.php');

    }
    public static function updateStudent(Student $Student,Users $user)
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

        $facultyID=$Student->facultyID;
        $GradeID=$Student->GradeID;
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        $connection->update("user","FirstName='$FirstName' ,MiddleName='$MiddleName', FamilyName='$FamilyName', DateOfBirth='$DateOfBirth',Mobile='$Mobile', 
        Home='$Home',Address_ID='$Address', NationalID='$national_ID',LastUpdatedDateTime='$today'","ID=$id AND IsDeleted=0");
        
        $connection->update("student","Faculty_ID='$facultyID' ,Grade_ID='$GradeID'","Student_ID=$id");
       
        $conn->close();
        header("Location:UpdateSearchStudentInfo.php");

    }

}
?>
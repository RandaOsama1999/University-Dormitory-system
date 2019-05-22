<?php
include_once "classDatabase.php";
include_once "classUserModel.php";
class Student
{

    public  $ID;
    public  $facultyID;
    public  $GradeID;

    public  $faculty;
    public  $Grade;

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
			$sql="select * from student where Student_ID=$id";
			$StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
			if ($row = mysqli_fetch_array($StudentDataSet))
			{
                $this->ID=$id;
                $this->facultyID=$row["Faculty_ID"];
                $this->GradeID=$row["Grade_ID"];
                $sqltwo = "SELECT * FROM faculties WHERE ID=".$this->facultyID."";
                $resulttwo = mysqli_query($mysql,$sqltwo);
                if ($resulttwo->num_rows > 0) {
                    while($rowtwo = $resulttwo->fetch_assoc()) {
                       $this->faculty=$rowtwo['Faculty'];
                    }
                }
                $sqltwo = "SELECT * FROM grades WHERE ID=".$this->GradeID."";
                $resulttwo = mysqli_query($mysql,$sqltwo);
                if ($resulttwo->num_rows > 0) {
                    while($rowtwo = $resulttwo->fetch_assoc()) {
                        $this->Grade=$rowtwo['Grade'];
                    }
                }
            }
        }
               
        
    }

    public static function SignUp(Student $Student,Users $user)
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

        $facultyID=$Student->facultyID;
        $GradeID=$Student->GradeID;
        $State_ID=2;
        $usertype_ID=1;
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $last_id=DB::addwithid("user","FirstName,MiddleName,FamilyName,DateOfBirth,Mobile,Home,NationalID,Address_ID,Email,Password,usertype_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$FirstName','$MiddleName','$FamilyName','$DateOfBirth','$Mobile','$Home','$national_ID','$Address','$Email','$Password','$usertype_ID','$today','$today',0");
        DB::add("student","Student_ID,Faculty_ID,Grade_ID,State_ID","$last_id,'$facultyID','$GradeID','$State_ID'");
        //$conn->close();
        //header("Location:page-register.php");

    }
    public static function addStudent(Student $Student,Users $user)
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

        $facultyID=$Student->facultyID;
        $GradeID=$Student->GradeID;
        $State_ID=2;
        $usertype_ID=1;
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $last_id=DB::addwithid("user","FirstName,MiddleName,FamilyName,DateOfBirth,Mobile,Home,NationalID,Address_ID,Email,Password,usertype_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$FirstName','$MiddleName','$FamilyName','$DateOfBirth','$Mobile','$Home','$national_ID','$Address','$Email','$Password','$usertype_ID','$today','$today',0");
        DB::add("student","Student_ID,Faculty_ID,Grade_ID,State_ID","$last_id,'$facultyID','$GradeID','$State_ID'");
        //$conn->close();
        //header("Location:AddStudent.php");

    }
    public static function deletestudent(Users $user)
    {
        $email=$user->Email;
        /*$sql = "SELECT * FROM user WHERE Email='$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $id=$row['ID'];
                $connection->delete("student","Student_ID='$id' AND IsDeleted=0");
            }
        }*/
        DB::delete("user","Email='$email' AND IsDeleted=0");
        //$conn->close();
        //header('location: DeleteStudent.php');

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

        DB::update("user","FirstName='$FirstName' ,MiddleName='$MiddleName', FamilyName='$FamilyName', DateOfBirth='$DateOfBirth',Mobile='$Mobile', 
        Home='$Home',Address_ID='$Address', NationalID='$national_ID',LastUpdatedDateTime='$today'","ID=$id AND IsDeleted=0");
        
        DB::update("student","Faculty_ID='$facultyID' ,Grade_ID='$GradeID'","Student_ID=$id");
       
        //$conn->close();
        //header("Location:UpdateSearchStudentInfo.php");

    }
    public static function getdataTOupdatefromuser($id)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $sql = "SELECT * FROM user WHERE ID=$id";
		
		$Result;
        $resulttwo = mysqli_query($mysql,$sql);
        while($rowtwo = $resulttwo->fetch_assoc()){
            if($rowtwo==true)
            {
                $MyObj= new Users($rowtwo["ID"]);
                $Result=$MyObj;
            }
        }
        //echo "<script> alert('".$Result->FirstName."');</script>";
		return $Result;
        //$conn->close();

    }
    public static function getdataTOupdatefromstudent($id)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $sql = "SELECT * FROM user WHERE IsDeleted=0 AND ID=$id";
		$StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		
		$Resulttwo;
		while ($row = mysqli_fetch_array($StudentDataSet))
		{
            $id=$row['ID'];
            //echo "<script> alert('".$id."');</script>";
            $sqltwo = "SELECT * FROM student WHERE Student_ID=$id";
            $StudentDataSettwo = mysqli_query($mysql,$sqltwo) or die(mysql_error());
            while ($rowtwo = mysqli_fetch_array($StudentDataSettwo))
            {
                $MyObjtwo= new Student($id);
                $Resulttwo=$MyObjtwo;
            }
        }
		return $Resulttwo;
        //$conn->close();

    }
    public static function search(Users $user)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $email=$user->Email;
        $sql = "SELECT * FROM user WHERE Email='$email'";
        $resulttwo = mysqli_query($mysql,$sql);
        while($rowtwo = $resulttwo->fetch_assoc()){
            if($rowtwo==true)
            {
                return $rowtwo['ID'];
            }
        }
        
        //$conn->close();

    }
    public static function ViewAllUsersOfStudents()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $sql = "SELECT * FROM user WHERE IsDeleted=0 AND usertype_ID=1";
		$StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($StudentDataSet))
		{
			$MyObj= new Users($row["ID"]);
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
        //$conn->close();

    }
    public static function ViewAllStudents()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $sql = "SELECT * FROM user WHERE IsDeleted=0 AND usertype_ID=1";
		$StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		
		$i=0;
		$Resulttwo;
		while ($row = mysqli_fetch_array($StudentDataSet))
		{
            $id=$row['ID'];
            $sqltwo = "SELECT * FROM student WHERE Student_ID=$id";
            $StudentDataSettwo = mysqli_query($mysql,$sqltwo) or die(mysql_error());
            while ($rowtwo = mysqli_fetch_array($StudentDataSettwo))
            {
                $MyObjtwo= new Student($id);
                $Resulttwo[$i]=$MyObjtwo;
                $i++;
            }
		}
		return $Resulttwo;
        //$conn->close();

    }

}
?>
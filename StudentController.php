<?php
require_once 'classStudentModel.php';
require_once 'classStudentView.php';
include_once "classContent.php";

require_once 'FactoryTest.php';

class StudentController{
    public static function SignUp()
    {
        StudentView::Signup();
        if(isset($_POST['Submit']))
        {
            $access_key = '398560a0ad027a0e28d23abe8cb12a50';
            $user=FactoryTest::clientCode(1);
            $obj=unserialize($_SESSION['Student']);
            
            $user->FirstName=$_POST['firstname'];
            $user->MiddleName=$_POST['lastname'];
            $user->FamilyName=$_POST['familyname'];
            $user->DateOfBirth=$_POST['dateofbirth'];
            $user->Mobile=$_POST['MobileNumber'];
            $user->Home=$_POST['Home'];
            $user->Address=$_POST['city'];
            $user->Email=$_POST['PersonalMail'];
            $passhash=$_POST['Pass1'];
            $user->Password=md5($passhash);
            $user->national_ID=$_POST['NationaID'];
            $obj->facultyID=$_POST['facultyID']; 
            $obj->GradeID=$_POST['GradeID']; 
            $email_address =  $user->Email;
            $ch = curl_init('http://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'');  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            // Store the data:
            $json = curl_exec($ch);
            curl_close($ch);
            
            // Decode JSON response:
            $validationResult = json_decode($json, true);
            
            if ($validationResult['format_valid'] && $validationResult['smtp_check']) {
                //echo "<script> alert('Email is valid');</script>";
                Student::SignUp($obj,$user);
            }
            else{
                $cont2=Content::Alert(62,"alert2");
                echo "<script> alert('".$cont2."');</script>";
            }

        }
        if(isset($_POST['reg']))
        {
            echo '<script type="text/javascript">';
            echo 'window.location.href="Regulations.php";';
            echo '</script>';
        }
    }
    public static function AddStudent()
    {
        StudentView::AddStudent();
        if(isset($_POST['Submit']))
        {
            $access_key = '398560a0ad027a0e28d23abe8cb12a50';
            $user=FactoryTest::clientCode(1);
            $obj=unserialize($_SESSION['Student']);
            $user->FirstName=$_POST['firstname'];
            $user->MiddleName=$_POST['lastname'];
            $user->FamilyName=$_POST['familyname'];
            $user->DateOfBirth=$_POST['dateofbirth'];
            $user->Mobile=$_POST['MobileNumber'];
            $user->Home=$_POST['Home'];
            $user->Address=$_POST['city'];
            $user->Email=$_POST['PersonalMail'];
            $passhash=$_POST['Pass1'];
            $user->Password=md5($passhash);
            $user->national_ID=$_POST['NationaID'];
            $obj->facultyID=$_POST['facultyID']; 
            $obj->GradeID=$_POST['GradeID']; 
            $email_address =  $user->Email;
            $ch = curl_init('http://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'');  
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            
            // Store the data:
            $json = curl_exec($ch);
            curl_close($ch);
            
            // Decode JSON response:
            $validationResult = json_decode($json, true);
            
            if ($validationResult['format_valid'] && $validationResult['smtp_check']) {
                //echo "<script> alert('Email is valid');</script>";
                Student::addStudent($obj,$user);
            }
            else{
                $cont2=Content::Alert(28,"alert2");
                        echo "<script> alert('".$cont2."');</script>";
            }

        }
            //$Result=UserView::Adduser($obj);
            //Users::create($Result);
            //$Result=Users::create();
            //UserView::Adduser($Result);
        
    }
    public static function SearchStudent()
    {
        StudentView::SearchStudent();
        if(isset($_POST['search'])){
            $obj =  FactoryTest::clientCode(0);
            $obj->Email=$_POST['mail'];
            $iD=Student::search($obj);
            //echo "<script> alert('".$iD."');</script>";
            //return $iD;
            //header('location: UpdateUserInfo.php?iD='.$iD);
            echo '<script type="text/javascript">';
            echo 'window.location.href="UpdateStudentInfo.php?iD='.$iD.'";';
            echo '</script>';
            //UserController::UpdateUser($iD);
        }
    }
    public static function UpdateStudent($iD)
    {
        //$iD=SearchUser();
        //$iD = $_GET['iD']; 
        //echo "<script> alert('".$iD."');</script>";
        $Result=Student::getdataTOupdatefromuser($iD);
        $Resulttwo=Student::getdataTOupdatefromstudent($iD);
        //echo "<script> alert('".$Resulttwo->GradeID."');</script>";
        StudentView::UpdateStudent($Result,$Resulttwo);
        if(isset($_POST['save'])){
            $user=FactoryTest::clientCode(1);
            $obj=unserialize($_SESSION['Student']);
            $user->ID=$iD;
            $user->FirstName=$_POST['firstname'];
            $user->MiddleName=$_POST['lastname'];
            $user->FamilyName=$_POST['familyname'];
            $user->DateOfBirth=$_POST['dateofbirth'];
            $user->Mobile=$_POST['MobileNumber'];
            $user->Home=$_POST['Home'];
            $user->Address=$_POST['city'];
            $user->national_ID=$_POST['NationaID'];
            $obj->facultyID=$_POST['facultyID']; 
            $obj->GradeID=$_POST['GradeID']; 
            return Student::updateStudent($obj,$user);
        }
    }
    public static function DeleteStudent()
    {
        StudentView::DeleteStudent();
        if(isset($_POST['remove'])){
                                
            $obj =  FactoryTest::clientCode(0);
            $obj->Email=$_POST['mail'];
            Student::deletestudent($obj);
        }
    }
    public static function ViewStudents()
    {
        $Result=Student::ViewAllUsersOfStudents();
        $Resulttwo=Student::ViewAllStudents();
        StudentView::ShowAllStudents($Result,$Resulttwo);
    }
    
}


?>
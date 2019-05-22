<?php
require_once 'classUserModel.php';
require_once 'classUserView.php';
require_once 'classMaintenanceEngineer.php';
include_once "classContent.php";

require_once 'FactoryTest.php';

class UserController{
    public static function AddUser()
    {
        UserView::Adduser();
        if(isset($_POST['Submit']))
        {
            if($_POST['usertype'] == 14)
            {
                $access_key = '398560a0ad027a0e28d23abe8cb12a50';
                $obj=FactoryTest::clientCode(14);
                $ME=unserialize($_SESSION['Eng']);
                $obj->FirstName=$_POST['firstname'];
                $obj->MiddleName=$_POST['lastname'];
                $obj->FamilyName=$_POST['familyname'];
                $obj->DateOfBirth=$_POST['dateofbirth'];
                $obj->Mobile=$_POST['MobileNumber'];
                $obj->Home=$_POST['Home'];
                $obj->Address=$_POST['city'];
                $obj->usertype_ID=$_POST['usertype'];
                $obj->Email=$_POST['PersonalMail'];
                $passhash=$_POST['Pass1'];
                $obj->Password=md5($passhash);
                $obj->national_ID=$_POST['NationaID'];
                $ME->MaintenanceType_ID=$_POST['maintype'];
            
                $email_address =  $obj->Email;
                    $ch = curl_init('http://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'');  
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                    
                    // Store the data:
                    $json = curl_exec($ch);
                    curl_close($ch);
                    
                    // Decode JSON response:
                    $validationResult = json_decode($json, true);
                    
                    if ($validationResult['format_valid'] && $validationResult['smtp_check']) {
                        //echo "<script> alert('Email is valid');</script>";
                        ME::addME($ME,$obj);
                    }
                    else{
                        $cont2=Content::Alert(7,"alert2");
                        echo "<script> alert('".$cont2."');</script>";
                    }

            }
            else
            {
            $access_key = '398560a0ad027a0e28d23abe8cb12a50';
            $obj = FactoryTest::clientCode(0);
            $obj->FirstName=$_POST['firstname'];
            $obj->MiddleName=$_POST['lastname'];
            $obj->FamilyName=$_POST['familyname'];
            $obj->DateOfBirth=$_POST['dateofbirth'];
            $obj->Mobile=$_POST['MobileNumber'];
            $obj->Home=$_POST['Home'];
            $obj->Address=$_POST['city'];
            $obj->usertype_ID=$_POST['usertype'];
            $obj->Email=$_POST['PersonalMail'];
            $passhash=$_POST['Pass1'];
            $obj->Password=md5($passhash);
            $obj->national_ID=$_POST['NationaID'];
        
            $email_address =  $obj->Email;
                $ch = curl_init('http://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'');  
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                
                // Store the data:
                $json = curl_exec($ch);
                curl_close($ch);
                
                // Decode JSON response:
                $validationResult = json_decode($json, true);
                
                if ($validationResult['format_valid'] && $validationResult['smtp_check']) {
                    //echo "<script> alert('Email is valid');</script>";
                    Users::create($obj);
                }
                else{
                    $cont2=Content::Alert(7,"alert2");
                    echo "<script> alert('".$cont2."');</script>";
                }
            }
        }
    }
    public static function SearchUser()
    {
        UserView::SearchUser();
        if(isset($_POST['search']))
        {
            $obj =  FactoryTest::clientCode(0);
            $obj->Email=$_POST['mail'];
            $iD=Users::search($obj);
            echo '<script type="text/javascript">';
            echo 'window.location.href="UpdateUserInfo.php?iD='.$iD.'";';
            echo '</script>';
        }
    }
    public static function UpdateUser($iD)
    {
        $Result=Users::getdataTOupdate($iD);
        UserView::UpdateUser($Result);
        if(isset($_POST['save']))
        {
            $obj = FactoryTest::clientCode($iD);
            $obj->ID=$iD;
            $obj->FirstName=$_POST['firstname'];
            $obj->MiddleName=$_POST['lastname'];
            $obj->FamilyName=$_POST['familyname'];
            $obj->DateOfBirth=$_POST['dateofbirth'];
            $obj->Mobile=$_POST['MobileNumber'];
            $obj->Home=$_POST['Home'];
            $obj->Address=$_POST['city'];
            $obj->national_ID=$_POST['NationaID'];
            Users::updateother($obj);
        }
    }
    public static function UpdateMyself($iD)
    {
        $Result=Users::getdataTOupdate($iD);
        UserView::UpdateMyself($Result);
        if(isset($_POST['save'])){
            $obj = FactoryTest::clientCode($iD);
            $obj->ID=$iD;
            $obj->FirstName=$_POST['firstname'];
            $obj->MiddleName=$_POST['lastname'];
            $obj->FamilyName=$_POST['familyname'];
            $obj->DateOfBirth=$_POST['dateofbirth'];
            $obj->Mobile=$_POST['MobileNumber'];
            $obj->Home=$_POST['Home'];
            $obj->Address=$_POST['city'];
            $obj->national_ID=$_POST['NationaID'];
            Users::update($obj);
        }
    }
    public static function DeleteUser()
    {
        UserView::DeleteUser();
        if(isset($_POST['remove']))
        {                
            $obj = FactoryTest::clientCode(0);
            $obj->Email=$_POST['mail'];
            Users::delete($obj);
        }
    }
    public static function ViewUsers()
    {
        $Result=Users::ViewAllUsers();
        UserView::ShowAllUsers($Result);
    }
    public static function SendAll()
    {
        UserView::SendAll();
        if(isset($_POST['save']))
        { 
            $msg=$_POST['msg'];
            Users::sendall($msg);
        }
    }
    public static function Login()
    {
        UserView::Login();
        if(isset($_POST['send'])){
            $email = $_POST['email'];
            $pass = $_POST['password'];
            Users::Login ($email,$pass);
        }
    }
}

?>
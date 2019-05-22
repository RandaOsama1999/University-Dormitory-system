<?php
include_once "classDatabase.php";
require_once "classFacade.php";

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

    public  $usertype;
    public  $city;
    public  $country;
    
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
			$sql="select * from user where ID=$id";
			$StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
			if ($row = mysqli_fetch_array($StudentDataSet))
			{
                $this->ID=$id;
				$this->FirstName=$row["FirstName"];
				$this->MiddleName=$row["MiddleName"];
                $this->FamilyName=$row["FamilyName"];
                $this->DateOfBirth=$row["DateOfBirth"];
                $this->Mobile=$row["Mobile"];
                $this->Home=$row["Home"];
                $this->Address=$row["Address_ID"];
                $this->Email=$row["Email"];
                $this->Password=$row["Password"];
                $this->national_ID=$row["NationalID"];
                $this->usertype_ID=$row["usertype_ID"];
                $sqltwo = "SELECT * FROM usertype WHERE ID=".$this->usertype_ID." AND IsDeleted=0";
                $resulttwo =mysqli_query($mysql,$sqltwo);
                if ($resulttwo->num_rows > 0) {
                    while($rowtwo = $resulttwo->fetch_assoc()) {
                        $this->usertype=$rowtwo["Type"];
                    }
                }
                $sqltwo = "SELECT * FROM address WHERE ID=".$this->Address."";
                $resulttwo =mysqli_query($mysql,$sqltwo);
                if ($resulttwo->num_rows > 0) {
                    while($rowtwo = $resulttwo->fetch_assoc()) {
                        $Parent_ID=$rowtwo['Parent_ID'];
                        if($Parent_ID>0)
                        {
                            $this->city=$rowtwo['Name'];
                            $sqlt = "SELECT * FROM address WHERE ID=$Parent_ID";
                            $resultt = mysqli_query($mysql,$sqlt);
                            if ($resultt->num_rows > 0) {
                                while($rowt = $resultt->fetch_assoc()) {
                                    $Parent_ID2=$rowt['Parent_ID'];
                                    if($Parent_ID2==0)
                                    {
                                        $this->country=$rowt['Name'];
                                        
                                    }
                                }
                            }
                        }
                    }
                }
                
			}
		}
        
    }

    public static function create(Users $user)
    {
       /* $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
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
       DB::add("user","FirstName,MiddleName,FamilyName,DateOfBirth,Mobile,Home,NationalID,Address_ID,Email,Password,usertype_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$FirstName','$MiddleName','$FamilyName','$DateOfBirth','$Mobile','$Home','$national_ID','$Address','$Email','$Password','$usertype_ID','$today','$today',0");
        

       // $conn->close();
        header("Location:AddUser.php");

    }
    public static function delete(Users $user)
    {
       /* $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
        $email=$user->Email;
        DB::delete("user","Email='$email' AND IsDeleted=0");
                
        //$conn->close();
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
        $national_ID=$user->national_ID;

        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        /*$conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
       DB::update("user","FirstName='$FirstName' ,MiddleName='$MiddleName', FamilyName='$FamilyName', DateOfBirth='$DateOfBirth',Mobile='$Mobile', 
        Home='$Home',Address_ID='$Address', NationalID='$national_ID',LastUpdatedDateTime='$today'","ID=$id AND IsDeleted=0");
       // $conn->close();

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
        $national_ID=$user->national_ID;
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        /*$conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
        DB::update("user","FirstName='$FirstName' ,MiddleName='$MiddleName', FamilyName='$FamilyName', DateOfBirth='$DateOfBirth',Mobile='$Mobile', 
        Home='$Home',Address_ID='$Address', NationalID='$national_ID',LastUpdatedDateTime='$today'","ID=$id AND IsDeleted=0");
       // $conn->close();
        //header("Location:UpdateSearchUserInfo.php");

    }
    public static function getdataTOupdate($id)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $sql = "SELECT * FROM user WHERE ID=$id";
		
		$Result;
        $resulttwo = mysqli_query($mysql,$sql) or die($conn->error);
        while($rowtwo = $resulttwo->fetch_assoc()){
            if($rowtwo==true)
            {
                $MyObj= new Users($rowtwo["ID"]);
                $Result=$MyObj;
            }
        }
        //echo "<script> alert('".$Result->FirstName."');</script>";
		return $Result;
       // $conn->close();

    }
    public static function search(Users $user)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $email=$user->Email;
        $sql = "SELECT * FROM user WHERE Email='$email'";
        $resulttwo = mysqli_query($mysql,$sql) or die($conn->error);
        while($rowtwo = $resulttwo->fetch_assoc()){
            if($rowtwo==true)
            {
                return $rowtwo['ID'];
            }
        }
        
       // $conn->close();

    }

    public static function ViewAllUsers()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $sql = "SELECT * FROM user WHERE IsDeleted=0 AND usertype_ID!=1";
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
       // $conn->close();

    }
    public static function Login ($email,$pass)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $passhash=md5($pass);
        $sql = "SELECT * FROM user WHERE Email='$email' AND Password='$passhash' AND IsDeleted=0";
        $result = mysqli_query($mysql,$sql);
        while($row = $result->fetch_assoc()){
            if($row==true)
            {
                $_SESSION['UserType_ID'] = $row['usertype_ID'];
                $_SESSION['email'] = $email;
                echo '<script type="text/javascript">';
                echo 'window.location.href="AllPages.php";';
                echo '</script>';
                        
            }
        }
    }
    public static function sendall($msg)
    {
        $arr=array();
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $email=$_SESSION['email'];
        //echo "<script> alert('".$email."');</script>";
        $sql = "SELECT * FROM user WHERE IsDeleted=0 AND usertype_ID!=1 AND Email!='$email'";
        $resulttwo = mysqli_query($mysql,$sql);
        while($rowtwo = $resulttwo->fetch_assoc()){
            if($rowtwo==true)
            {
                $mobile=$rowtwo['Mobile'];
                //$facade=new facade();
                $fullmob="+20".$mobile;
                array_push($arr,$fullmob);
                //echo "<script> alert('".$fullmob."');</script>";
                //$facade->sendSMS($fullmob,$msg);
            }
        }
        $facade=new facade();
        $facade->sendSMS($arr,$msg);
        /*for($i=0;$i<count($arr);$i++)
        {
            echo "<script> alert('".$arr[$i]."');</script>";
            $facade=new facade();
            $facade->sendSMS($arr[$i],$msg);
        }*/
		
       // $conn->close();

    }


}
?>
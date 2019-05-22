<?php
include_once "classDatabase.php";

class UserType
{

    public  $ID;
    public  $Type;

    public function __construct() {
       
        
    }

    public static function ViewAllTypes()
    {
       
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $sql = "SELECT * FROM usertype WHERE IsDeleted=0";
		$LinksDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		
		$i=0;
        $Result;
		while ($row = mysqli_fetch_array($LinksDataSet))
		{
            $MyObj= new UserType($row["ID"]);
            $MyObj->Type=$row["Type"];
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
        //$conn->close();

    }
    public static function create(UserType $user)
    {
        $Type=$user->Type;
       /* $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
       DB::add("usertype","Type,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$Type','$today','$today',0");
        
        //$conn->close();
        //header("Location:AddUserType.php");

    }
    public static function delete(UserType $user)
    {
        $id=$user->ID;
        /*$conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
        DB::delete("usertype","ID='$id' AND IsDeleted=0");
        //$conn->close();
       //header('location: DeleteUserType.php');

    }
    public static function ViewPermDropdown()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM usertype WHERE IsDeleted=0";
		$DataSet = mysqli_query($mysql,$sql);
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($DataSet))
		{
            $MyObject= new UserType();
            $MyObject->ID=$row["ID"];
            $MyObject->Type=$row["Type"];
			$Result[$i]=$MyObject;
			$i++;
		}
		return $Result;
        //$conn->close();
    }
    public static function ViewUsertypeDropdown()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM usertype WHERE ID!=1 AND IsDeleted=0";
		$DataSet = mysqli_query($mysql,$sql) ;
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($DataSet))
		{
            $MyObject= new UserType();
            $MyObject->ID=$row["ID"];
            $MyObject->Type=$row["Type"];
			$Result[$i]=$MyObject;
			$i++;
		}
		return $Result;
        //$conn->close();
    }
    /*
    public static function update(UserType $user)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alazharuni";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $conn->query("SET NAMES 'utf8'");
        
        $mysql="UPDATE usertype SET Type='$user->Type' WHERE ID='$user->ID'";
        mysqli_query($conn,$mysql);
        $conn->close();
        header("Location:AllPages.php");

    }*/

}
?>
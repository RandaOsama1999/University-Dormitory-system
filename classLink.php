<?php
include_once "classDatabase.php";

class Link
{
    public  $ID;
    public  $PhysicalAddress;
    public  $FriendlyAddress;
    public  $pagename;
    public $Links_ID;
    public $Content;
    public $Type_ID;
    public $NameOfType;

    public function __construct() {
    }
    public static function headerPerm()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $i=0;
        $Result;
        $email = $_SESSION['email'];
        $sql = "SELECT * FROM user WHERE Email='$email' AND IsDeleted=0";
        $result = mysqli_query($mysql,$sql);
            while($row = $result->fetch_assoc()){
                if($row==true)
                {
                    $Name=$row["FirstName"];
                    $FName=$row["FamilyName"];
                    $usertype_ID=$row['usertype_ID'];
                    $sqltwo = "SELECT * FROM usertypelinks WHERE userType_ID='$usertype_ID' AND IsDeleted=0";
                    $resulttwo = mysqli_query($mysql,$sqltwo);
                        while($rowtwo = $resulttwo->fetch_assoc()){
                            if($rowtwo==true)
                            {
                                $links_ID=$rowtwo['links_ID'];
        
                                $sql = "SELECT * FROM links WHERE ID='$links_ID' AND IsDeleted=0";
                                $DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
                                
                                while ($row = mysqli_fetch_array($DataSet))
                                {
                                    $MyObject= new Link();
                                    $MyObject->ID=$row["ID"];
                                    $MyObject->PhysicalAddress=$row["PhysicalAddress"];
                                    $MyObject->FriendlyAddress=$row["FriendlyAddress"];
                                    $Result[$i]=$MyObject;
                                    $i++;
                                }
                            }
                        }
                    }
                }
		return $Result;
        //$conn->close();
    }
    public static function ViewDropdown()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM links WHERE IsDeleted=0";
		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($DataSet))
		{
            $MyObject= new Link();
            $MyObject->ID=$row["ID"];
            $MyObject->PhysicalAddress=$row["PhysicalAddress"];
            $MyObject->FriendlyAddress=$row["FriendlyAddress"];
			$Result[$i]=$MyObject;
			$i++;
		}
		return $Result;
        //$conn->close();
    }
    public static function ViewstaticpageDropdown()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM statichtml";
		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($DataSet))
		{
            $MyObject= new Link();
            $MyObject->pagename=$row["pagename"];
			$Result[$i]=$MyObject;
			$i++;
		}
		return $Result;
        //$conn->close();
    }
    public static function updatestaticpage($html,$name)
    {
       /* $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        DB::update("statichtml","html='$html',LastUpdatedDateTime='$today'","pagename='$name'");
        //$conn->close();
    }
    public static function getdataTOupdate($name)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sqlone = "SELECT * FROM statichtml WHERE pagename='$name'";
        $resultone = mysqli_query($mysql,$sqlone);

       while($rowT= $resultone->fetch_assoc())
            {  
                if($rowT==true)
                {
                       $html=$rowT["html"];
                }
            }
            return $html;
        //$conn->close();

    }
    public static function update(Link $link)
    {
        $id=$link->ID;
        $FriendlyAddress=$link->FriendlyAddress;
        $conn=DB::getInstance();
       /* $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        DB::update("links","FriendlyAddress='$FriendlyAddress',LastUpdatedDateTime='$today'","ID=$id AND IsDeleted=0");
       // $conn->close();
       // header("Location:LinkView.php");

    }
    public static function add(Link $link)
    {
        $PhysicalAddress=$link->PhysicalAddress;
        $FriendlyAddress=$link->FriendlyAddress;
        $conn=DB::getInstance();
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        DB::add("links","PhysicalAddress,FriendlyAddress,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$PhysicalAddress','$FriendlyAddress','$today','$today',0");

       // $conn->close();
       // header("Location:LinkView.php");

    }
    public static function delete(Link $link)
    {
        $id=$link->ID;
        $conn=DB::getInstance();
        DB::delete("links","ID=$id AND IsDeleted=0");
       // $conn->close();
       // header("Location:LinkView.php");

    }
    public static function ViewAllLinks()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $sql = "SELECT * FROM links WHERE IsDeleted=0";
		$LinksDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		
		$i=0;
        $Result;
		while ($row = mysqli_fetch_array($LinksDataSet))
		{
            $MyObj= new Link();
            //$MyObj->PhysicalAddress=$row["PhysicalAddress"];
            $MyObj->FriendlyAddress=$row["FriendlyAddress"];
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
       // $conn->close();
    }
    public static function addnew(Link $link)
    {  
        /*$conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
            $ID=$user->ID;
            $PhysicalAddress=$Link->PhysicalAddress;
            $FriendlyAddress=$Link->FriendlyAddress;
            date_default_timezone_set("Africa/Cairo");
            $today = date("Y-m-d H:i:s");
            DB::add("links","PhysicalAddress,FriendlyAddress,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$PhysicalAddress','$FriendlyAddress','$today','$today',0");
            
    
           // $conn->close();
            //header("Location:AddLink.php");
    }
    public static function ViewEverythingpageDropdown()
    {
        $linkarr=array();
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql2 = "SELECT Distinct Links_ID FROM content";
        $result2 = mysqli_query($mysql,$sql2);
        while($row2 = $result2->fetch_assoc()){
            if($row2==true)
            {
                $Links_ID=$row2['Links_ID'];
                array_push($linkarr,$Links_ID);
            }
        }
        $j=0;
            $Result;
        for($i=0;$i<count($linkarr);$i++)
        {
            $sql = "SELECT * FROM links where ID=$linkarr[$i]";
            $DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
            while ($row = mysqli_fetch_array($DataSet))
            {
                $MyObject= new Link();
                $MyObject->ID=$row["ID"];
                $MyObject->PhysicalAddress=$row["PhysicalAddress"];
                $MyObject->FriendlyAddress=$row["FriendlyAddress"];
                $Result[$j]=$MyObject;
                $j++;
            }
        }
		return $Result;
        //$conn->close();
    }
    public static function viewEverythingpage($id)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM content WHERE Links_ID='$id'";
        $DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		$i=0;
		$Resulttwo;
		while ($row = mysqli_fetch_array($DataSet))
		{
            $MyObject= new Link();
            $MyObject->Type_ID=$row["Type_ID"];
            //$MyObject->NameOfType=$row["NameOfType"];
            $MyObject->Content=$row["Content"];
            $Resulttwo[$i]=$MyObject;
			$i++;
		}
		return $Resulttwo;
        //$conn->close();
    }
    public static function getEverythingname($id)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM content WHERE Links_ID='$id'";
        $DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		$i=0;
		$Resulttwo;
		while ($row = mysqli_fetch_array($DataSet))
		{
            $MyObject= new Link();
            $MyObject->Type_ID=$row["Type_ID"];
            //$MyObject->NameOfType=$row["NameOfType"];
            $MyObject->Content=$row["Content"];
            $Resulttwo[$i]=$MyObject;
			$i++;
		}
		return $Resulttwo;
        //$conn->close();
    }
    public static function updateEverythingpage(Link $link)
    {
        $Links_ID=$link->Links_ID;
        $content=$link->Content;
        $Type_ID=$link->Type_ID;

        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        DB::update("content","Content='$content'","Type_ID='$Type_ID' AND Links_ID='$Links_ID'");
        //$conn->close();
    }
    public static function updateEverythingpagewithname(Link $link)
    {
        $Links_ID=$link->Links_ID;
        $content=$link->Content;
        $Type_ID=$link->Type_ID;
        $NameOfType=$link->NameOfType;


        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        DB::update("content","Content='$content'","Type_ID='$Type_ID' AND Links_ID='$Links_ID' AND NameOfType='$NameOfType'");
        //$conn->close();
    }
}
?>
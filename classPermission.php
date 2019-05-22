<?php
include_once "classDatabase.php";
require_once 'classLink.php';
require_once 'classUserType.php';
class LinkUser
{
    public  $ID;
    public  $userType_ID;
    public  $links_ID;

    public function __construct() {
       
        
    }
    public static function create(LinkUser $link)
    {
        $userType_ID=$link->userType_ID;
        $links_ID=$link->links_ID;
        
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        DB::add("usertypelinks","userType_ID,links_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$userType_ID','$links_ID','$today','$today',0");
        //$conn->close();
        //header("Location:AddPermission.php");

    }
    public static function delete(LinkUser $link)
    {
        $userType_ID=$link->userType_ID;
        $links_ID=$link->links_ID;
        DB::delete("usertypelinks","userType_ID='$userType_ID' AND links_ID='$links_ID' AND IsDeleted=0");
        //$conn->close();
        header('location: DeletePermission.php');

    }
    public static function viewlink()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM usertypelinks WHERE  IsDeleted=0";
        $result = mysqli_query($mysql,$sql);
        $Result;
        $i=0;
        if ($result->num_rows > 0) 
        {
           while($row = $result->fetch_assoc()) {
            $MyObj= new LinkUser();
            $links_ID=$row['links_ID'];
                $sqlt = "SELECT * FROM links WHERE ID= $links_ID  AND IsDeleted=0";
                $resultt =mysqli_query($mysql,$sqlt);
                if ($resultt->num_rows > 0) {
                      while($rowt = $resultt->fetch_assoc()) 
                      { 
                        $MyObj= new Link();
                        $MyObj->FriendlyAddress=$rowt['FriendlyAddress'];
                        $Result[$i]= $MyObj;
                        $i++;
                      }
                    }
                   
           } 
        }   
        return $Result;     
  }

  public static function viewuser()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM usertypelinks WHERE  IsDeleted=0";
        $result = mysqli_query($mysql,$sql);
        $Result2;
        $i=0;
        if ($result->num_rows > 0) 
        {
           while($row = $result->fetch_assoc()) {
            $userType_ID=$row['userType_ID'];
                $sqltw = "SELECT * FROM usertype WHERE ID= $userType_ID AND IsDeleted=0 ";
                $resulttw = mysqli_query($mysql,$sqltw);
                    if ($resulttw->num_rows > 0) {
                        while($rowtw = $resulttw->fetch_assoc())
                         {
                            $MyObj1= new UserType();
                            $MyObj1->Type=$rowtw['Type'];
                            $Result2[$i]=  $MyObj1;
                            $i++;
                         }
                    }
                }
        }     
            return $Result2;
    }


}
?>
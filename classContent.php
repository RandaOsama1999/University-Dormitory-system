<?php
include_once "classDatabase.php";
class Content
{
    public  $ID;
    public  $Links_ID;
    public  $Type_ID;
    public  $NameOfType;
    public  $Content;

    public function __construct() {
    }
    public static function EmailContent($link)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM content WHERE Links_ID='$link'";
        $result = mysqli_query($mysql,$sql);
        while($row = $result->fetch_assoc()){
            if($row==true)
            {
                $Type_ID=$row['Type_ID'];
                if($Type_ID==1){
                    $cont=$row['Content'];
                    return $cont;
                }
            }
        }
    }
    public static function Alert($link,$name)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM content WHERE Links_ID='$link' AND NameOfType='$name'";
        $result = mysqli_query($mysql,$sql);
        while($row = $result->fetch_assoc()){
            if($row==true)
            {
                $Type_ID=$row['Type_ID'];
                if($Type_ID==2){
                    $cont2=$row['Content'];
                    return $cont2;
                } 
            }
        }
    }
    public static function Button($link,$name)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM content WHERE Links_ID='$link' AND NameOfType='$name'";
        $result = mysqli_query($mysql,$sql);
        while($row = $result->fetch_assoc()){
            if($row==true)
            {
                $Type_ID=$row['Type_ID'];
                if($Type_ID==3)
                {
                    $cont3=$row['Content'];
                    return $cont3;
                }
            }
        }
    }
}
?>
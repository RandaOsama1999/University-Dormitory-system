<?php
include_once "classDatabase.php";
class Options
{

    public  $OptionsID;
    public  $OptionsName;
    public  $OptionsType;
 

    public function __construct() {

    }

    public static function addOptions(Options $Options)
    {
        $connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        $OptionsName=$Options->OptionsName;
        $OptionsType=$Options->OptionsType;
         
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $connection->add("options","Name,Type,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$OptionsName','$OptionsType','$today','$today',0");
    
        $conn->close();
      //  header("Location:Pay.php");

    }

}
?>
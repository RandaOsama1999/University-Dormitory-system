<?php
include_once "classDatabase.php";
class Pay
{

    public  $PaymethodID;
    public  $PaymethodType;
 

    public function __construct() {

    }

    public static function addpaymethod(Pay $pay)
    {
        $connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        $PaymethodType=$pay->PaymethodType;
         
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $connection->add("paymentmethod","Type,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$PaymethodType','$today','$today',0");
        

        $conn->close();
        //header("Location:Pay.php");

    }

}
?>
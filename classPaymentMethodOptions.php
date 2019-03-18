<?php
include_once "classDatabase.php";
class LinkPaymentAndOptions
{

    public  $ID;
    public  $Pay_ID;
    public  $Option_ID;
 

    public function __construct() {

    }

    public static function addpaymentmethodoption(LinkPaymentAndOptions $LinkPaymentAndOptions)
    {
        $connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        $Pay_ID=$LinkPaymentAndOptions->Pay_ID;
        $Option_ID=$LinkPaymentAndOptions->Option_ID;
         
         
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $connection->add("paymentmethodoptions","Pay_ID,Option_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$Pay_ID','$Option_ID','$today','$today',0");
        

        $conn->close();
        //header("Location:Pay.php");

    }

}
?>
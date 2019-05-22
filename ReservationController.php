<?php
require_once 'classReservation.php';
require_once 'classReservationView.php';
include_once("charts4php-free-latest/config.php");
include_once(CHARTPHP_LIB_PATH . "/inc/chartphp_dist.php");
class ReserveController{
    public static function SearchReserves()
    {
        ReservationView::SearchReserves();
        if(isset($_POST['remove'])){
            $obj = new ReservRooms();
            $obj->Email=$_POST['mail'];
            $iD=ReservRooms::search($obj);
            echo '<script type="text/javascript">';
            echo 'window.location.href="UpdateReservationAfterSearch.php?id='.$iD.'";';
            echo '</script>';
        }
    }
    public static function UpdateReserves($iD)
    {
        ReservationView::UpdateReserves();
        if(isset($_POST['Submit'])){
            $obj = new ReservRooms();
            $obj->RoomNo=$_POST['room'];
            $obj->BuildingNo=$_POST['BuildingNo'];
            $obj->Student_ID=$iD; 
            ReservRooms::update($obj);
        }
    }
    public static function DeleteReserves()
    {
        ReservationView::DeleteReserves();
        if(isset($_POST['remove'])){
                                
            $obj = new ReservRooms();
            $obj->Email=$_POST['mail'];
            $iD=ReservRooms::search($obj);
            ReservRooms::delete($iD);
        }
    }
    public static function ViewReserves()
    {
        $Result=ReservRooms::ViewAllReservations();
        ReservationView::ShowAllReservations($Result);
    }
    public static function ViewRommmates($email)
    {
        $Result=ReservRooms::ViewRoomMates($email);
        ReservationView::ShowAllRoommates($Result);
    }
    public static function viewReport()
    {
        $out=ReservRooms::viewReport();
        ReservationView::viewReport($out);
        if(isset($_POST['Submit']))
        {
            if(!isset($_SESSION['sanwy']))
            {
                echo "<script> alert('اختر مبني ثانوية عامة');</script>";
            }
            else{
                echo '<script type="text/javascript">';
                echo 'window.location.href="ReservationStarts.php";';
                echo '</script>';
            }
        }
    }
}


?>
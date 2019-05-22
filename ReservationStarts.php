<?php
include_once "classUserModel.php";
include_once "classDatabase.php";
include_once "classReservation.php";

session_start();
if (!isset($_SESSION['email'])) {
    header('location: page-login.php');
}
if (isset($_GET['Logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: page-login.php");
}
ReservRooms::reservationStarts();
?>
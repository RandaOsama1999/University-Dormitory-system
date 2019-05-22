<?php
include_once "classUserModel.php";
include_once "classDatabase.php";
include_once "ReservationController.php";
include_once("charts4php-free-latest/config.php");
include_once(CHARTPHP_LIB_PATH . "/inc/chartphp_dist.php");
session_start();
if (!isset($_SESSION['email'])) {
    header('location: page-login.php');
}
if (isset($_GET['Logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: page-login.php");
}
ReserveController::viewReport();
?>
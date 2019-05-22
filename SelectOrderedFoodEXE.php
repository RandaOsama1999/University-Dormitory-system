<?php
include_once "OrderedFoodController.php";
include_once "classDatabase.php";
 
if (!isset($_SESSION['email'])) {
    header('location: page-login.php');
}
if (isset($_GET['Logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: page-login.php");
}
 
OrderedFoodController::SelectOrder();
?>
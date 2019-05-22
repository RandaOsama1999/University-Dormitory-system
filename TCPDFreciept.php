<?php
include_once "classDatabase.php";
include_once "classFacade.php";
include_once "DormFees.php";
include_once "RoomFees.php";
include_once "Decor3Meals.php";
include_once "Decor2Meals.php";
include_once "Decor1Meal.php";
include_once "Decor_Washing.php";
include_once "Decor_Services.php";
include_once "Decor_ExtraServices.php";
include_once "Decor_Cleaning.php";
require_once('TCPDF-master/examples/tcpdf_include.php');
require_once('TCPDF-master/tcpdf.php');

session_start();

// Extend the TCPDF class to create custom Header and Footer


$facade=new facade();
$facade->VisaPDF();

?>
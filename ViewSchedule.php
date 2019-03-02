<?php
include_once "classUser.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: page-login.php');
}
if (isset($_GET['Logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: page-login.php");
}
$servername = "localhost";
            $username = "root";
            $password = "";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $conn->query("SET NAMES 'utf8'");
            $email = $_SESSION['email'];
            $PageName=basename($_SERVER['PHP_SELF']);
            $sql = "SELECT * FROM alazharuni.links WHERE PhysicalAddress='$PageName'";
            $resultQuery = $conn->query($sql);
            while($row = $resultQuery->fetch_assoc()){
                if($row==true)
                {
                    echo $row['HTMLText'];
                }
            }

?>

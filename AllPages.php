<?php
include_once "userController.php";
include_once "classDatabase.php";
if (!isset($_SESSION['email'])) {
    header('location: page-login.php');
}
if (isset($_GET['Logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: page-login.php");
}

$conn=DB::getInstance();
$mysql=$conn->getConnection();
$conn=mysqli_query($mysql,"SET NAMES 'utf8'");
            $email = $_SESSION['email']; 

            $sql = "SELECT * FROM user WHERE Email='$email' AND IsDeleted=0";
            $resultQuery = mysqli_query($mysql,$sql);
            while($row = $resultQuery->fetch_assoc()){
                if($row==true)
                {
                    $ID=$row['ID'];
                }
            }
            userController::UpdateMyself($ID);
            
            //$conn->close();

?>
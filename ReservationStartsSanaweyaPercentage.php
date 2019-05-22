<?php
include_once "classUserModel.php";
include_once "classBuilding.php";
include_once "classDatabase.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: page-login.php');
}
if (isset($_GET['Logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: page-login.php");
}
if(isset($_POST['Submit']))
{
    $_SESSION['sanwy']=$_POST['sanwy'];
    $sanwy=$_SESSION['sanwy'];
    //echo "<script> alert('".$sanwy."');</script>";
    echo '<script type="text/javascript">';
            echo 'window.location.href="showDashboard.php";';
            echo '</script>';
}
$Result=Building::ViewDropdown();
include_once "header.php";
echo '<form class="form-group" method="post">
<div class="form-group">
                <label for="user" class="label" style="margin-left: 75%;font-size:20px;color:black;"> اختر مبني لتسكين ثانوية عامة<span class="text-danger">*</label>
                <select class="form-control" name="sanwy" id="sanwy" style="direction:RTL;" required>';
            for($k=0;$k<count($Result);$k++)
            {
            echo '<option  value="'.$Result[$k]->ID.'">'.$Result[$k]->Building.'</option> ';
            } 
            echo '</select>
            </div>';                                 
            $cont3=Content::Button(56,"Submit");
            echo '
        <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30"> '.$cont3.'</button>
        </form>';
include_once "footer.php";
?>

<?php
include_once "classDatabase.php";
$conn=DB::getInstance();
$mysql=$conn->getConnection();
$conn=mysqli_query($mysql,"SET NAMES 'utf8'");


$sql = "SELECT DISTINCT FloorNo FROM room WHERE BuildingNo =".$_POST['BuildingNo']." AND IsDeleted=0"; 


$result = mysqli_query($mysql,$sql);

   while($row = $result->fetch_assoc()){
    if($row==true)
    {

            echo '<option value="'.$row['FloorNo'].'">'.$row['FloorNo'].'</option>';
    }
   }


?>
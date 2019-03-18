<?php
include_once "classDatabase.php";
$connection = new DB();
$conn = $connection->connect();
$conn->query("SET NAMES 'utf8'");


$sql = "SELECT * FROM room WHERE BuildingNo =".$_POST['BuildingNo']." AND FloorNo =".$_POST['FloorNo']." AND IsDeleted=0"; 


$result = $conn->query($sql); 

   while($row = $result->fetch_assoc()){
    if($row==true)
    {

            echo '<option value="'.$row['RoomNo'].'">'.$row['RoomNo'].'</option>';
    }
   }


?>
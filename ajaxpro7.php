<?php
$servername = "localhost";
$name = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $name, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->query("SET NAMES 'utf8'");


$sql = "SELECT * FROM alazharuni.room WHERE BuildingNo =".$_POST['BuildingNo'].""; 


$result = $conn->query($sql); 

   while($row = $result->fetch_assoc()){
    if($row==true)
    {

            echo '<option value="'.$row['RoomNo'].'">'.$row['RoomNo'].'</option>';
    }
   }


?>
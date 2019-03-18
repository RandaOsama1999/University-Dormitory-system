<?php
include_once "classDatabase.php";
$connection = new DB();
$conn = $connection->connect();
$conn->query("SET NAMES 'utf8'");

$sql = "SELECT * FROM address WHERE Parent_ID =".$_POST['country_id'].""; 


$result = $conn->query($sql); 

   while($row = $result->fetch_assoc()){
    if($row==true)
    {
    echo '<option value="'.$row['ID'].'">'.$row['Name'].'</option>';
    }
   }


?>
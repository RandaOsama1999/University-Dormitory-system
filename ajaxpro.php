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

$sql = "SELECT * FROM alazharuni.address WHERE Parent_ID =".$_POST['country_id'].""; 


$result = $conn->query($sql); 

   while($row = $result->fetch_assoc()){
    if($row==true)
    {
    echo '<option value="'.$row['ID'].'">'.$row['Name'].'</option>';
    }
   }


?>
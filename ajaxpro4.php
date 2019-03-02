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

$sql = "SELECT * FROM alazharuni.usertypelinks WHERE userType_ID =".$_POST['userTypeid'].""; 


$result = $conn->query($sql); 

   while($row = $result->fetch_assoc()){
    if($row==true)
    {
        $links_ID=$row['links_ID'];
        $sqlt = "SELECT * FROM alazharuni.links WHERE ID =".$links_ID.""; 
        $resultt = $conn->query($sqlt); 

        while($rowt = $resultt->fetch_assoc()){
            if($rowt==true)
            {
                echo '<option value="'.$links_ID.'">'.$rowt['FriendlyAddress'].'</option>';
            }
        }
    }
   }


?>
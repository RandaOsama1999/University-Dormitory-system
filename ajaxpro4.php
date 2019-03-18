<?php
include_once "classDatabase.php";
$connection = new DB();
$conn = $connection->connect();
$conn->query("SET NAMES 'utf8'");

$sql = "SELECT * FROM usertypelinks WHERE userType_ID =".$_POST['userTypeid']." AND IsDeleted=0"; 


$result = $conn->query($sql); 

   while($row = $result->fetch_assoc()){
    if($row==true)
    {
        $links_ID=$row['links_ID'];
        $sqlt = "SELECT * FROM links WHERE ID =".$links_ID." AND IsDeleted=0"; 
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
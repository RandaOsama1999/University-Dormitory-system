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
$links_ID=array();
$links_ID2=array();
$sql = "SELECT * FROM alazharuni.usertypelinks WHERE userType_ID =".$_POST['userTypeid'].""; 
$result = $conn->query($sql); 

   while($row = $result->fetch_assoc()){
        if($row==true)
        {
            array_push($links_ID, $row['links_ID']);
        }
    }
    $sqltw = "SELECT * FROM alazharuni.usertypelinks WHERE userType_ID !=".$_POST['userTypeid'].""; 
    $resulttw = $conn->query($sqltw); 

        while($rowtw = $resulttw->fetch_assoc()){
            if($rowtw==true)
            {
                array_push($links_ID2, $rowtw['links_ID']);
            }
        }
        $result=array_diff($links_ID2,$links_ID);
        foreach ($result as $arr) {
            /*for($j=0;$j<sizeof($links_ID);$j++)
            {
                if($links_ID2[$i] != $links_ID[$j]){*/
                $sqlt = "SELECT * FROM alazharuni.links WHERE ID =".$arr.""; 
                $resultt = $conn->query($sqlt); 
                
                    while($rowt = $resultt->fetch_assoc()){
                        if($rowt==true)
                        {
                            
                            echo '<option value="'.$arr.'">'.$rowt['FriendlyAddress'].'</option>';
                        }
                    }
               /* }

            }*/
        }
        

?>
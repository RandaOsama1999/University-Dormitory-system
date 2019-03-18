<?php
include_once "classDatabase.php";
$connection = new DB();
$conn = $connection->connect();
        $id2=array();
                    $sqltwo = "SELECT * FROM reservation WHERE IsDeleted=0";
                    $resulttwo = $conn->query($sqltwo);
                    while($rowtwo = $resulttwo->fetch_assoc()){
                        if($rowtwo==true)
                        {
                            array_push($id2, $rowtwo['Student_ID']);
                            
                        }
                    }
for($j=0;$j<sizeof($id2);$j++)
{
if(isset($_GET["term"])){
    $sqltwo = "SELECT * FROM student WHERE ID=".$id2[$j]."";
                $resulttwo = $conn->query($sqltwo) or die($conn->error);
                while($rowtwo = $resulttwo->fetch_assoc()){
                    if($rowtwo==true)
                    {
                        $stdid=$rowtwo['Student_ID'];
    $sql = "SELECT * FROM user WHERE Email LIKE ? AND ID=$stdid AND IsDeleted=0";
    
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = $_REQUEST["term"] . '%';
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    
                            echo "<p>" . $row["Email"] . "</p>";
                        
                    
                }
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
                }
            }
} 
// close connection
mysqli_close($conn);
?>
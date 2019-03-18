<?php
include_once "classDatabase.php";
$connection = new DB();
$conn = $connection->connect();
    $conn->query("SET NAMES 'utf8'");
    
        $sqlone = "SELECT * FROM statichtml WHERE ID=1";
        $resultone = $conn->query($sqlone);

           while($rowT= $resultone->fetch_assoc())
                {  
                    if($rowT==true)
                    {
                           $html=$rowT["html"];
                    }
                }
                echo $html;
?>
<html>
    <body>
        <div>
            <form action="action.php">
        <button type=submit class="btn btn-primary btn-flat m-b-30 m-t-30" > update </button>
            </form>
            </div>
            </body>
    </html>
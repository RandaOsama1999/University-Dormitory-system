<?php

class Link
{
    public  $ID;
    public  $PhysicalAddress;
    public  $FriendlyAddress;
    public  $HTMLText;

    public function __construct() {
       
        
    }

    /*public static function read()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alazharuni";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql = "SELECT * FROM links";
        $result = $conn->query($sql);
        echo "<br><br><br><br><br><br><br><h1 style='color: rgba(196, 90, 143, 0.836); text-align: center;'>All Links</h1><br><table align='center'>
        <tr>
        <th>Link</th>
        <th>Friendly Name</th>
        </tr>";
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                        echo "<td>" . $row['PhysicalAddress'] . "</td>";
                        echo "<td>" . $row['FriendlyAddress'] . "</td>";
                        echo "</tr>";
                    
                }
            }
        
        echo "</table>";
        $conn->close();

    }
    /*public static function create(Link $link)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alazharuni";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
                $mysql="INSERT INTO links (PhysicalAddress,FriendlyAddress,HTMLText) 
                VALUES ('$link->PhysicalAddress','$link->FriendlyAddress','$link->HTMLText')";
                mysqli_query($conn,$mysql);
        $conn->close();
        header("Location:AllPages.php");

    }
    public static function delete(Link $link)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alazharuni";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
                $mysql="DELETE FROM links WHERE ID=$link->ID";
                mysqli_query($conn,$mysql);
        $conn->close();
        header('location: DeleteLink.php');

    }*/
    public static function update(Link $link)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alazharuni";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $conn->query("SET NAMES 'utf8'");
        $mysql="UPDATE links SET FriendlyAddress='$link->FriendlyAddress' WHERE ID='$link->ID'";
        mysqli_query($conn,$mysql);
        $conn->close();
        header("Location:UpdateLink.php");

    }

}
?>
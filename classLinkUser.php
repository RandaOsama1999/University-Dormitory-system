<?php

class LinkUser
{
    public  $ID;
    public  $userType_ID;
    public  $links_ID;

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
        $conn->query("SET NAMES 'utf8'");
        $sql = "SELECT * FROM usertypelinks";
        $result = $conn->query($sql);
        echo "<br><br><br><br><br><br><br><h1 style='color: rgba(196, 90, 143, 0.836); text-align: center;'>All Links</h1><br><table align='center'>
        <tr>
        <th>UserType</th>
        <th>Permission</th>
        </tr>";
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $usert_ID=$row['userType_ID'];
                $lin_ID=$row['links_ID'];
                echo "<tr>";
                $sqltw = "SELECT * FROM usertype WHERE ID=$usert_ID ";
                $resulttw = $conn->query($sqltw);
                if ($resulttw->num_rows > 0) {
                    while($rowtw = $resulttw->fetch_assoc()) {
                        echo "<td>" . $rowtw['Type'] . "</td>";
                    }
                }

                $sqlt = "SELECT * FROM links WHERE ID=$lin_ID ";
                $resultt = $conn->query($sqlt);
                if ($resultt->num_rows > 0) {
                    while($rowt = $resultt->fetch_assoc()) {
                        echo "<td>" . $rowt['FriendlyAddress'] . "</td>";
                    }
                }
                echo "</tr>";
                    
                }
            }
        
        echo "</table>";
        $conn->close();

    }*/
    public static function create(LinkUser $link)
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
                $mysql="INSERT INTO usertypelinks (userType_ID,links_ID) 
                VALUES ('$link->userType_ID','$link->links_ID')";
                mysqli_query($conn,$mysql);
        $conn->close();
        header("Location:AllPages.php");

    }
    public static function delete(LinkUser $link)
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
                $mysql="DELETE FROM usertypelinks WHERE userType_ID=$link->userType_ID AND links_ID=$link->links_ID";
                mysqli_query($conn,$mysql);
        $conn->close();
        header('location: DeletePermission.php');

    }
    /*public static function update(LinkUser $link)
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

        $mysql="UPDATE usertypelinks SET userType_ID='$link->userType_ID', links_ID='$link->links_ID' WHERE ID='$link->ID'";
        mysqli_query($conn,$mysql);
        $conn->close();
        header("Location:AllPages.php");

    }*/

}
?>
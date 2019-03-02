<?php

class UserType
{

    public  $ID;
    public  $Type;

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
        $sql = "SELECT * FROM usertype";
        $result = $conn->query($sql);
        echo "<br><br><br><br><br><br><br><h1 style='color: rgba(196, 90, 143, 0.836); text-align: center;'>All User Types</h1><br><table align='center'>
        <tr>
        <th>Type</th>
        </tr>";
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                        echo "<td>" . $row['Type'] . "</td>";
                        echo "</tr>";
                    
                }
            }
        
        echo "</table>";
        $conn->close();

    }*/
    public static function create(UserType $user)
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
                $mysql="INSERT INTO usertype (Type) 
                VALUES ('$user->Type')";
                mysqli_query('SET CHARACTER SET utf8'); 
                mysqli_query($conn,$mysql);
        $conn->close();
        header("Location:AllPages.php");

    }
    public static function delete(UserType $user)
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
                $mysql="DELETE FROM usertype WHERE ID=$user->ID";
                mysqli_query($conn,$mysql);
        $conn->close();
        header('location: DeleteUserType.php');

    }/*
    public static function update(UserType $user)
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
        
        $mysql="UPDATE usertype SET Type='$user->Type' WHERE ID='$user->ID'";
        mysqli_query($conn,$mysql);
        $conn->close();
        header("Location:AllPages.php");

    }*/

}
?>
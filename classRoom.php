<?php

class Rooms
{

    public  $ID;
    public  $BuildingNo;
    public  $FloorNo;
    public  $RoomNo;
    public  $Capacity;

    public function __construct() {
       
        
    }

    public static function read()
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
        $sql = "SELECT * FROM room";
        $result = $conn->query($sql);
        echo "<br><br><br><br><br><br><br><h1 style='color: rgba(196, 90, 143, 0.836); text-align: center;'>All Users</h1><br><table align='center'>
        <tr>
        <th>BuildingNo</th>
        <th>FloorNo</th>
        <th>RoomNo</th>
        <th>Capacity</th>
        </tr>";
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                        echo "<td>" . $row['BuildingNo'] . "</td>";
                        echo "<td>" . $row['FloorNo'] . "</td>";
                        echo "<td>" . $row['RoomNo'] . "</td>";
                        echo "<td>" . $row['Capacity'] . "</td>";
            }
        }
        echo "</table>";
        $conn->close();

    }
    public static function create(Rooms $room)
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
                $mysql="INSERT INTO room (BuildingNo,FloorNo,RoomNo,Capacity) 
                VALUES ('$room->BuildingNo','$room->FloorNo','$room->RoomNo','$room->Capacity')";
                mysqli_query($conn,$mysql);
        $conn->close();
        header("Location:AddRoom.php");

    }
     
    public static function delete(Rooms $room)
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
                $mysql="DELETE FROM room WHERE RoomNo='$room->RoomNo' AND BuildingNo='$room->BuildingNo'";
                mysqli_query($conn,$mysql);
        $conn->close();
        header("Location:DeleteRoom.php");

    
    }
    public static function update(Rooms $room)
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
                $mysql="UPDATE room SET Capacity='$room->Capacity' WHERE RoomNo='$room->RoomNo' AND BuildingNo='$room->BuildingNo'";
                mysqli_query($conn,$mysql);
        $conn->close();
        header("Location:UpdateRoom.php");

    }

}
?>
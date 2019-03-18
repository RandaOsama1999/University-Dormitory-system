<?php
include_once "classDatabase.php";
class Rooms
{

    public  $ID;
    public  $BuildingNo;
    public  $FloorNo;
    public  $RoomNo;
    public  $Capacity;

    public function __construct() {
       
        
    }

    /*public static function read()
    {
        $connection = new DB();
$conn = $connection->connect();
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

    }*/
    public static function create(Rooms $room)
    {
        $BuildingNo=$room->BuildingNo;
        $FloorNo=$room->FloorNo;
      $RoomNo=$room->RoomNo;
      $Capacity=$room->Capacity;
        $connection = new DB();
$conn = $connection->connect(); 
        $conn->query("SET NAMES 'utf8'");
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $connection->add("room","BuildingNo,FloorNo,RoomNo,Capacity,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$BuildingNo','$FloorNo','$RoomNo','$Capacity','$today','$today',0");
        
        $conn->close();
        header("Location:AddRoom.php");

    }
     
    public static function delete(Rooms $room)
    {
        $BuildingNo=$room->BuildingNo;
        $FloorNo=$room->FloorNo;
      $RoomNo=$room->RoomNo;
      $Capacity=$room->Capacity;
        $connection = new DB();
$conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        $connection->delete("room","RoomNo='$room->RoomNo' AND BuildingNo='$room->BuildingNo' AND IsDeleted=0");
        $conn->close();
        header("Location:DeleteRoom.php");

    
    }
    public static function update(Rooms $room)
    {
        $BuildingNo=$room->BuildingNo;
        $FloorNo=$room->FloorNo;
      $RoomNo=$room->RoomNo;
      $Capacity=$room->Capacity;
        $connection = new DB();
$conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $connection->update("room","Capacity='$Capacity'","RoomNo='$RoomNo' AND BuildingNo='$BuildingNo' AND IsDeleted=0");
        
        $conn->close();
        header("Location:UpdateRoom.php");

    }

}
?>
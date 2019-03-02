<?php

class ReservRooms
{

    public  $ID;
    public  $Student_ID;
    public  $Room_ID;
    public  $DateFrom;
    public  $DateTo;
    public function __construct() {
       
        
    }
    public static function create(ReservRooms $room)
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
                $mysql="INSERT INTO reservation (Student_ID,DateFrom,DateTo) 
                VALUES ('$room->Student_ID','$room->DateFrom','$room->DateTo')";
                mysqli_query($conn,$mysql);
                $id=mysqli_insert_id($conn);
                $mysql2="INSERT INTO reservationdetails (Room_ID,Reservation_ID) 
                VALUES ('$room->Room_ID','$id')";
                mysqli_query($conn,$mysql2);
                $mysql3="UPDATE student SET State_ID=1 WHERE Student_ID=$room->Student_ID";
                mysqli_query($conn,$mysql3);
        $conn->close();
        header("Location:AddReservation.php");

    }
    public static function update(ReservRooms $room)
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
                $mysql="UPDATE reservation SET DateFrom='$room->DateFrom', DateTo='$room->DateTo'  WHERE Student_ID='$room->Student_ID'";
                mysqli_query($conn,$mysql);
                $sql="SELECT * FROM reservation WHERE Student_ID=$room->Student_ID";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            if($row==true)
            {
                $id=$row['ID'];
                $mysql2="UPDATE reservationdetails SET Room_ID='$room->Room_ID' WHERE Reservation_ID='$id'";
                mysqli_query($conn,$mysql2);
            }
        }
        $conn->close();
        header("Location:UpdateReservation.php");

    }
    public static function delete(ReservRooms $reservrooms)
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
        $sql="SELECT * FROM reservation WHERE Student_ID=$reservrooms->Student_ID";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            if($row==true)
            {
                $reservrooms->ID=$row['ID'];
                $mysql="DELETE FROM reservationdetails WHERE ID=$reservrooms->ID";
                mysqli_query($conn,$mysql);
            }
        }

                $mysql="DELETE FROM reservation WHERE Student_ID=$reservrooms->Student_ID";
                mysqli_query($conn,$mysql);
                
        $conn->close();
        header('location: DeleteReservedRoom.php');
    }
}
<?php
include_once "classDatabase.php";

class ReservRooms
{

    public  $ID;
    public  $Student_ID;
    public  $Room_ID;
    public function __construct() {
       
        
    }
    /*public static function create(ReservRooms $room)
    {
        $Student_ID=$room->Student_ID;
    $Room_ID=$room->Room_ID;
      $DateFrom=$room->DateFrom;
      $DateTo=$room->DateTo;
        $connection = new DB();
$conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        date_default_timezone_set("Africa/Cairo");
                        $thisyear = date("Y");
                        $nextyear = $thisyear+1;
                        $last_id=$connection->addwithid("reservation","Student_ID,Room_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$Student_ID','$Room_ID','$today','$today',0");
                    
                        $connection->add("reservationdetails","YearFrom,YearTo,Reservation_ID","$thisyear','$nextyear','$last_id'");

                        $connection->update("student","State_ID=1","Student_ID=$Student_ID");
        $conn->close();
        header("Location:AddReservation.php");

    }*/
    public static function update(ReservRooms $room)
    {
        $Student_ID=$room->Student_ID;
    $Room_ID=$room->Room_ID;
        $connection = new DB();
$conn = $connection->connect();
date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $conn->query("SET NAMES 'utf8'");
        $connection->update("reservation","Room_ID='$Room_ID',LastUpdatedDateTime='$today'","Student_ID=$Student_ID AND IsDeleted=0");
              /*  $sql="SELECT * FROM reservation WHERE Student_ID=$room->Student_ID";
        $result = $conn->query($sql);
        while($row = $result->fetch_assoc()){
            if($row==true)
            {
                $id=$row['ID'];
                $connection->update("reservationdetails","DateFrom='$DateFrom' ,DateTo='$DateTo'","Reservation_ID='$id' AND IsDeleted=0");
                mysqli_query($conn,$mysql2);
            }
        }*/
        $conn->close();
        header("Location:UpdateReservation.php");

    }
    public static function delete(ReservRooms $reservrooms)
    {
        $Student_ID=$reservrooms->Student_ID;
        $connection = new DB();
        $conn = $connection->connect();

        $connection->delete("reservation","Student_ID='$Student_ID'");

                $connection->update("student","State_ID=3","Student_ID=$Student_ID AND IsDeleted=0");
                
        $conn->close();
        header('location: DeleteReservedRoom.php');
    }
}
<?php
include_once "classUser.php";
include_once "classDatabase.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: page-login.php');
}
if (isset($_GET['Logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: page-login.php");
}
$connection = new DB();
$conn = $connection->connect();
$conn->query("SET NAMES 'utf8'");
$email = $_SESSION['email']; 
$room=array();
$capacity=array();
$sql="SELECT * FROM room WHERE IsDeleted=0";
$resultQuery = $conn->query($sql);
while($row = $resultQuery->fetch_assoc())
{
   if($row==true)
	 {
	   $id=$row["ID"];
       $Capacity=$row["Capacity"];
       array_push($room,$id);
       array_push($capacity,$Capacity);
	 }

}

            $x=0;
for ($i = 0; $i < $capacity[$x]; $i++) {
    $sql="SELECT * FROM student WHERE State_ID=2 ORDER BY Grade_ID LIMIT $capacity[$x]";
    $resultQuery = $conn->query($sql);
    while($row = $resultQuery->fetch_assoc())
    {
        if($row==true)
        {
             date_default_timezone_set("Africa/Cairo");
                $thisyear = date("Y");
                $nextyear = date("Y")+1;
                $today = date("Y-m-d H:i:s");
                $id= $row['ID'];
               $last_id=$connection->addwithid("reservation","Student_ID,Room_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$id','$room[$x]','$today','$today',0");
            
            $connection->add("reservationdetails","YearFrom,YearTo,Reservation_ID","'$thisyear','$nextyear','$last_id'");
                $connection->update("student","State_ID=1","ID=$id");  
            
        }

    }
    $x=$x+1;
}
header('location: showDashboard.php');
?>
<?php
include_once "classDatabase.php";
include_once "classRoom.php";
include_once "InterfaceClassReport.php";
include_once "classUserModel.php";
include_once "classDatabase.php";
include_once("charts4php-free-latest/config.php");
include_once(CHARTPHP_LIB_PATH . "/inc/chartphp_dist.php");
class ReservRooms implements report
{

    public  $ID;
    public  $Student_ID;
    public  $Room_ID;
    public $YearFrom;
    public $YearTo;
    public $Email;
    public $RoomNo;
    public $Capacity;
    public $FloorNo;
    public $BuildingNo;
    public function __construct() {
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    }
    public function __construct1($id) {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        if ($id !="")
		{	
			$sqltot="SELECT * from reservation WHERE IsDeleted=0 AND ID=$id";
            $resulttot = mysqli_query($mysql,$sqltot);
            if ($resulttot->num_rows > 0) {
                while($rowtot = $resulttot->fetch_assoc()) {
                $this->ID=$id;
				$this->Room_ID=$rowtot["Room_ID"];
                $this->Student_ID=$rowtot["Student_ID"];
                $sqlt = "SELECT * FROM reservationdetails WHERE Reservation_ID='$id'";
                $resultt = mysqli_query($mysql,$sqlt);
                    if ($resultt->num_rows > 0) {
                        while($rowt = $resultt->fetch_assoc()) {
                            $this->YearFrom=$rowt["YearFrom"];
                            $this->YearTo=$rowt["YearTo"];
                        }
                    }
                                        
                    $sql = "SELECT * FROM room WHERE ID=".$this->Room_ID." AND IsDeleted=0";
                    $result = mysqli_query($mysql,$sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                                                
                                $this->Capacity=$row['Capacity'];
                                $this->FloorNo=$row['FloorNo'];
                                $this->BuildingNo=$row['BuildingNo'];
                                $this->RoomNo=$row['RoomNo'];
                            }
                        }
                                        
                    $sqltwo = "SELECT * FROM student WHERE ID=".$this->Student_ID."";
                    $resulttwo = mysqli_query($mysql,$sqltwo);
                        if ($resulttwo->num_rows > 0) {
                            while($rowtwo = $resulttwo->fetch_assoc()) {
                                $userid=$rowtwo['Student_ID'];
                                $sqlto = "SELECT * FROM user WHERE ID=$userid AND IsDeleted=0";
                                $resultto = mysqli_query($mysql,$sqlto);
                                if ($resultto->num_rows > 0) {
                                    while($rowto = $resultto->fetch_assoc()) {
                                        $this->Email=$rowto["Email"];
                                    }
                                }        
                            }
                        }  
            }
        }
    }
    //$conn->close();
}
    public function __construct2($roomid,$reservationid) {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        if ($roomid !="" && $reservationid !="")
        {	
            $sqltw = "SELECT * FROM reservation WHERE Room_ID='$roomid' AND ID='$reservationid' AND IsDeleted=0";
            $resulttw = mysqli_query($mysql,$sqltw);
            if ($resulttw->num_rows > 0) {
                while($rowtw = $resulttw->fetch_assoc()) {
                    //$Reservation_ID=$rowtw['ID'];
                    //$Student_ID=$rowtw['Student_ID'];
                    $this->Student_ID=$rowtw["Student_ID"];
                    $sqlt = "SELECT * FROM reservationdetails WHERE Reservation_ID=$reservationid";
                    $resultt = mysqli_query($mysql,$sqlt);
                    if ($resultt->num_rows > 0) {
                        while($rowt = $resultt->fetch_assoc()) {
                            //$Room_ID=$rowt['Room_ID'];
                            /*$Reservation_ID=$rowt['Reservation_ID'];
                            $DateFrom=$rowt['YearFrom'];
                                    $DateTo=$rowt['YearTo'];*/
                                    $this->YearFrom=$rowt["YearFrom"];
                                    $this->YearTo=$rowt["YearTo"];
                        
        
                    $sql = "SELECT * FROM room WHERE ID=$roomid AND IsDeleted=0";
                    $result =mysqli_query($mysql,$sql);
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            $this->Capacity=$row['Capacity'];
                                $this->FloorNo=$row['FloorNo'];
                                $this->BuildingNo=$row['BuildingNo'];
                                $this->RoomNo=$row['RoomNo'];
                        }
                    }
                    $sqltwo = "SELECT * FROM student WHERE ID=".$this->Student_ID."";
                    $resulttwo =mysqli_query($mysql,$sqltwo);
                    if ($resulttwo->num_rows > 0) {
                        while($rowtwo = $resulttwo->fetch_assoc()) {
                            $userid=$rowtwo['Student_ID'];
                            $sqlto = "SELECT * FROM user WHERE ID=$userid AND IsDeleted=0";
                            $resultto = mysqli_query($mysql,$sqlto);
                            if ($resultto->num_rows > 0) {
                                while($rowto = $resultto->fetch_assoc()) {
                                    $this->Email=$rowto["Email"];
                                }
                            }
                        }
                    }
                        
                }
            }
                
            }
        }  


            
        }
        //$conn->close();
    }
 
    public static function ViewAllReservations()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $sql = "SELECT * FROM reservation WHERE IsDeleted=0";
		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($DataSet))
		{
			$MyObj= new ReservRooms($row["ID"]);
            $Result[$i]=$MyObj;
            //echo "<script> alert('".$Result[$i]->Student_ID."');</script>";
			$i++;
		}
		return $Result;
       // $conn->close();

    }
    public static function search(ReservRooms $room)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $mail=$room->Email;
        $sqltwo = "SELECT ID FROM user WHERE Email='$mail' AND IsDeleted=0";
                $resulttwo =mysqli_query($mysql,$sqltwo) or die($conn->error);
                while($rowtwo = $resulttwo->fetch_assoc()){
                    if($rowtwo==true)
                    {
                        $id=$rowtwo['ID'];
                        $sqlt = "SELECT ID FROM student WHERE Student_ID='$id'";
                        $resultt = mysqli_query($mysql,$sqlt)or die($conn->error);
                        while($rowt = $resultt->fetch_assoc()){
                            if($rowt==true)
                            {
                                $stdid=$rowt['ID'];
                                return $stdid;
                            }
                        }
                        
                    }
                }
       // $conn->close();

    }
    public static function update(ReservRooms $room)
    {
        $RoomNo=$room->RoomNo;
        $BuildingNo=$room->BuildingNo;
        $Student_ID=$room->Student_ID;
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $sqltwo = "SELECT * FROM room WHERE RoomNo='$RoomNo' AND BuildingNo='$BuildingNo'";
        $resulttwo = mysqli_query($mysql,$sqltwo) or die($conn->error);
        while($rowtwo = $resulttwo->fetch_assoc()){
            if($rowtwo==true)
            {
                $Room_ID=$rowtwo['ID'];
                DB::update("reservation","Room_ID='$Room_ID',LastUpdatedDateTime='$today'","Student_ID='$Student_ID' AND IsDeleted=0");
            }
        }
       // $conn->close();
        //header("Location:UpdateReservation.php");

    }
    public static function delete($iD)
    {
        //echo "<script> alert('".$iD."');</script>";
       /* $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
        DB::update("student","State_ID=3","ID='$iD'");	
        DB::delete("reservation","Student_ID='$iD'");
        
        //$conn->close();
        //header('location: DeleteReservedRoom.php');
    }
    public static function ViewRoomMates($email)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql4 = "SELECT * FROM user WHERE Email='$email' AND IsDeleted=0 ";    
        $resultQuery4 = mysqli_query($mysql,$sql4); 
        while($row4= $resultQuery4->fetch_assoc())
        {
            if($row4==true)
            {
                $IDTEST=$row4["ID"];
            }
        }
        $sql5 = "SELECT * FROM student WHERE Student_ID='$IDTEST' ";  
        $resultQuery5 = mysqli_query($mysql,$sql5); 
        while($row5= $resultQuery5->fetch_assoc())
        {
            if($row5==true)
            {
                $State_ID=$row5["State_ID"];
                if($State_ID==2)
                {
                    echo '<script type="text/javascript">';
                    echo 'window.location.href="AllPages.php";';
                    echo '</script>';
                    
                }
                else{
                    $sqlt = "SELECT * FROM user WHERE Email='$email' AND IsDeleted=0";
                    $resultt = mysqli_query($mysql,$sqlt); 
                    if ($resultt->num_rows > 0) {
                        while($rowt = $resultt->fetch_assoc()) {
                            $id=$rowt['ID'];
                            $sqltwo = "SELECT * FROM student WHERE Student_ID=$id";
                                    $resulttwo =mysqli_query($mysql,$sqltwo); 
                                    if ($resulttwo->num_rows > 0) {
                                        while($rowtwo = $resulttwo->fetch_assoc()) {
                                            $stdid=$rowtwo['ID'];
                                            $sqltw = "SELECT * FROM reservation WHERE Student_ID='$stdid' AND IsDeleted=0";
                                            $resulttw = mysqli_query($mysql,$sqltw); 
                                            if ($resulttw->num_rows > 0) {
                                                while($rowtw = $resulttw->fetch_assoc()) {
                                                    $Room_ID=$rowtw['Room_ID'];
                                                    $Reservation_ID=$rowtw['ID'];
                                                    $sqlhi = "SELECT * FROM reservation WHERE Room_ID='$Room_ID' AND IsDeleted=0";
                                                    $DataSet = mysqli_query($mysql,$sqlhi) or die(mysql_error());
                                                    $i=0;
                                                    $Result;
                                                    while ($rowhi = mysqli_fetch_array($DataSet))
                                                    {
                                                        $MyObj= new ReservRooms($Room_ID,$rowhi['ID']);
                                                        $Result[$i]=$MyObj;
                                                        //echo "<script> alert('".$Result[$i]->Email."');</script>";
                                                        $i++;
                                                    }
                                                    return $Result;
                                                    
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                            
                                 
                }
                
            } 
        }
       // $conn->close();

    }
    public static function viewReport(){
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $p = new chartphp();
                    $line_chart_data=array();
                    $faculties=array();
                    $facultiesN=array();
                    $grades=array();
                    $gradesN=array();

        $sql="SELECT * FROM faculties";
        $resultQuery = mysqli_query($mysql,$sql);
        while($row = $resultQuery->fetch_assoc())
        {
        if($row==true)
            {
            $id2=$row["ID"];
            $faculty=$row["Faculty"];
                    array_push($faculties,$id2);
                    array_push($facultiesN,$faculty);
                    array_push($p->series_label,$faculty);
            
                    
            }

        }
        $sql2="SELECT * FROM grades";
        $resultQuery2 = mysqli_query($mysql,$sql2);
        while($row2 = $resultQuery2->fetch_assoc())
        {
        if($row2==true)
            {
                $id=$row2["ID"];
                $grade=$row2["Grade"];
                    array_push($grades,$id);
                    array_push($gradesN,$grade);
            }

        }

        for ($x = 0; $x < sizeof($faculties); $x++) {
            $arr=array();
            for ($i = 0; $i < sizeof($grades); $i++) {
        
                $sql3="SELECT COUNT(ID) as coun FROM student WHERE Grade_ID=$grades[$i] AND Faculty_ID=$faculties[$x]";
                $resultQuery3 = mysqli_query($mysql,$sql3);
                while($row3 = $resultQuery3->fetch_assoc())
                {
                if($row3==true)
                    {
                        $num=$row3['coun'];

                        
                            array_push($arr,
                                array($gradesN[$i],$num));
                            
                    }
                    else{
                        array_push($arr,
                                array($gradesN[$i],0));
                    }
                }
            }
            array_push($line_chart_data,$arr);
            

        }


        $p->data = $line_chart_data;
        $p->chart_type = "line";

        // Common Options
        $p->title = "احصائيات التقديرات";
        $p->xlabel = "التقدير";
        $p->ylabel = "عدد الطالبات";


        $out = $p->render('c1');
        return $out;

    }
    public static function reservationStarts()
    {
        
    $conn=DB::getInstance();
    $mysql=$conn->getConnection();
    $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
    $sawny=$_SESSION['sanwy'];
    $email = $_SESSION['email']; 
    $room=array();
    $capacity=array();
    $sql="SELECT * FROM room WHERE BuildingNo!=".$sawny." AND IsDeleted=0";
    $resultQuery = mysqli_query($mysql,$sql);
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
        $resultQuery = mysqli_query($mysql,$sql);
        while($row = $resultQuery->fetch_assoc())
        {
            if($row==true)
            {
                date_default_timezone_set("Africa/Cairo");
                    $thisyear = date("Y");
                    $nextyear = date("Y")+1;
                    $today = date("Y-m-d H:i:s");
                    $id= $row['ID'];
                    $last_id=DB::addwithid("reservation","Student_ID,Room_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$id','$room[$x]','$today','$today',0");
                
                    DB::add("reservationdetails","YearFrom,YearTo,Reservation_ID","'$thisyear','$nextyear','$last_id'");
                    DB::update("student","State_ID=1","ID=$id");  
                
            }

        }
        $x=$x+1;
    }
    echo '<script type="text/javascript">';
                    echo 'window.location.href="showDashboard.php";';
                    echo '</script>';
    }
}
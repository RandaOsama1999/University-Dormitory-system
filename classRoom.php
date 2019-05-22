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
            $conn=DB::getInstance();
            $mysql=$conn->getConnection();
            $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
            $sql = "SELECT * FROM room WHERE IsDeleted=0 AND ID='$id'";
            $DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
			if ($row = mysqli_fetch_array($DataSet))
			{
                $this->ID=$id;
                $this->Capacity=$row['Capacity'];
                $this->FloorNo=$row['FloorNo'];
                $this->BuildingNo=$row['BuildingNo'];
                $this->RoomNo=$row['RoomNo'];
            }
            $conn->close();
            
			
		}
        
    }
    
    public static function create(Rooms $room)
    {
        $BuildingNo=$room->BuildingNo;
        $FloorNo=$room->FloorNo;
      $RoomNo=$room->RoomNo;
      $Capacity=$room->Capacity;
     /* $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        DB::add("room","BuildingNo,FloorNo,RoomNo,Capacity,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$BuildingNo','$FloorNo','$RoomNo','$Capacity','$today','$today',0");
        
      //$conn->close();
        //header("Location:AddRoom.php");

    }
     
    public static function delete(Rooms $room)
    {
        $BuildingNo=$room->BuildingNo;
        $FloorNo=$room->FloorNo;
      $RoomNo=$room->RoomNo;
      $Capacity=$room->Capacity;
     /* $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
        DB::delete("room","RoomNo='$room->RoomNo' AND BuildingNo='$room->BuildingNo' AND IsDeleted=0");
        //$conn->close();
        //header("Location:DeleteRoom.php");

    
    }
    public static function update(Rooms $room)
    {
        $BuildingNo=$room->BuildingNo;
        $FloorNo=$room->FloorNo;
      $RoomNo=$room->RoomNo;
      $Capacity=$room->Capacity;
     /* $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        DB::update("room","Capacity='$Capacity'","RoomNo='$RoomNo' AND BuildingNo='$BuildingNo' AND IsDeleted=0");
        
        //$conn->close();
        //header("Location:UpdateRoom.php");

    }
    public static function ViewAllRooms()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $sql = "SELECT * FROM room WHERE IsDeleted=0";
		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($DataSet))
		{
			$MyObj= new Rooms($row["ID"]);
			$Result[$i]=$MyObj;
			$i++;
		}
		return $Result;
       // $conn->close();
    }

}
?>
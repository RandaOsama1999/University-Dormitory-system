<?php
require_once 'classRoom.php';
require_once 'classRoomView.php';
class RoomController{
    public static function AddRoom()
    {
        RoomView::AddRoom();
        if(isset($_POST['Submit']))
        {
            $obj = new Rooms();
            $obj->BuildingNo=$_POST['BuildingNo'];
            $obj->FloorNo=$_POST['FloorNo'];
            $obj->RoomNo=$_POST['room'];
            $obj->Capacity=$_POST['Capacity'];
        
            return Rooms::create($obj);
            
        }
    }
    public static function UpdateRoom()
    {
        RoomView::UpdateRoom();
        if(isset($_POST['Submit']))
        {
            $obj = new Rooms();
            $obj->BuildingNo=$_POST['BuildingNo'];
            $obj->RoomNo=$_POST['room'];
            $obj->Capacity=$_POST['Capacity'];
           
            return Rooms::update($obj);
            
        }
    }
    public static function DeleteRoom()
    {
        RoomView::DeleteRoom();
        if(isset($_POST['Submit']))
    {
        $obj = new Rooms();
        $obj->BuildingNo=$_POST['BuildingNo'];
        $obj->RoomNo=$_POST['room'];
       
        return Rooms::delete($obj);
        
    }
    }
    public static function ViewRooms()
    {
        $Result=Rooms::ViewAllRooms();
        RoomView::ShowAllRooms($Result);
    }
}

?>
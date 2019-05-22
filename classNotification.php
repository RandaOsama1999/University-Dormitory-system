<?php
include_once "classDatabase.php";
include_once "classOrderedFood.php";
class Notifications
{

    public  $ID;
    public  $UserType_ID;
    public  $Notification;
    public $CreatedDateTime;
 

    public function __construct() {
      $a = func_get_args(); 
      $i = func_num_args(); 
      if (method_exists($this,$f='__construct'.$i)) { 
          call_user_func_array(array($this,$f),$a); 
      } 
  }
    public   function __construct1($id)
	{
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
		if ($id >0)
		{	
			$sql="select * from Notifications where ID=$id";
			 
			$StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
			if ($row = mysqli_fetch_array($StudentDataSet))
			{
				$this->UserType_ID=$row["UserType_ID"];
				$this->Notification=$row["Notification"];
                $this->ID=$id; 
                $this->CreatedDateTime=$row["CreatedDateTime"]; 
			}
        }
        
	}
  public static function SelectByUserTypeID(Notifications $Notifications)
	{
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
		$sql="select * from Notifications where UserType_ID=$Notifications->UserType_ID";
		 
		$StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		$i=0;
		$Resultt;
		while ($row = mysqli_fetch_array($StudentDataSet))
		{
			$MyObj= new Notifications($row["ID"]);
            $Resultt[$i]=$MyObj;
             
			$i++;
		}
		return $Resultt;
		
    }
     
    public static function add(Notifications $Notifications)
    {
        /*$connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");*/
        $UserType_ID=$Notifications->UserType_ID;
        $Notification=$Notifications->Notification;
         
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        DB::add("Notifications","UserType_ID,Notification,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$UserType_ID','$Notification','$today','$today',0");
    
        $conn->close();
    }


    
    


}
?>
<?php
include_once "classDatabase.php";
class OrderedFood
{

    public  $ID;
    public  $FoodID;
    public  $QuantityNeeded;
 

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
          $sql="select * from orderedfood where ID=$id";
           
          $StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
          if ($row = mysqli_fetch_array($StudentDataSet))
          {
              $this->FoodID=$row["FoodID"];
              $this->QuantityNeeded=$row["QuantityNeeded"];
              $this->ID=$id; 
          }
      }
      
  }
public static function SelectAll()
  {
      $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
      $sql="select * from orderedfood WHERE IsDeleted='0'";
       
      $StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
      $i=0;
      $Result;
      while ($row = mysqli_fetch_array($StudentDataSet))
      {
          $MyObj= new OrderedFood($row["ID"]);
          $Result[$i]=$MyObj;
           
          $i++;
      }
      return $Result;
      
  }


    public static function add(OrderedFood $OrderedFood)
    {
        $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $count=0;
        $FoodID=$OrderedFood->FoodID;
        $QuantityNeeded=$OrderedFood->QuantityNeeded;
         
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $sql="select * from orderedfood WHERE FoodID='$FoodID' AND IsDeleted='0'";
        $resultQuery =  mysqli_query($mysql,$sql);
        while($row = $resultQuery->fetch_assoc())
        {
           if($row==true)
            {
                $oldquantity=$row['QuantityNeeded'];
                $count=$count+1;
            }
        }
        
        if($count!=0)
        {
            $sum=$oldquantity+$QuantityNeeded;
            DB::update("orderedfood","QuantityNeeded='$sum',LastUpdatedDateTime='$today'","FoodID=$FoodID AND IsDeleted=0");
       
        }
        else{
            DB::add("orderedfood","FoodID,QuantityNeeded,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$FoodID','$QuantityNeeded','$today','$today',0");
        }
        //$conn->close();
    }

    public static function Delete(OrderedFood $OrderedFood)
    {
        /*$conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
        $FoodID=$OrderedFood->FoodID;
        DB::delete("orderedfood","FoodID='$FoodID'");      
        //$conn->close();
    }
    public static function SelectQuantityNeeded(FoodAvailable $FoodAvailable)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
       $ResultWithID=FoodAvailable::SelectQuantity($FoodAvailable);

        $sql = "SELECT * FROM  orderedfood WHERE FoodID= '$ResultWithID->ID' AND IsDeleted='0' ";

		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
	 
		   $Result = new stdClass();
		while ($row = mysqli_fetch_array($DataSet))
		{
            $Result->ID=$row["ID"];
            $Result->QuantityNeeded=$row["QuantityNeeded"];
            $Result->FoodID=$row["FoodID"];
		}
		return $Result;
       // $conn->close();
    }



     

}
?>
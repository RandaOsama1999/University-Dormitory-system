<?php
include_once "classDatabase.php";
class OrderedMaterial
{

    public  $ID;
    public  $MaterialID;
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
          $sql="select * from orderedmaterials where ID=$id";
           
          $StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
          if ($row = mysqli_fetch_array($StudentDataSet))
          {
              $this->MaterialID=$row["MaterialID"];
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
      $sql="select * from orderedmaterials WHERE IsDeleted='0'";
       
      $StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
      $i=0;
      $Result;
      while ($row = mysqli_fetch_array($StudentDataSet))
      {
          $MyObj= new OrderedMaterial($row["ID"]);
          $Result[$i]=$MyObj;
           
          $i++;
      }
      return $Result;
      
  }



    public static function add(OrderedMaterial $OrderedMaterial)
    {
        $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $count=0;
        $MaterialID=$OrderedMaterial->MaterialID;
        $QuantityNeeded=$OrderedMaterial->QuantityNeeded;
         
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $sql="select * from orderedmaterials WHERE MaterialID='$MaterialID' AND IsDeleted='0'";
        $resultQuery =mysqli_query($mysql,$sql);
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
            DB::update("orderedmaterials","QuantityNeeded='$sum',LastUpdatedDateTime='$today'","MaterialID=$MaterialID AND IsDeleted=0");
       
        }
        else{
            DB::add("orderedmaterials","MaterialID,QuantityNeeded,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$MaterialID','$QuantityNeeded','$today','$today',0");
     }
        
        //$conn->close();
    }

    public static function Delete(OrderedMaterial $OrderedMaterial)
    {
        /*$conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
        $MaterialID=$OrderedMaterial->MaterialID;
        DB::delete("orderedmaterials","MaterialID='$MaterialID'");      
        //$conn->close();
    }
    public static function SelectQuantityNeeded(MaterialAvailable $MaterialAvailable)
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
       $ResultWithID=MaterialAvailable::SelectQuantity($MaterialAvailable);

        $sql = "SELECT * FROM  orderedmaterials WHERE MaterialID= '$ResultWithID->ID' AND IsDeleted='0' ";

		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
	 
		   $Result = new stdClass();;
		while ($row = mysqli_fetch_array($DataSet))
		{
            $Result->ID=$row["ID"];
            $Result->QuantityNeeded=$row["QuantityNeeded"];
            $Result->MaterialID=$row["MaterialID"];
		}
		return $Result;
       // $conn->close();
    }



     

}
?>
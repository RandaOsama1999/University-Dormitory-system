<?php
include_once "classDatabase.php";
include_once "classOrderedFood.php";
include_once "InterfaceClassReport.php";

include_once("charts4php-free-latest/config.php");
include_once(CHARTPHP_LIB_PATH . "/inc/chartphp_dist.php");
class FoodAvailable implements report
{

    public  $ID;
    public  $Name;
    public  $Quantity;
 

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
          $sql="select * from foodavailable where ID=$id";
           
          $StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
          if ($row = mysqli_fetch_array($StudentDataSet))
          {
              $this->Name=$row["Name"];
              $this->Quantity=$row["Quantity"];
              $this->ID=$id; 
          }
      }
      
  }
public static function SelectAll()
  {
      $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
      $sql="select * from foodavailable ";
       
      $StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
      $i=0;
      $Result;
      while ($row = mysqli_fetch_array($StudentDataSet))
      {
          $MyObj= new FoodAvailable($row["ID"]);
          $Result[$i]=$MyObj;
           
          $i++;
      }
      return $Result;
      
  }
  public static function update(FoodAvailable $FoodAvailable)
  {
      $Name=$FoodAvailable->Name;
      $Quantity=$FoodAvailable->Quantity;
    

      date_default_timezone_set("Africa/Cairo");
      $today = date("Y-m-d H:i:s");
      /*$conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
      DB::update("foodavailable","Quantity='$Quantity',LastUpdatedDateTime='$today'","Name='$Name' AND IsDeleted=0");
      //$conn->close();
  }


  public static function add(FoodAvailable $FoodAvailable)
  {
     /* $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
      $Name=$FoodAvailable->Name;
      $Quantity=$FoodAvailable->Quantity;
       
      date_default_timezone_set("Africa/Cairo");
      $today = date("Y-m-d H:i:s");
      DB::add("foodavailable","Name,Quantity,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$Name','$Quantity','$today','$today',0");
  
      //$conn->close();
  }


  public static function Delete(FoodAvailable $FoodAvailable)
  {
      /*$conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
      $Name=$FoodAvailable->Name;
      DB::delete("foodavailable","Name='$Name'");      
      //$conn->close();
  }

  public static function SelectName(OrderedFood $OrderedFood)
  {
      $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
      $sql = "SELECT * FROM  foodavailable WHERE ID= '$OrderedFood->FoodID'";

      $DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
   
         $Result = new stdClass();
      while ($row = mysqli_fetch_array($DataSet))
      {
          $Result->ID=$row["ID"];
          $Result->Name=$row["Name"];
          $Result->Quantity=$row["Quantity"];
      }
      return $Result;
     // $conn->close();
  }
  
  public static function SelectQuantity(FoodAvailable $FoodAvailable)
  {
      $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

      $sql = "SELECT * FROM  foodavailable WHERE Name= '$FoodAvailable->Name' AND IsDeleted='0' ";

      $DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
   
         $Result = new stdClass();
      while ($row = mysqli_fetch_array($DataSet))
      {
          $Result->ID=$row["ID"];
          $Result->Name=$row["Name"];
          $Result->Quantity=$row["Quantity"];
      }
      return $Result;
     // $conn->close();
  }
    
    public static function viewReport(){
        $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");


        $p = new chartphp();
                    $line_chart_data=array();
                    $foodName=array();
                    //$foodNumber=array();
                    $Quantity=array();

        $sql="SELECT * FROM foodavailable WHERE IsDeleted=0";
        $resultQuery =mysqli_query($mysql,$sql);
        while($row = $resultQuery->fetch_assoc())
        {
        if($row==true)
            {
            $id2=$row["ID"];
            $name=$row["Name"];
            $quantity=$row["Quantity"];
                    array_push($foodName,$name);
                    array_push($Quantity,$quantity);
                    array_push($p->series_label,$name);
            
                    
            }

        }

        for ($x = 0; $x < sizeof($foodName); $x++) {
            $arr=array();
                array_push($arr,array($foodName[$x],$Quantity[$x]));
            array_push($line_chart_data,$arr);
        }


        $p->data = $line_chart_data;
        $p->chart_type = "bar";

        // Common Options
        $p->title = "احصائيات المأكولات";
        $p->xlabel = "الاكل";
        $p->ylabel = "عدد الاكل المتاح";
        $p->show_point_label = true;


        $out = $p->render('c1');
        return $out;

    }



}
?>
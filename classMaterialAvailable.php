<?php
include_once "classDatabase.php";
include_once "classOrderedMaterial.php";
include_once "InterfaceClassReport.php";


include_once("charts4php-free-latest/config.php");
include_once(CHARTPHP_LIB_PATH . "/inc/chartphp_dist.php");
class MaterialAvailable implements report
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
          $sql="select * from materialsavailable where ID=$id AND IsDeleted=0";
           
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
      $sql="select * from materialsavailable where IsDeleted=0";
       
      $StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
      $i=0;
      $Result;
      while ($row = mysqli_fetch_array($StudentDataSet))
      {
          $MyObj= new MaterialAvailable($row["ID"]);
          $Result[$i]=$MyObj;
           
          $i++;
      }
      return $Result;
      
  }
  public static function update(MaterialAvailable $MaterialAvailable)
  {
      $Name=$MaterialAvailable->Name;
      $Quantity=$MaterialAvailable->Quantity;
    

      date_default_timezone_set("Africa/Cairo");
      $today = date("Y-m-d H:i:s");
     /* $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
      DB::update("materialsavailable","Quantity='$Quantity',LastUpdatedDateTime='$today'","Name='$Name' AND IsDeleted=0");
      //$conn->close();
  }


  public static function add(MaterialAvailable $MaterialAvailable)
  {
      /*$conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
      $Name=$MaterialAvailable->Name;
      $Quantity=$MaterialAvailable->Quantity;
       
      date_default_timezone_set("Africa/Cairo");
      $today = date("Y-m-d H:i:s");
      DB::add("materialsavailable","Name,Quantity,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$Name','$Quantity','$today','$today',0");
  
     // $conn->close();
  }


  public static function Delete(MaterialAvailable $MaterialAvailable)
  {
     /* $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
      $ID=$MaterialAvailable->ID;
      DB::delete("materialsavailable","ID='$ID'");      
      //$conn->close();
  }

  public static function SelectName(OrderedMaterial $OrderedMaterial)
  {
      $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

      $sql = "SELECT * FROM  materialsavailable WHERE ID= '$OrderedMaterial->MaterialID'";

      $DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
   
         $Result = new stdClass();
      while ($row = mysqli_fetch_array($DataSet))
      {
          $Result->ID=$row["ID"];
          $Result->Name=$row["Name"];
          $Result->Quantity=$row["Quantity"];
      }
      return $Result;
      //$conn->close();
  }
  
  public static function SelectQuantity(MaterialAvailable $MaterialAvailable)
  {
      $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

      $sql = "SELECT * FROM  materialsavailable WHERE Name= '$MaterialAvailable->Name' AND IsDeleted='0' ";

      $DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
   
         $Result = new stdClass();
      while ($row = mysqli_fetch_array($DataSet))
      {
          $Result->ID=$row["ID"];
          $Result->Name=$row["Name"];
          $Result->Quantity=$row["Quantity"];
      }
      return $Result;
      //$conn->close();
  }
    public static function viewReport(){
        $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $p = new chartphp();
                    $line_chart_data=array();
                    $materialName=array();
                    //$foodNumber=array();
                    $Quantity=array();

        $sql="SELECT * FROM materialsavailable WHERE IsDeleted=0";
        $resultQuery =mysqli_query($mysql,$sql);
        while($row = $resultQuery->fetch_assoc())
        {
        if($row==true)
            {
            $id2=$row["ID"];
            $name=$row["Name"];
            $quantity=$row["Quantity"];
                    array_push($materialName,$name);
                    array_push($Quantity,$quantity);
                    array_push($p->series_label,$name);
            
                    
            }

        }

        for ($x = 0; $x < sizeof($materialName); $x++) {
            $arr=array();
                array_push($arr,array($materialName[$x],$Quantity[$x]));
            array_push($line_chart_data,$arr);
        }


        $p->data = $line_chart_data;
        $p->chart_type = "bar";

        // Common Options
        $p->title = "احصائيات اللوازم";
        $p->xlabel = "اللوازم";
        $p->ylabel = "عدد اللوازم المتاح";
        $p->show_point_label = true;


        $out = $p->render('c1');
        return $out;

    }
    


}
?>
<?php
include_once "classDatabase.php";
class Options
{

    public  $OptionsID;
    public  $OptionsName;
    public  $OptionsType;
 

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
          $sql="select * from options where ID=$id";
           
          $StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
          if ($row = mysqli_fetch_array($StudentDataSet))
          {
              $this->OptionsName=$row["Name"];
              $this->OptionsType=$row["Type"];
              $this->OptionsID=$id; 
          }
      }
      else
      {

      }
  }
public static function SelectAll()
  {
      $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
      $sql="select * from options ";
      //mysql_query($sql);
      $StudentDataSet = mysqli_query($mysql,$sql) or die(mysql_error());
      $i=0;
      $Result;
      while ($row = mysqli_fetch_array($StudentDataSet))
      {
          $MyObj= new Options($row["ID"]);
          $Result[$i]=$MyObj;
           
          $i++;
      }
      return $Result;
      
  }


  public static function addOptions(Options $Options)
  {
      $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
      $OptionsName=$Options->OptionsName;
      $OptionsType=$Options->OptionsType;
       
      date_default_timezone_set("Africa/Cairo");
      $today = date("Y-m-d H:i:s");
      DB::add("options","Name,Type,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$OptionsName','$OptionsType','$today','$today',0");
  
     // $conn->close();
    //  header("Location:Pay.php");

  }


  public static function SelectID(Options $Options)
  {
      $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
       
      $sql = "SELECT * FROM  options WHERE Name= '$Options->OptionsName'";

      $DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
   
         $Result = new stdClass();;
      while ($row = mysqli_fetch_array($DataSet))
      {
          $Result->OptionsID=$row["ID"];
          $Result->OptionsName=$row["Name"];
          $Result->OptionsType=$row["Type"];
      }
      return $Result;
     // $conn->close();
  }
    public static function SelectName(LinkPaymentAndOptions $LinkPaymentAndOptions)
    {
        $conn=DB::getInstance();
      $mysql=$conn->getConnection();
      $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql="SELECT * FROM options WHERE ID='$LinkPaymentAndOptions->Option_ID' AND IsDeleted='0'";
		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		$i=0;
        $Result;
        $row = mysqli_fetch_array($DataSet);
        $Result=new Options();
        $Result->OptionsName=$row['Name'];
        $Result->OptionsID=$row['ID'];
         
		return $Result;
		 
       //$conn->close();
}
}
?>
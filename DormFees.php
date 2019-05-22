<?php
include_once "classDatabase.php";
interface dormfees
{
    /*public $Name="Unknown";
    public $fees;
    public $extra;
    public  $ID;
    public  $FeesType;
    public  $FeesNumber;*/
       
    public function fees(); 
    public function name(); 
   
    /*function extras($extra_name)
    {
         $connection=new DB;
         $conn=$connection->connect();
         $conn->query("SET NAMES 'utf8'");
         $sql="SELECT Fees_Type from fees WHERE Fees_Type=$extra_name AND IsDeleted=0";
         $result=$conn->query($sql);
         while($row=$result->fetch_assoc())
         {
            if($row==true)
            { 
               $ID=$row["ID"]; 
               $FeesType=$row["Fees_Type"];
            }
        }
        return $ID;
    }
    public function getName()
    {
        return $this->name();
    }*/

}





?>
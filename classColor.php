<?php
include_once "classDatabase.php";

class color
{
   public $ID;
   public $colorCode;
   public $Themepic;
   public $name;

    public static function addextracolor()
    {
           $conn=DB::getInstance();
           $mysql=$conn->getConnection();
           $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

          $sql2 = "SELECT * FROM colors WHERE IsDeleted=0 ";
          $colorDataSet = mysqli_query($mysql,$sql2);
          $i=0;
          $Result;
          while ($row = mysqli_fetch_array($colorDataSet))
          {
              $MyObj= new color();
              $MyObj->ID=$row['ID'];
              $MyObj->colorCode=$row['themeCode'];
              $MyObj->Themepic=$row['themepic'];
              $MyObj->name=$row['Name'];
              $Result[$i]=$MyObj;
              $i++;
          }
          return $Result;
    }
    public static function addnewcolor(color $theme2)
    { 
           $conn=DB::getInstance();
           $mysql=$conn->getConnection();
           $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

           date_default_timezone_set("Africa/Cairo");
           $today = date("Y-m-d H:i:s");
           $id=$theme2->ID;
           //echo $id;
           $sql = "SELECT * FROM colors WHERE ID=$id AND IsDeleted=0 ";
           $colorDataSet = mysqli_query($mysql,$sql);
          while ($row = mysqli_fetch_array($colorDataSet))
          {
             $theme2->name=$row['Name'];
             $theme2->colorCode=$row['themeCode'];
             $theme2->Themepic=$row['themepic'];
            // DB::delete("colors","ID='$id' AND IsDeleted=0");
             DB::update("colors","IsDeleted=1,LastUpdateDateTime='$today'","ID='$id'");
             DB::add("theme","Theme,Themepic,statue,CreatedDateTime,LastUpdateDateTime,IsDeleted","'$theme2->colorCode','$theme2->Themepic',0,' $today',' $today',0");
          }

    }

}



?>
<?php

include_once "classDatabase.php";
include_once "ThemesController.php";
include_once "classThemes.php";
include_once "ImageController.php";
session_start();

if (!isset($_SESSION['email'])) {
    header('location: page-login.php');
}
if (isset($_GET['Logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: page-login.php");
}
 if(isset($_GET['back']))
  {
    header('location:AllPages.php');
  }
  else if(isset($_GET['addcolor']))
  {
    //echo "enta dost 3lla el zorar";
    themesController::addextraView();
  }
 else if(isset($_GET['delete']))
  {
       $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

       $email = $_SESSION['email']; 
       $sql = "SELECT usertype_ID FROM user WHERE Email='$email' AND IsDeleted=0 ";    
        $resultQ = mysqli_query($mysql,$sql);
        while($row1= $resultQ->fetch_assoc())
        {
            if($row1==true)
            {
                $USERID=$row1['usertype_ID'];

                if($USERID=='3')
                {
                   themesController::deleteView();
                   imagecontroller::deleteImageView();
                }
               else
                {
                   echo '<script language="javascript">';
                   echo 'alert("لا يمكنك مسح اى خلفيه")';
                   echo '</script>';
                   header('location:AllPages.php');
                }
            }
        }
   
    }
 
  else if(isset($_GET['addnew']))
  { 
    
    $conn=DB::getInstance();
    $mysql=$conn->getConnection();
    $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
    $email = $_SESSION['email']; 
    $sql4 = "SELECT usertype_ID FROM user WHERE Email='$email' AND IsDeleted=0 ";    
    $resultQuery4 = mysqli_query($mysql,$sql4);
    while($row4= $resultQuery4->fetch_assoc())
    {
        if($row4==true)
        {
            $USERID=$row4['usertype_ID'];
        }
    }
        //echo $USERID;
       if($USERID=='3')
      {
        themesController::addView();
      }

      else
     {
       echo '<script language="javascript">';
        echo 'alert("لا يمكنك اضافه اى خلفيه")';
        echo '</script>';
        themesController::viewathemes();
     }
   
  }
   else if(isset($_GET['addImage']))
   { 
     imagecontroller::newImage();
   }
  else
  {
    
    themesController::viewathemes();
    imagecontroller::viewpic();
    //themesController::newImage();
  }
  

?>
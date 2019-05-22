<?php
class image
{
    
    public  $ID;
    public  $Image;
    public  $Image_Name;

    
 public static function viewphoto()
 {
    $conn=DB::getInstance();
    $mysql=$conn->getConnection();
    $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
    $i=0;
    $Result;
    $sql1="SELECT * FROM themepic WHERE IsDeleted=0";
    $result = mysqli_query($mysql,$sql1);
    while($row= $result->fetch_assoc())
     {
        if($row==true)
        { 
            $MyObj= new image();
            $MyObj->ID=$row['ID'];
            $MyObj->Image=$row['Image']; 
            $MyObj->Image_Name=$row['Image_Name'];
            $Result[$i]=$MyObj;
            $i++;
           
        }
    } return $Result;
   
 }
 public static function Imageadded(image $themepic)
 {

    date_default_timezone_set("Africa/Cairo");
    $today = date("Y-m-d H:i:s");
    $imageName=$themepic->Image;
    $pic2=$themepic->Image_Name;
   // $photo=$themepic->Photo;
   /* echo $name;
    echo "<br>";
    echo $pic;*/
   DB::add("themepic","Image,Image_Name,CreatedDateTime,LastUpdateDateTime,IsDeleted","'$pic2','$imageName','$today','$today',0");
 }


 
 public static function deletepic(image $imgs)
 {
       $idphoto=$imgs->ID;
       //echo $idphoto;
       $conn=DB::getInstance();
    $mysql=$conn->getConnection();
    $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
       date_default_timezone_set("Africa/Cairo");
       $today = date("Y-m-d H:i:s");
       $email = $_SESSION['email']; 
     $sql4 = "SELECT ID FROM user WHERE Email='$email' AND IsDeleted=0 ";    
         $resultQuery4 = mysqli_query($mysql,$sql4);
         while($row4= $resultQuery4->fetch_assoc())
         {
             
                 $USERID=$row4['ID'];
             $sql = "SELECT * FROM usertypethemes WHERE theme_ID='$idphoto'AND IsDeleted=0 ";    
             $result= mysqli_query($mysql,$sql);
             while($row= $result->fetch_assoc())
             {
                  if($row==true)
                {   
                 $themecnn_ID=$row['ID'];
                 echo  $themecnn_ID;
                DB::update("usertypethemes","IsDeleted=1,LastUpdateDateTime='$today'","ID= $themecnn_ID");
                DB::add("usertypethemes","user_ID,theme_ID,CreatedDateTime,LastUpdateDateTime,IsDeleted","'$USERID',1,' $today',' $today',0");

                 }
             }
            }
    
             DB::update("themepic","IsDeleted=1,LastUpdateDateTime='$today'","ID=$idphoto");
           // DB::delete("themepic","ID='$idphoto' AND IsDeleted=0");
 }
 

 public static function ImageTaken(image $img)
 {
    $idphoto=$img->ID;
    echo $idphoto;

    $conn=DB::getInstance();
    $mysql=$conn->getConnection();
    $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

    $sql1="SELECT * FROM themepic WHERE ID=$idphoto AND IsDeleted=0";
    
    $result = mysqli_query($mysql,$sql1);
    while($row= $result->fetch_assoc())
     {
        $img->Image=$row['Image'];
        
     }

     $email = $_SESSION['email']; 
     $sql4 = "SELECT ID FROM user WHERE Email='$email' AND IsDeleted=0 ";    
         $resultQuery4 = mysqli_query($mysql,$sql4);
         while($row4= $resultQuery4->fetch_assoc())
         {
             
                 $USERID=$row4['ID'];
                 $sql = "SELECT * FROM usertypethemes WHERE user_ID='$USERID' AND IsDeleted=0 ";    
                 $result= mysqli_query($mysql,$sql);
                 while($row= $result->fetch_assoc())
                 {  
                    
                         $userTheme_ID=$row['ID'];
                         $usernafso=$row['user_ID'];
                         $elthemeID=$row['theme_ID'];

                         if( $elthemeID == $idphoto)
                         {
                             $theme="background:url('$img->Image');";
                             return $theme;
                         }
                         else
                         {

                             date_default_timezone_set("Africa/Cairo");
                             $today = date("Y-m-d H:i:s");
                             DB::update("usertypethemes","IsDeleted=1,LastUpdateDateTime='$today'","ID='$userTheme_ID' ");
                             DB::add("usertypethemes","user_ID,theme_ID,CreatedDateTime,LastUpdateDateTime,IsDeleted","'$USERID','$img->ID',' $today',' $today',0");
                          
                         }
                 }
         }

 }
 
}

?>
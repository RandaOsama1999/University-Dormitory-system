<?php
include_once "classDatabase.php";
include_once "classImage.php";
include_once "ThemesView.php";
class imagecontroller
{
    
    public static function deleteImageView()
    {   
        $result=image::viewphoto();
        ThemesView::Deleteimage($result);
    }
    public static function deleteImage()
    {   
        if(isset($_POST['deleteimage']))
        {                
            $obj = new image();
            $obj->ID=$_POST['deleteimage'];
            //echo  $obj->ID;
            //echo "enta fel controller";
            image::deletepic($obj);
        }
    }
    public static function viewpic()
    {
        $image=image::viewphoto();
        ThemesView::viewImages($image);
    }
    
    public static function newImage()
    {
        $result=image::viewphoto();
        ThemesView::addImage($result);
        
    }
    public static function addnewImage()
    {  //echo "in controller";
       if(isset($_POST['submit']))
        { 
            if ($_FILES["image"]["error"] > 0)
          {
            echo '<script language="javascript">';
            echo 'alert("لم تختر صوره بعد")';
            echo '</script>';
          }
            

          
           
         else
          {
            $allowed_image_extension = array("png","jpg", "jpeg");
             $file_extension =pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
              if(! in_array($file_extension, $allowed_image_extension))
            {
               echo '<script language="javascript">';
               echo 'alert("اختر صوره من النوع  jpg,png,jpeg")';
               echo '</script>';
            }
            else
            {
                 $obj=new image();
                 $obj->Photo=addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
                 move_uploaded_file($_FILES["image"]["tmp_name"],"C:/wamp64/www/SE/". $_FILES["image"]["name"]);
                 $obj->Image=$_FILES["image"]["name"];
                  $obj->Image_Name = $_FILES["image"]["name"];
                 //  echo $obj->Themepic;
                 image::Imageadded($obj);
            }
          }


        }
    }
    public static function imagechoosen()
    {
        if(isset($_POST['imageDone']))
        { //echo "enta 3mlt submit";
            $obj=new image();
            $obj->ID=$_POST['imageDone'];
            image::ImageTaken($obj);
        }
    }

}
?>
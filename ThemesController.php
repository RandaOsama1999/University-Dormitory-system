<?php
include_once "classDatabase.php";
include_once "classThemes.php";
include_once "ThemesView.php";
include_once "classColor.php";

class themesController
{
    public static function viewathemes()
    {
        $result=themes::viewallthemes();
        ThemesView::showallthemes($result);
       
    }
    public static function selecttheme()
    {
        if (isset($_POST['submit']))
        {  
            $obj=new themes();
            $obj->ID=$_POST['submit'];
            themes::selectTheme($obj);
        /* echo'<button name="submit" id="submit" onclick=" checktheme()"> تاكيد </button>';
         echo' <script>
          function checktheme()
          {
              document.querySelector(".page-wrapper").style.background="'.themes::selectTheme($obj).'";
          }
          </script>';*/
         }

    }
 
    public static function deleteView()
    {   
        $result=themes::viewallthemes();
        ThemesView::DeleteTheme($result);
    }

    public static function delete()
    {
        if(isset($_POST['remove']))
        {                
            $obj = new themes();
            $obj->ID=$_POST['remove'];
            //echo  $obj->ID;
            themes::delete($obj);
        }
    }
    public static function addView()
    {   
        $result=themes::addnewthemeview();
        ThemesView::addnew( $result);
    }

    public static function addnewthemes()
    {
        if(isset($_POST['addnew']))
        {                
            $obj = new themes();
            $obj->ID=$_POST['addnew'];
            //echo  $obj->ID;
            themes::addtheme($obj);
        }
        
      /*if(isset($_POST['addcolor']))
      {
        //echo "enta dost 3lla el zorar";
        themesController::addextraView();
      }*/
    }
    public static function addextraView()
    {   
        $result=color::addextracolor();
        ThemesView::addcolor( $result);
    }

    public static function addextracolor()
    { 
        if(isset($_POST['addnewcolor']))
        { 
            $obj = new color();
            $obj->ID=$_POST['addnewcoloroption'];
           // echo  $obj->ID;
            color::addnewcolor($obj);
        }
        
    }

}
?>
<?php
include_once "classDatabase.php";
include_once "ThemesController.php";
include_once "classImage.php";
class ThemesView
{
    public static function showallthemes($Result)
    {
        include_once "header.php";
        echo'<br>
        <h2 style="text-align:center; color: rgba(45, 65, 21)">الوجهات</h2>
        <div class="row">
        <div class="col-12">
        <div class="card">
        <div class="card-body">
        <form  method="post" id="form" name="myForm">
        <table style="merge-left:50%">';

                for ($i=0;$i<count($Result);$i++)
                {
                   echo "<tr>";
                   echo "<td style='color:#514F4E;'>" .$Result[$i]->Themepic."</td>";
                   echo "<td style='color:#514F4E;'>".'<button type="submit" name ="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" id="submit" value="'.$Result[$i]->ID.'">تعديل</button>'."</td>"; 
                   echo "</tr>";
                }
               echo' </tbody>
            </table>
            </form>
         </div>
        </div>
        </div>
        </div>
        </div>';
        themesController::selecttheme();
        
    }
    public static function viewImages($r)
{
    echo'<br>
    <div class="row">
    <div class="col-12">
    <div class="card">
    <div class="card-body">
    <form  method="post" id="form" name="myForm">
    <table style="merge-left:50%">';
     
         for ($i=0;$i<count($r);$i++)
        {    
               echo "<tr>";
               echo "<td style='color:#514F4E;'>".'<img src="'.$r[$i]->Image.'" style="width:20%;height:20%;"/>'."</td>";
               echo "<td style='color:#514F4E;'>".'<button type="submit" name ="imageDone" class="btn btn-primary btn-flat m-b-30 m-t-30" id="submit" value="'.$r[$i]->ID.'">تعديل</button>'."</td>"; 
               echo "</tr>";
        }
           echo' </tbody>
        </table>
        </form>
     </div>
    </div>
    </div>
    </div>
    </div>';
    imagecontroller::imagechoosen();
    echo'
    <form method="get">
    <button  name="back" style="margin-left:48%; margin-bottom:2%;" class="btn btn-primary btn-flat m-b-30 m-t-30">رجوع</button> 
    </form>
    <form method="get">
    <button  name="delete"  style="margin-left:48%; margin-bottom:2%;" class="btn btn-primary btn-flat m-b-30 m-t-30">مسح خلفيه</button>
     </form>
     <form method="get">
     <button  name="addnew"  style="margin-left:48%; margin-bottom:2%;" class="btn btn-primary btn-flat m-b-30 m-t-30"> اضافه</button>
     </form>';
    include_once "footer.php";
}
    public static function DeleteTheme($Result)
   {
         include_once "header.php";
         echo'<br>
         <h2 style="text-align:center; color: rgba(45, 65, 21)">الوجهات</h2>
         <div class="row">
         <div class="col-12">
         <div class="card">
         <div class="card-body">
         <form  method="post" id="form" name="myForm">
        <table style="merge-left:50%">';

            for ($i=1;$i<count($Result);$i++)
            {
               echo "<tr>";
               echo "<td style='color:#514F4E;'>" .$Result[$i]->Themepic."</td>";
               echo "<td style='color:#514F4E;'>".'<button type="submit" name ="remove"  class="btn btn-primary btn-flat m-b-30 m-t-30" id="remove" value="'.$Result[$i]->ID.'">مسح</button>'."</td>"; 
               echo "</tr>";
            }
           echo' </tbody>
             </table>
             </form>
             </div>
             </div>
             </div>
             </div>
              </div>';
          themesController::delete();
        
        

    }
    public static function Deleteimage($result)
    { 
        echo'<br>
        <div class="row">
        <div class="col-12">
        <div class="card">
        <div class="card-body">
        <form  method="post" id="form" name="myForm">
        <table style="merge-left:50%">';
         
             for ($i=0;$i<count($result);$i++)
            {    
                   echo "<tr>";
                   echo "<td style='color:#514F4E;'>".'<img src="'.$result[$i]->Image.'" style="width:50%;height:20%;"/>'."</td>";
                   echo "<td style='color:#514F4E;'>".'<button type="submit" name ="deleteimage" class="btn btn-primary btn-flat m-b-30 m-t-30" id="submit" value="'.$result[$i]->ID.'">مسح</button>'."</td>"; 
                   echo "</tr>";
            }
               echo' </tbody>
            </table>
            </form>
         </div>
        </div>
        </div>
        </div>
        </div>';
        imagecontroller::deleteImage();
        echo'
        <form method="get">
       <button  name="back" style="margin-left:48%; margin-bottom:2%;" class="btn btn-primary btn-flat m-b-30 m-t-30">رجوع</button>
       </form>
       <form method="get">
       <button  name="addnew" style="margin-left:48%; margin-bottom:2%;" class="btn btn-primary btn-flat m-b-30 m-t-30"> اضافه</button>
       </form>'  ;
        include_once "footer.php";
    }

    public static function addnew($Result)
    {
        include_once "header.php";
        echo'<br>
         <h2 style="text-align:center; color: rgba(45, 65, 21)">الوجهات</h2>
         <div class="row">
         <div class="col-12">
         <div class="card">
         <div class="card-body">
         <form  method="post" id="form" name="myForm">
        <table style="merge-left:50%">';

            for ($i=0;$i<count($Result);$i++)
            {
               echo "<tr>";
               echo "<td style='color:#514F4E;'>" .$Result[$i]->Themepic."</td>";
               echo "<td style='color:#514F4E;'>".'<button type="submit" name ="addnew" id="addnew" class="btn btn-primary btn-flat m-b-30 m-t-30" value="'.$Result[$i]->ID.'">اضافه</button>'."</td>"; 
               echo "</tr>";
            }
           echo' </tbody>
             </table>
             </form>
             </div>
             </div>
             </div>
             </div>
              </div>';
          themesController::addnewthemes();
         echo'
             <form method="get">
            <button  name="back" style="margin-left:48%; margin-bottom:2%;" class="btn btn-primary btn-flat m-b-30 m-t-30">رجوع</button>
            </form>
            <form method="get">
            <button  name="addcolor" id="addcolor" style="margin-left:48%; margin-bottom:2%;" class="btn btn-primary btn-flat m-b-30 m-t-30"> اضافه لون اخر</button>
            </form>';
            
        include_once "footer.php";
    }
    public static function addcolor($Result)
    {
        include_once "header.php";
        echo '<form method="post" name="form" onsubmit="return check()">

        <label  style="margin-left: 80%;font-size:20px;color:black;padding:10px;">اختار اللون<span class="text-danger">*</label>

        <select name="addnewcoloroption" id="select" style="margin-left:80%; width:170px;" class="required"> 
         <option value="0" > تختر لون </option> ';
       for($i=0;$i<count($Result);$i++)
      {
         echo '<option value="'.$Result[$i]->ID.'">'.$Result[$i]->name.'</option>';
      }  
       echo'</select>
        <input type="submit"  name="addnewcolor"  style=margin-left:48%; margin-bottom:2%;" class="btn btn-primary btn-flat m-b-30 m-t-30" value="اضافه">
        </form>
        <form method="get">
        <button  name="back" style="margin-left:48%; margin-bottom:2%;" class="btn btn-primary btn-flat m-b-30 m-t-30">رجوع</button>
        </form>
        <form method="get">
        <button  name="addImage" style="margin-left:48%; margin-bottom:2%;" class="btn btn-primary btn-flat m-b-30 m-t-30">اضافه صوره</button>
        </form>
        <script>';
        
        themesController::addextracolor();
        
        echo '
        <script type="text/javascript">
        function validatechoose()
        {
              var b = 0;
              var x=document.getElementsByName("addnewcoloroption"); 
               for(j=0;j<x.length;j++) 
                 {
                   if(x.item(j).checked == false) 
                      {
                        b++;
                      }
                 }
                  if(b == x.length) 
                    {
                        alert("من فضلك اختر اللون");
                        return false;
                    }    
        } 
        </script>';
        include_once "footer.php";
    }

    public static function addImage($img)
    { 
        include_once "header.php";
        echo '<img style="width:10%; margin-left:45%;" src="'.$img[0]->Image_Name.'"/><br>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image" style="margin-left:43%; margin-bottom:2%;">
            <button  name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" style="margin-left:48%; margin-bottom:2%;">اضافه</button>
        </form>
        <form method="get">
        <button  name="back" style="margin-left:48%; margin-bottom:2%;" class="btn btn-primary btn-flat m-b-30 m-t-30">رجوع</button> 
        </form>';
        imagecontroller::addnewImage();
        include_once "footer.php";
    }


}
?>
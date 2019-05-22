<?php
include_once "classDatabase.php";
require_once 'classMaterialAvailable.php';
include_once "classContent.php";

include_once("charts4php-free-latest/config.php");
include_once(CHARTPHP_LIB_PATH . "/inc/chartphp_dist.php");
session_start();
echo'<style>
.slidecontainer {
    width: 100%; /* Width of the outside container */
  }
  
  /* The slider itself */
  .slider {
    -webkit-appearance: none;  /* Override default CSS styles */
    appearance: none;
    width: 30%; /* Full-width */
    height: 25px; /* Specified height */
    background: #d3d3d3; /* Grey background */
    outline: none; /* Remove outline */
    opacity: 0.7; /* Set transparency (for mouse-over effects on hover) */
    -webkit-transition: .2s; /* 0.2 seconds transition on hover */
    transition: opacity .2s;
  }
  
  /* Mouse-over effects */
  .slider:hover {
    opacity: 1; /* Fully shown on mouse-over */
  }
  
  /* The slider handle (use -webkit- (Chrome, Opera, Safari, Edge) and -moz- (Firefox) to override default look) */ 
  .slider::-webkit-slider-thumb {
    -webkit-appearance: none; /* Override default look */
    appearance: none;
    width: 25px; /* Set a specific slider handle width */
    height: 25px; /* Slider handle height */
    background: #4CAF50; /* Green background */
    cursor: pointer; /* Cursor on hover */
  }
  
  .slider::-moz-range-thumb {
    width: 10px; /* Set a specific slider handle width */
    height: 25px; /* Slider handle height */
    background: #4CAF50; /* Green background */
    cursor: pointer; /* Cursor on hover */
  }
</style>';
class MaterialAvailableView
{
     public static function MakeRequest()
	{
        
            include_once "header.php";
            $Result=MaterialAvailable::SelectAll();
            echo '<div id="x2 "  style="margin-left: 300px;" >
            <form  class="form-valide"  style="margin-left: 50px;" method="post"  id="form" name="myForm" >
                                        <label for="user" class="label" style="margin-left: 60%;font-size:20px;color:black;padding:10px; ">اختار اللي محتاجه مع ذكر العدد<span class="text-danger">*</label>
                                      <br>  ';
                                    
                                        for($c=0;$c<count($Result);$c++)
                                        {          

                                      echo'<button type="button" style="margin-left: 100px;" onClick="AddingToCart(' .$c.')" value="'.$Result[$c]->Name.'">'.$Result[$c]->Name.'</button>';
                                      echo'  <div class="slidecontainer">
                                      <input type="range" min="1" max="50" value="50" class="slider" id="'.$c.'">
                                      <input type="submit"  style="margin-right: 100px;"  id="AddingNewOptionsID"  name="save"    value="اضافه">
                                     
                                      <br></br>
                                    </div>'; 
                                    } 
                                   
                                    
                        echo' 
                        <p>الكمية: <span id="T"></span></p>
                        <p id="demo1"></p>
                         
                       
                       </div>';
                       echo'<script>
                      function AddingToCart(ID)
                       {   
                        var text=$(event.target).attr("value");
                      
                        
                        
                      var slider = document.getElementById(ID);
                      var output = document.getElementById("T");
                      output.innerHTML = slider.value; 
                     
                      slider.oninput = function() 
                      {
                        var arr = ["0","1","2","3","4"];
                        var arr2=[];
                      output.innerHTML = this.value;
                      arr[ID]=this.value;
                      arr2.push(ID);
                      arr2.push(this.value);
                
                      document.cookie = "myJavascriptVar = " + arr2; 

     

                   
                     }
                    }
                          
</script>
</form>';
 
            include_once "footer.php";
        }
        public static function AddNewMaterial()
        {
            include_once "header.php";
            echo '<div id="x2">
            <form  class="form-valide"  method="post"   id="form" name="myForm">
 
            <div id="div_ctrl"    >
            <label for="user" class="label" style="margin-left: 85%;font-size:20px;color:black;padding:10px;">اسم اللازمة<span class="text-danger">*</label>
            <input id="user" type="text" name="Name"  style="margin-left: 80%;    " >
            </div>
            <div id="div_ctr2"    >
            <label for="user" class="label" style="margin-left: 85%;font-size:20px;color:black;padding:10px;">الكميه المضافه<span class="text-danger">*</label>
            <input id="user" type="text" name="Quantity"  style="margin-left: 80%;    " >
            </div>
            ';                                 
$cont3=Content::Button(47,"Add");
echo '
<input type="submit"   id="AddingNewOptionsID"  name="Add"   class="btn btn-primary btn-flat m-b-30 m-t-30"  value="'.$cont3.'">
</form>';
echo '   <script language="javascript" type="text/javascript">
// Allow Arabic Characters only
function CheckArabicCharactersOnly(e) 
{
var unicode = e.charCode ? e.charCode : e.unicode
if (unicode != 8)
 { //if the key isnt the backspace key (which we should allow)
         if (unicode == 32)
         { return}
        else 
        {
            if ((unicode >= 48 && unicode <= 57) || (unicode >= 65 && unicode <= 90) || (unicode >= 97 && unicode <= 122)
             || (specialKeys.indexOf(e.unicode) != -1 && e.charCode != e.unicode)) 
            //if not a number or arabic';
            $alert2=Content::Alert(47,"alert2");
            echo'
            alert("'.$alert2.'");
            return false; //disable key press
         }
  }
}</script>';
echo'<script>
function validateForm() 
{ 
    x=document.forms["myForm"]["Quantity"].value;
   
    var quantity=0;
    for (var i = 0; i< x.length; i++)
    {
         quantity+= x.charAt(i);
    }
    if ( quantity>=1 && quantity<=50 ) 
     {
        return true;
     }
     else
     { ';
      $alert3=Content::Alert(47,"alert3");
      echo'
      alert("'.$alert3.'");
       return false;
     }
     
     
 }
    </script>';
include_once "footer.php";
        }
        public static function UpdateQuantity()
        {
            include_once "header.php";
            echo '<div id="x2">
            <form  class="form-valide"  method="post"   id="form" name="myForm">
 
            <div id="div_ctrl2"   " >
            <label for="user" class="label" style="margin-left: 80%;font-size:20px;color:black;padding:10px;">اختار نوع اللازمة لتغير الكميه<span class="text-danger">*</label>
            <select name="CurrentOptions2" id="CurrentOptions2ID" style="margin-left: 80%;width:170px;" > 
           <option value="0"   >    دوس علي السهم علشان تختار  </option> ';
      $Result=MaterialAvailable::SelectAll();
      for($k=0;$k<count($Result);$k++)
      {
      echo '<option value="'.$Result[$k]->Name.'">'.$Result[$k]->Name.'</option>';
      }  
      echo'</select> 
      </div>
            <div id="div_ctr2"    >
            <label for="user" class="label" style="margin-left: 85%;font-size:20px;color:black;padding:10px;">الكميه المضافه<span class="text-danger">*</label>
            <input id="user" type="text" name="QuantityUpdate"  style="margin-left: 80%;    " >
            </div>';                                 
            $cont3=Content::Button(48,"Update");
            echo '
<input type="submit"   id="AddingNewOptionsID"  name="Update"   class="btn btn-primary btn-flat m-b-30 m-t-30"  value="'.$cont3.'">
</form>';
    echo '   <script language="javascript" type="text/javascript">
// Allow Arabic Characters only
function CheckArabicCharactersOnly(e) 
{
var unicode = e.charCode ? e.charCode : e.unicode
if (unicode != 8)
 { //if the key isnt the backspace key (which we should allow)
         if (unicode == 32)
         { return}
        else 
        {
            if ((unicode >= 48 && unicode <= 57) || (unicode >= 65 && unicode <= 90) || (unicode >= 97 && unicode <= 122)
             || (specialKeys.indexOf(e.unicode) != -1 && e.charCode != e.unicode)) 
            //if not a number or arabic';
            $alert2=Content::Alert(48,"alert2");
            echo'
            alert("'.$alert2.'");
            return false; //disable key press
         }
  }
}</script>';

echo'<script>
function validateForm() 
{ 
    x=document.forms["myForm"]["QuantityUpdate"].value;
   
    var quantity=0;
    for (var i = 0; i< x.length; i++)
    {
         quantity+= x.charAt(i);
    }
    if ( quantity>=1 && quantity<=50 ) 
     {
        return true;
     }
     else
     { ';
      $alert3=Content::Alert(48,"alert3");
      echo'
      alert("'.$alert3.'");
       return false;
     }
     
     
 }
    </script>';
include_once "footer.php";
        }
        public static function Delete()
        {
            include_once "header.php";
            echo '<div id="x2">
            <form  class="form-valide"  method="post"   id="form" name="myForm">
 
            <div id="div_ctrl2"   " >
            <label for="user" class="label" style="margin-left:75%;font-size:20px;color:black;padding:5px;">اختار نوع اللازمة اللي عايز تشيلها <span class="text-danger">*</label>
            <select name="CurrentOptions2" id="CurrentOptions2ID" style="margin-left: 80%;width:170px;" > 
           <option value="0"   >    دوس علي السهم علشان تختار  </option> ';
      $Result=MaterialAvailable::SelectAll();
      for($k=0;$k<count($Result);$k++)
      {
      echo '<option value="'.$Result[$k]->ID.'">'.$Result[$k]->Name.'</option>';
      }  
      echo'</select> 
      </div>';                                 
      $cont3=Content::Button(49,"Delete");
      echo '
           
<input type="submit"   id="AddingNewOptionsID"  name="Delete"   class="btn btn-primary btn-flat m-b-30 m-t-30"  value="'.$cont3.'">
</form>';
include_once "footer.php";
        }
        public static function viewReport($out)
        {
            include_once "header.php";
            echo '<html>
            <head>
            <style>
            #hidden{
            display:none;
        }
        </style></head></html>';
                echo '<div>';
                    echo $out;
                    echo '
                </div>  
                ';
        include_once "footer.php";
        }
       
   
}

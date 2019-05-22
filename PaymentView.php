<?php
include_once "classDatabase.php";
include_once "classContent.php";

include_once "classPaymentOptions.php";
class PaymentView
{
    public static function ShowPaymentMethods($Result)
	{
		//$Result=Users::ViewAllUsers();
            include_once "header.php";
            echo ' 
            <div class="row">
            <div class="col-12">
                <div class="card">
                    
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>طريقه الدفع</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                for ($i=0;$i<count($Result);$i++)
                                {
                                    echo "<tr>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->PaymethodType . "</td>";
                                    echo "</tr>"; 
                                }
                                    echo '
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>';
            include_once "footer.php";
    }

    public static function AddNewPaymentMethod()
	{
        
            include_once "header.php";
  
            echo'  <h2 style="text-align:center; color: rgba(45, 65, 21)"> اضافه نوع جديد للدفع</h2>
            <div class="form-validation">
            <form  class="form-valide" method="post"   id="form" name="myForm">
          
                <div   id="x1" class="C" >
                    <label for="user" class="label" style="margin-left: 85%;font-size:20px;color:black;"> اسم الطريقه<span class="text-danger">*</label>
                   
                    <input id="x3" type="text" name="PaymethodType"    style="margin-left: 80%;"    pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" required    >
                 
                  
                   <button type="submit" id="saveID" name="save" class="btn btn-primary btn-flat m-b-30 m-t-30">اضافة </button>
                <div class="register-link m-t-15 text-center">
                </div>
            </form> 
            <script language="javascript" type="text/javascript">
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
                            //if not a number or arabic
                            alert("اكتب باللغه العربيه");
                            return false; //disable key press
                         }
                  }
                }
            </script>
<script>
$("#extraID").click(function() {
$("#div_ctrl").show();
$("#div_ctrl2").show();
$("#AddingNewOptionsID").show();
$("#extraID").hide();
}); 


    $("#saveID").unbind("click").bind("click", function()
{
var e = document.getElementById("CurrentOptions2ID");
var value = e.options[e.selectedIndex].value;

if ($("#CurrentOptionsID").get(0).selectedIndex == -1)
{  
if(value==0)
{
alert("لازم تختار واحد من الاختيارات المتاحه");
return false;
}
}
});   



function HidingTheForm()
{ 
$("x3").prop("readonly", true);
$("#div_ctrl").hide();
$("#div_ctrl2").hide();
$("#extraID").show();
$("#AddingNewOptionsID").hide();

}
</script>';
 
 
            include_once "footer.php";
    }
    public static function DeletePaymentMethod($Result)
	{
        include_once "header.php";
        echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> الغاء طريقه</h2>
        <div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm">
             <div id="x2">
             <label for="user" class="label" style="margin-left: 70%;font-size:20px;color:black;">  اسم الطريقه اللي عايز تلغيها<span class="text-danger">*</label>
                <select name="CurrentOptions" style="margin-left: 70%;width:100px" id="CurrentOptionsID" required   >
              ';
              for ($i=0;$i<count($Result);$i++)
                {
                    echo '<option value="'.$Result[$i]->PaymethodID.'">'. $Result[$i]->PaymethodType.'</option>';
                }
                echo '
                 </select>
            </div>
             
                  
                <input type="submit" id="save"name="save"    class="btn btn-primary btn-flat m-b-30 m-t-30" value="مسح ">
</form>
</div>
        

</div>';
        include_once "footer.php";
    }

    public static function ViewAllToUpdatePayment()
	{
        $Result=Pay::ViewPaymentMethods();
        $arr=array('تغير الاسم ','الغاء من الطلبات المطلوبه ','اضافه طلبات لهذه الطريقه');
            include_once "header.php";
            echo '<div id="x2">
            <form  class="form-valide" action="PaymentController.php" method="post"   id="form" name="myForm">
            <div id="div_ctrl2">
            <label for="user" class="label" style="margin-left: 80%;font-size:20px;color:black;padding:10px;">اختار الطريقه<span class="text-danger">*</label>
            <select name="CurrentOptions2" id="CurrentOptions2ID" style="margin-left: 80%;width:170px;" > 
           <option value="0"     >    دوس علي السهم علشان تختار  </option> ';
      
      for($k=0;$k<count($Result);$k++)
      {
      echo '<option  Selected value="'.$Result[$k]->PaymethodType.'">'.$Result[$k]->PaymethodType.'</option> ';
      }  
      echo'</select> 
      </div>';
      for($k=0;$k<3;$k++)
      {
      echo '<input type="submit"  style="margin-right: 100px;"  id="AddingNewOptionsID"  name="'.$k.'"    value="'.$arr[$k].'">';
      } 
echo'</form>';
            include_once "footer.php";
    }
    
    
    public static function UpdateName(Pay $PaymentObject)
	{
        
            include_once "header.php";
            echo '<div id="x2">
            <form  class="form-valide" action="PaymentController.php" method="post"   id="form" name="myForm">
            <div id="div_ctrl2">
            <label for="user" class="label" style="margin-left: 80%;font-size:30px;color:black;padding:10px;">اختار الطريقه<span class="text-danger">*</label>
            <p style="text-align:right; font-size:20px;color:black">الاسم<p>';
                        echo' <input type="text"  style="text-align:right;margin-left: 80%"  pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" name="PaymethodType" value="'. $PaymentObject->PaymethodType .'">';
                        echo '<input type="submit"  style="margin-right: 100px;"   name="UpdateButton"    value="تعديل">';
                        echo'</form>;
                        <script language="javascript" type="text/javascript">
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
                                        //if not a number or arabic
                                        alert("اكتب باللغه العربيه");
                                        return false; //disable key press
                                     }
                              }
                            }
                        </script>';

            include_once "footer.php";
    }

    public static function DeleteOption()
	{
        
            include_once "header.php";
            $LinkPaymentAndOptions= new LinkPaymentAndOptions();
            $LinkPaymentAndOptions->Pay_ID= $_SESSION['PaymentId'];
           $Result= LinkPaymentAndOptions::SelectLink($LinkPaymentAndOptions);

           echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> الغاء طريقه</h2>
           <div class="form-validation">
           <form class="form-valide" action="PaymentController.php" method="post" id="form" name="myForm">
                <div id="x2">
                <label for="user" class="label" style="margin-left: 70%;font-size:20px;color:black;">  اسم الطلب اللي عايز تلغيها<span class="text-danger">*</label>
                   <select name="CurrentOptions" style="margin-left: 70%;width:100px" id="CurrentOptionsID" required   >
                 ';
                 for ($i=0;$i<count($Result);$i++)
                   {
                       echo '<option value="'. $Result[$i]->OptionsID.'">'. $Result[$i]->OptionsName.'</option>';
                   }
                   echo '
                    </select>
               </div>
                
                     
                   <input type="submit" id="save"name="delete" class="btn btn-primary btn-flat m-b-30 m-t-30" value="مسح ">
   </form>
   </div>
           
   
   </div>';
   include_once "footer.php";
    }
    
   
}



?>
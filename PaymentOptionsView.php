 <?php
include_once "classDatabase.php";
require_once 'classPaymentOptions.php';
include_once 'classTypes.php';
include_once "classContent.php";


session_start();
class PaymentOptionsView
{
   
     public static function AddNewOptions()
	{
        
            include_once "header.php";
            $Result=Options::SelectAll();
            echo '<div id="x2">
            <form  class="form-valide"   method="post"   id="form" name="myForm">
                                        <label for="user" class="label" style="margin-left: 80%;font-size:20px;color:black;padding:10px; "> الطلبات لهذه الطريقه<span class="text-danger">*</label>
                                        <select name="CurrentOptions[]"  style="width: 150px;" id="CurrentOptionsID" value="100"multiple>';
                                    
                                        for($c=0;$c<count($Result);$c++)
                                        {
                                           // echo($Result);
                                      echo'<option value="'.$c.'">'.$Result[$c]->OptionsName.'</option>';
                                        } 
                                        echo' </select>

                                        <input type="button" id="extraID"name="extra"    class="btn btn-primary btn-flat m-b-30 m-t-30" value="اضافه ما تم اختياره او اضافه المزيد من الطلبات ">
                                       
                                       

                                        <div id="div_ctrl"  style="display: none;"  >
                                        <label for="user" class="label" style="margin-left: 85%;font-size:20px;color:black;padding:10px;">اسم الطلب<span class="text-danger">*</label>
                                        <input id="user" type="text" name="AddedPaymethodOption"  style="margin-left: 80%;  pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);"    " >
                                        </div>
                                        
                                        <div id="div_ctrl2"  style="display: none;" >
                                  <label for="user" class="label" style="margin-left: 80%;font-size:20px;color:black;padding:10px;">اختار نوع الطلب<span class="text-danger">*</label>
                                  <select name="CurrentOptions2" id="CurrentOptions2ID" style="margin-left: 80%;width:170px;" > 
                                 <option value="0" selected disabled hidden  >    دوس علي السهم علشان تختار  </option> ';
                           $ResultTypes=Types::SelectAll();
                         for($k=1;$k<=count($ResultTypes);$k++)
                         {
                            echo '<option value="'.$ResultTypes[$k]->TypesID.'">'.$ResultTypes[$k]->Type.'</option>';
                         }  
                          echo'</select> 
                          </div>
                          ';
                                    $cont3=Content::Button(67,"AddingNewOptions");
                                    echo'
                          <input type="submit"   style="display: none;" id="AddingNewOptionsID"  name="AddingNewOptions" onclick="HidingTheForm()"  class="btn btn-primary btn-flat m-b-30 m-t-30"  value="'.$cont3.'">
                       
                        ';
                       echo'
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
</script>
</form>';
 
            include_once "footer.php";
        }

        public static function AddNewOptionsWithoutMENU()
        {
            include_once "header.php";
            echo '<div id="x2">
            <form  class="form-valide"  method="post"   id="form" name="myForm">
            
            <input type="button" id="extraID"name="extra"    class="btn btn-primary btn-flat m-b-30 m-t-30" value="اضافه المزيد من الطلبات ">
                                       
                                       

            <div id="div_ctrl"  style="display: none;"  >
            <label for="user" class="label" style="margin-left: 85%;font-size:20px;color:black;padding:10px;">اسم الطلب<span class="text-danger">*</label>
            <input id="user" type="text" name="AddedPaymethodOption"  style="margin-left: 80%;    " >
            </div>
            
            <div id="div_ctrl2"  style="display: none;" >
      <label for="user" class="label" style="margin-left: 80%;font-size:20px;color:black;padding:10px;">اختار نوع الطلب<span class="text-danger">*</label>
      <select name="CurrentOptions2" id="CurrentOptions2ID" style="margin-left: 80%;width:170px;" > 
     <option value="0" selected disabled hidden  >    دوس علي السهم علشان تختار  </option> ';
$ResultTypes=Types::SelectAll();
for($k=1;$k<=count($ResultTypes);$k++)
{
echo '<option value="'.$ResultTypes[$k]->Type.'">'.$ResultTypes[$k]->Type.'</option>';
}  
echo'</select> 
</div>
';
                                    $cont3=Content::Button(67,"AddingNewOptions");
                                    echo'
<input type="submit"   style="display: none;" id="AddingNewOptionsID"  name="AddingNewOptions"   class="btn btn-primary btn-flat m-b-30 m-t-30"  value="'.$cont3.'">';
 
echo'<script>
$("#extraID").click(function() {
$("#div_ctrl").show();
$("#div_ctrl2").show();
$("#AddingNewOptionsID").show();
$("#extraID").hide();
}); 
</script>
</form>';
 
 
include_once "footer.php";
        }
   
}

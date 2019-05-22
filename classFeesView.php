<?php
include_once "classDatabase.php";
include_once "classFeesModel.php";
include_once "classContent.php";

class FeesView
{
    public static function AddFee()
    {
        include_once "header.php";

        echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> اضافة خدمات و اسعار الحجز</h2>
        <div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm" onsubmit="return validateForm()">
        <div class="form-group">
        <label for="user" class="label" style="margin-left: 90%;font-size:20px;color:black;">  اسم الخدمة<span class="text-danger">*</label>
                <input id="user" type="text" name="service" class="form-control" style="direction:RTL;" pattern="[أ-ي]{1,50}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" required  >
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >السعر<span class="text-danger">*</label>
                <input type="text" name="price" class="form-control" pattern="[0-9]{1,3}" style="direction:RTL;"  required>
            </div>';
            $cont3=Content::Button(37,"Submit");
            echo'
            <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
            
            </form>

        </div>';
        echo '<script language="javascript" type="text/javascript">
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
                    $alert=Content::Alert(37,"alert2");
                    echo'
                    alert("'.$alert.'");
                    return false; //disable key press
                 }
          }
        }
        function validateForm() 
        { 
        x=document.forms["myForm"]["price"].value;
        if (x.length>3 || isNaN(x) ) 
        {
        ';
                        $alert3=Content::Alert(37,"alert3");
                        echo'
                        alert("'.$alert3.'");
        return false;
        }
        
        }        
        </script>';

        include_once "footer.php";
    }
    public static function UpdateFee()
    {
        $Result=Fees::ViewupdateDropdown();
        include_once "header.php";
        echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> تعديل اسعار خدمات الحجز</h2>
        <div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 90%;font-size:20px;color:black;">اسم الخدمة<span class="text-danger">*</label>
                <select name="service"  class="form-control"  style="direction:RTL;"  required>
                <option value=0>اختر اسم الخدمة</option>';
                for($k=0;$k<count($Result);$k++)
                {
                echo '<option  value="'.$Result[$k]->ID.'">'.$Result[$k]->Fees_Type.'</option> ';
                }  
           echo '
                </select>
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >السعر<span class="text-danger">*</label>
                <input type="text" name="price" class="form-control" pattern="[0-9]{1,3}" style="direction:RTL;"  required>
            </div>';
            $cont3=Content::Button(39,"Submit");
            echo'
            <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
            
            </form>

        </div>';
        echo'<script language="javascript" type="text/javascript">
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
                    $alert=Content::Alert(39,"alert2");
                    echo'
                    alert("'.$alert.'");
                    return false; //disable key press
                 }
          }
        }
        function validateForm() 
        { 
        x=document.forms["myForm"]["price"].value;
        if (x.length>3 || isNaN(x) ) 
        {';
            $alert3=Content::Alert(39,"alert3");
            echo'
            alert("'.$alert3.'");
        return false;
        }
        
        }        
        </script>';
        include_once "footer.php";
    }
    public static function DeleteFee()
    {
        $Result=Fees::ViewdeleteDropdown();
        include_once "header.php";
        echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> مسح خدمات و اسعار الحجز</h2>
        <div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm">
        <div class="form-group">
        <label for="pass" class="label" style="margin-left: 90%;font-size:20px;color:black;">اسم الخدمة<span class="text-danger">*</label>
        <select name="service"  class="form-control"  style="direction:RTL;"  required>
        <option value=0>اختر اسم الخدمة</option>';
        for($k=0;$k<count($Result);$k++)
            {
            echo '<option  value="'.$Result[$k]->ID.'">'.$Result[$k]->Fees_Type.'</option> ';
            }  
   echo '
        </select>
    </div>';
    $cont3=Content::Button(38,"Submit");
    echo'
    <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
    
    </form>

</div>';
        include_once "footer.php";
    }
    public static function ShowAllFees($Result)
	{
		
            include_once "header.php";
            echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> جميع الغرف</h2>
            <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">تنزيل البيانات</h4>
                        <h6 class="card-subtitle">Copy, CSV, Excel, PDF & Print</h6>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>السعر</th>
                                        <th>الخدمة</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                for ($i=0;$i<count($Result);$i++)
                                {
                                    echo "<tr>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->Fees_Number . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->Fees_Type . "</td>";
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

}
?>
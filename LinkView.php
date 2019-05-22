<?php
include_once "classDatabase.php";
include_once "classLink.php";
include_once "classContent.php";

class linkview
{
    public static function Linksview($Result)
	{
        include_once "header.php";
        echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> جميع الصفحات</h2>
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
                                <th>اسم الصفحه</th>
                                </tr>
                                </thead>
                            <tbody>';
                            for ($i=0;$i<count($Result);$i++)
                            {
                                echo "<tr>";
                                echo "<td style='color:#514F4E;'>" . $Result[$i]->FriendlyAddress."</td>";
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
    public static function updatelink()
    {
        $Result=Link::ViewDropdown();
        include_once "header.php";
       
        echo' 
        <div>
        <h2 style="text-align:center; color: rgba(45, 65, 21)"> تعديل اسم الصفحة</h2>
                                <div class="form-validation">
                                <form class="form-valide" method="post" id="form" name="myForm">
                                    
                <div class="form-group">
                                        <label class="label" style="margin-left: 89%;font-size:20px;color:black;" >اسم الصفحة <span class="text-danger">*</label>
                                        <select class="form-control" name="PhysicalAddress" id="PhysicalAddress" style="direction:RTL;"required>';
                                        for($k=0;$k<count($Result);$k++)
                                        {
                                        echo '<option  value="'.$Result[$k]->ID.'">'.$Result[$k]->FriendlyAddress.'</option> ';
                                        }  
                   
               echo' </select>
                <br>
                
                <form class="form-valide" method="post" id="form" name="myForm">
                                    
                <div class="form-group">
                                        <label class="label" style="margin-left: 78%;font-size:20px;color:black;" >اسم الصفحة الذي تود استخدامه<span class="text-danger">*</label>
                                        <input id="user" type="text" name="FriendlyAddress" class="form-control" style="direction:RTL;"  required  >
                                    
                <br>';                                 
                $cont3=Content::Button(11,"Submit");
                echo '
                                    <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
                                    <div class="register-link m-t-15 text-center">
                                    </div>
                </form>

                </div>';
                
         include_once "footer.php";

    }
    public static function addlink()
    {
        $Result=Link::ViewDropdown();
        include_once "header.php";
       
        echo' 
        <div>
        <h2 style="text-align:center; color: rgba(45, 65, 21)"> تعديل اسم الصفحة</h2>
                                <div class="form-validation">
                                <form class="form-valide" method="post" id="form" name="myForm">
                                    
                <div class="form-group">
                                        <label class="label" style="margin-left: 89%;font-size:20px;color:black;" >اسم الصفحة <span class="text-danger">*</label>
                                        <input id="user" type="text" name="PhysicalAddress" class="form-control" style="direction:RTL;"  required  >

                <br></div>
                                    
                <div class="form-group">
                                        <label class="label" style="margin-left: 78%;font-size:20px;color:black;" >اسم الصفحة الذي تود استخدامه<span class="text-danger">*</label>
                                        <input id="user" type="text" name="FriendlyAddress" class="form-control" style="direction:RTL;"  required  >
                                    
                <br></div>';                                 
                $cont3=Content::Button(68,"Submit");
                echo '
                                    <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
                                    
                </form>

                </div>';
                
         include_once "footer.php";

    }
    public static function deletelink()
    {
        $Result=Link::ViewDropdown();
        include_once "header.php";
       
        echo' 
        <div>
        <h2 style="text-align:center; color: rgba(45, 65, 21)"> تعديل اسم الصفحة</h2>
                                <div class="form-validation">
                                <form class="form-valide" method="post" id="form" name="myForm">
                                    
                <div class="form-group">
                                        <label class="label" style="margin-left: 89%;font-size:20px;color:black;" >اسم الصفحة <span class="text-danger">*</label>
                                        <select class="form-control" name="PhysicalAddress" id="PhysicalAddress" style="direction:RTL;"required>';
                                        for($k=0;$k<count($Result);$k++)
                                        {
                                        echo '<option  value="'.$Result[$k]->ID.'">'.$Result[$k]->FriendlyAddress.'</option> ';
                                        }  
                   
               echo' </select>
                </div>
                <br>';                                 
                $cont3=Content::Button(69,"Submit");
                echo '
                                    <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
                                    <div class="register-link m-t-15 text-center">
                                    </div>
                </form>

                </div>';
                
         include_once "footer.php";

    }
    public static function SearchStaticPage()
    {
        $Result=Link::ViewstaticpageDropdown();
        include_once "header.php";
        echo '<div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm">
            
                <h3 style="text-align:center; color: rgba(45, 65, 21)"> اختر الصفحة المراد تعديلها</h3>
                <br>
                <div class="form-group">
                            <select class="form-control" name="html" id="html" style="direction:RTL;"required>
                            <option value=0 >اختر الصفحة</option>';
                            for($k=0;$k<count($Result);$k++)
                            {
                            echo '<option  value="'.$Result[$k]->pagename.'">'.$Result[$k]->pagename.'</option> ';
                            }  
       echo '
    </select>';                                 
    $cont3=Content::Button(31,"remove");
    echo '
            <button type="submit" name="remove" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
            
        </form>
        </div> 
        
</div>

';
        include_once "footer.php";
    }
    public static function UpdateStaticPage($Result)
    {
        include_once "header.php";
        echo '<html>
        <head>
        <script src="ckeditor/ckeditor.js"></script>
        </head>
        </html>';
        echo '<form method="post">
        <textarea name="editor1" id="editor1" rows="10" cols="80" >
            '.$Result.'
        </textarea>
        <script>
            CKEDITOR.replace( "editor1" );
        </script>
        ';                                 
    $cont3=Content::Button(65,"submit");
    echo '
    <button type=submit  name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" > '.$cont3.' </button>
    </form>
';
        include_once "footer.php";
    }
    public static function SearchEverythingPage()
    {
        $Result=Link::ViewEverythingpageDropdown();
        include_once "header.php";
        echo '<div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm">
            
                <h3 style="text-align:center; color: rgba(45, 65, 21)"> اختر الصفحة المراد تعديلها</h3>
                <br>
                <div class="form-group">
                            <select class="form-control" name="html" id="html" style="direction:RTL;"required>
                            <option value=0 >اختر الصفحة</option>';
                            for($k=0;$k<count($Result);$k++)
                            {
                            echo '<option  value="'.$Result[$k]->ID.'">'.$Result[$k]->FriendlyAddress.'</option> ';
                            }  
       echo '
    </select>
    ';                                 
    $contmain=Content::Button(58,"remove");
    echo '
            <button type="submit" name="remove" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$contmain.'</button>
            
        </form>
        </div> 
        
</div>

';
        include_once "footer.php";
    }
    public static function viewEverythingPage($Resulttwo)
    {
        include_once "header.php";
        echo '<div class="form-validation">
        <form method="post">
        ';
        $i=2;
                            for($k=0;$k<count($Resulttwo);$k++)
                            {
                                if($Resulttwo[$k]->Type_ID==1)
                                {
                                    echo ' <label class="label" style="margin-left: 75%;font-size:20px;color:black;" >تعديل محتوي الرسالة الالكترونية<span class="text-danger">*</label>
                                    
                                 <input  type="text" value="'.$Resulttwo[$k]->Content.'" name="mail" class="form-control"  style="direction:RTL;"  onkeypress="return CheckArabicCharactersOnly(event);"  required  >
                               
                                ';
                                }
                                else if($Resulttwo[$k]->Type_ID==2)
                                {
                                    echo ' <label class="label" style="margin-left: 78%;font-size:20px;color:black;" >تعديل محتوي رسالة التأكيد<span class="text-danger">*</label>
                                    <input id="user" type="text" value="'.$Resulttwo[$k]->Content.'" name="alert'.$i.'" class="form-control" style="direction:RTL;" onkeypress="return CheckArabicCharactersOnly(event);"  required  >
                                ';
                                $i=$i+1;
                                }
                                else if($Resulttwo[$k]->Type_ID==3)
                                {
                                    echo ' <label class="label" style="margin-left: 78%;font-size:20px;color:black;" >تعديل محتوي الزر<span class="text-danger">*</label>
                                    <input id="user" type="text" value="'.$Resulttwo[$k]->Content.'" name="button" class="form-control" style="direction:RTL;"  onkeypress="return CheckArabicCharactersOnly(event);"   required  >
                                ';
                                }
                                else{
                                    echo ' <label class="label" style="margin-left: 78%;font-size:20px;color:black;" >تعديل العنوان<span class="text-danger">*</label>
                                    <input id="user" type="text" value="'.$Resulttwo[$k]->Content.'" name="label" class="form-control" style="direction:RTL;"  onkeypress="return CheckArabicCharactersOnly(event);"  required  >
                                ';

                                }
                            }  
       echo '
       ';                                 
       $contmain2=Content::Button(66,"submit");
       echo '
    <button type=submit  name="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" > '.$contmain2.' </button>
    </form>
        </div><script language="javascript" type="text/javascript">
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
                    $alert=Content::Alert(66,"alert2");
                    echo'
                    alert("'.$alert.'");
                    return false; //disable key press
                 }
          }
        }</script>';
        include_once "footer.php";
    }
   /* public static function addnew()
    {
        include_once "header.php";
      echo'  <form class="form-valide" method="post" id="form" name="myForm">
                                    
                <div class="form-group">
                                        <label class="label" style="margin-left: 78%;font-size:20px;color:black;" >اسم الصفحة الذي تود اضافتها<span class="text-danger">*</label>
                                        <input id="user" type="text" name="pagename" class="form-control" style="direction:RTL;"  required  >
                                    
                <br>


                                    <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">اضافة</button>
                                    <div class="register-link m-t-15 text-center">
                                    </div>
                </form>';
        include_once "footer.php";
    }*/
}
?>
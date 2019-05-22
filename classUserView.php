<?php
include_once "classDatabase.php";
include_once "classMaintenanceEngineer.php";
include_once "classAddress.php";
include_once "classContent.php";

include_once "classUserType.php";
class UserView
{
    public static function Login()
    {
        echo '<!DOCTYPE html>
        <html lang="en">
        
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!-- Tell the browser to be responsive to screen width -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
            <!-- Favicon icon -->
            <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
            <title>Ela - Bootstrap Admin Dashboard Template</title>
            <!-- Bootstrap Core CSS -->
            <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
            <!-- Custom CSS -->
            <link href="css/helper.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesnt work if you view the page via file:** -->
            <!--[if lt IE 9]>
            <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        </head>
        
        <body class="fix-header fix-sidebar">
            <!-- Preloader - style you can find in spinners.css -->
            <div class="preloader">
                <svg class="circular" viewBox="25 25 50 50">
                    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
            </div>
            <!-- Main wrapper  -->
            <div id="main-wrapper">
        
                <div class="unix-login">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="login-content card">
                                    <div class="login-form">
                                    <h2 style="text-align:center;">تسجيل الدخول</h2>
                                        <form method="post">
                                            <div class="form-group">
                                            <label for="pass" class="label" for="val-email" style="margin-left: 55%;font-size:20px">البريد الالكتروني<span class="text-danger">*</span></label>
                                                <input id="pass" type="email" name="email" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                            <label for="pass" class="label"  for="val-password" style="margin-left: 70%;font-size:20px" > كلمه السر<span class="text-danger">*</label>
                                                <input id="pass" type="password" class="form-control" name ="password" required>
                                            </div>
                                            <div class="checkbox">
                                                <label>
                                                        <input type="checkbox"> تذكرني
                                                    </label>
                            </div>
                            <div>
                                                <label class="pull-right" >
                                                        <a href="page-forgetpassword.php" >هل نسيت كلمة المرور؟</a>
                                                    </label>
        
                                            </div>
                                            ';                                     
                                                $cont3=Content::Button(59,"send");
                                            echo '
                                            <button type="submit" name="send" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
                                            <div class="register-link m-t-15 text-center">
                                                <p> ليس لديك حساب؟ <a href="page-register.php">انشئ حساب من هنا </a></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
            <!-- End Wrapper -->
            <!-- All Jquery -->
            <script src="js/lib/jquery/jquery.min.js"></script>
            <!-- Bootstrap tether Core JavaScript -->
            <script src="js/lib/bootstrap/js/popper.min.js"></script>
            <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
            <!-- slimscrollbar scrollbar JavaScript -->
            <script src="js/jquery.slimscroll.js"></script>
            <!--Menu sidebar -->
            <script src="js/sidebarmenu.js"></script>
            <!--stickey kit -->
            <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
            <!--Custom JavaScript -->
            <script src="js/custom.min.js"></script>
        
        </body>
        
        </html>';
    }
    public static function Adduser()
    {
        $Resultaddress=Address::ViewDropdown();
        $Resultusertype=UserType::ViewUsertypeDropdown();
        $Resultme=ME::ViewDropdown();

        include_once "header.php";

        echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> انشاء حساب لمستخدم جديد</h2>
        <div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="user" class="label" style="margin-left: 93%;font-size:20px;color:black;">  اسمك<span class="text-danger">*</label>
                <input id="user" type="text" name="firstname" class="form-control" style="direction:RTL;"  pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);"  required  >
            </div>
            <div class="form-group">
                <label for="user" class="label" style="margin-left: 91%;font-size:20px;color:black;"> اسم الاب<span class="text-danger">*</label>
                <input id="user" type="text" name="lastname" class="form-control" style="direction:RTL;"  pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" required  >
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 90%;font-size:20px;color:black;" >اسم العائلة<span class="text-danger">*</label>
                <input id="user" type="text"  name="familyname" class="form-control" style="direction:RTL;"  pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" required  >
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >تاريخ الميلاد<span class="text-danger">*</label>
                <input type="date" name="dateofbirth" id="dateofbirth" style="margin-left: 84%"  required>
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >رقم المحمول<span class="text-danger">*</label>
                <input type="text" name="MobileNumber" class="form-control" pattern="[0-9]{6,25}" style="direction:RTL;"  required>
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 90%;font-size:20px;color:black;" >رقم الهاتف<span class="text-danger">*</label>
                <input type="text" name="Home" class="form-control"  pattern="[0-9]{6,25}" style="direction:RTL;"  required>
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >رقم القومى<span class="text-danger">*</label>
                <input type="text" name="NationaID" class="form-control" pattern="[0-9]{11,}" style="direction:RTL;" required>
            </div>
            <div class="form-group">
                <label class="label" style="margin-left: 94%;font-size:20px;color:black;" >البلد<span class="text-danger">*</label>
                <select class="form-control" name="state" id="country" style="direction:RTL;"required>
                <option value=0 >اختر البلد</option>';
                for($k=0;$k<count($Resultaddress);$k++)
                {
                echo '<option  value="'.$Resultaddress[$k]->ID.'">'.$Resultaddress[$k]->Name.'</option> ';
                } 
            echo "</select>
            <br>
                                    <label class='label' style='margin-left: 91%;font-size:20px;color:black;' >المحافظة<span class='text-danger'>*</label>
                                    <select class='form-control' name='city' id='city' style='direction:RTL;' required>
                
            </select>
            <script type='text/javascript'>
            $(document).ready(function(){
                $('#country').on('change',function(){
                    var countryID = $(this).val();
                    if(countryID){
                        $.ajax({
                            type:'POST',
                            url:'ajaxpro.php',
                            data:'country_id='+countryID,
                            success:function(html){
                                $('#city').html(html);
                            }
                        }); }
                });
            });
            </script>
            </div>
            <div class='form-group'>
                                    <label class='label' style='margin-left: 94%;font-size:20px;color:black;' >المهنة<span class='text-danger'>*</label>
                                    <select class='form-control' name='usertype' id='usertype' style='direction:RTL;'required>";
                                    for($k=0;$k<count($Resultusertype);$k++)
                                    {
                                    echo '<option  value="'.$Resultusertype[$k]->ID.'">'.$Resultusertype[$k]->Type.'</option> ';
                                    } 
                        echo "</select>
                        </div>
                        <script>
    $('#usertype').on('change',function(){
        var selected = $(this).val();
        if(selected==14)
        {
            $('#hidden').css({ display: 'block' });
        }
        else{
            $('#hidden').css({ display: 'none' });
        }
    });
    </script>
                        <div class='form-group' name='hidden' id='hidden'>
                                        <label class='label' style='margin-left: 89%;font-size:20px;color:black;' >نوع الصيانة<span class='text-danger'>*</label>
                                        <select class='form-control' name='maintype' id='maintype' style='direction:RTL;'required>";
                                        for($k=0;$k<count($Resultme);$k++)
                                    {
                                    echo '<option  value="'.$Resultme[$k]->ID.'">'.$Resultme[$k]->MaintenanceType_ID.'</option> ';
                                    } 
                        echo '</select>
                        </div>
                <br>
                <div class="form-group">
                                        <label for="pass" class="label" for="val-email" style="margin-left: 86%;font-size:20px;color:black;">البريد الالكتروني<span class="text-danger">*</span></label>
                                        <input id="pass" type="email" name="PersonalMail" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label"  for="val-password" style="margin-left: 90%;font-size:20px;color:black;" > كلمه السر<span class="text-danger">*</label>
                                        <input id="pass" type="password" class="form-control" name ="Pass1" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label"  for="val-confirm-password" style="margin-left: 86%;font-size:20px;color:black;" >اعاده كلمه السر<span class="text-danger">*</label>
                                        <input id="pass" type="password" class="form-control" name ="Pass2" required>
                                    </div>';
                                    $cont3=Content::Button(7,"Submit");
                                    echo'
                                    <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
                                    <div class="register-link m-t-15 text-center">
                                    </div>
                                </form>
</div>
</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
          

    </div>
    <script language="javascript" type="text/javascript">
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
                                    $alert=Content::Alert(7,"alert3");
                                    echo'
                                    alert("'.$alert.'");
                                    return false; //disable key press
                                 }
                          }
                        }
         function validateForm() 
                { 
                    y2=document.forms["myForm"]["dateofbirth"].value;
                    var currentTime = new Date();
                    var currentyear = currentTime.getFullYear();
                    var YearOFuser=0;

                    for (var i = 0; i< 4; i++)
                    {
                        var year2= y2.charAt(i);
                        YearOFuser+=year2;
                        
                    }
                    if(currentyear-YearOFuser<20|| currentyear-YearOFuser>60)
                    {';
                        $alert3=Content::Alert(7,"alert4");
                        echo'
                        alert("'.$alert3.'");
                        return false;

                    }
                    x=document.forms["myForm"]["MobileNumber"].value;
                    if (x.length!=11 || isNaN(x) ) 
                    {';
                        $alert4=Content::Alert(7,"alert5");
                        echo'
                        alert("'.$alert4.'");
                        return false;
                    }
                    x=document.forms["myForm"]["Home"].value;
                    if (x.length!=8 || isNaN(x) ) 
                    {';
                        $alert5=Content::Alert(7,"alert6");
                        echo'
                        alert("'.$alert5.'");
                        return false;
                    }
                    x=document.forms["myForm"]["NationaID"].value;
                    if (x.length!=14 || isNaN(x) ) 
                    {';
                        $alert6=Content::Alert(7,"alert7");
                        echo'
                        alert("'.$alert6.'");
                        return false;
                    }
                    var password = document.forms["myForm"]["Pass1"].value
                    var confirm_password = document.forms["myForm"]["Pass2"].value;

                    if(password != confirm_password) {
                        ';
                        $alert7=Content::Alert(7,"alert8");
                        echo'
                        alert("'.$alert7.'");
                        return false;
                    } 
                }
        function validatechoose()
        {
              var b = 0;
              var x=document.getElementsByName("city"); 
               for(j=0;j<x.length;j++) 
                 {
                   if(x.item(j).checked == false) 
                      {
                        b++;
                      }
                 }
                  if(b == x.length) 
                    {';
                        $alert8=Content::Alert(7,"alert9");
                        echo'
                        alert("'.$alert8.'");
                        return false;
                    }    
        }        
     </script>

';

        include_once "footer.php";
    }
    public static function SearchUser()
    {
        include_once "header.php";
        echo '<html>
        <head>
        <style>
        .result{ 
            box-sizing: border-box;
        }
        .result p{
            width: 100%;
            margin: 0;
            text-align:center;
            font-size:15px;
            color:black;
            border: 1px solid #CCCCCC;
            border-top: none;
            cursor: pointer;
        }
        .result p:hover{
            background: #f2f2f2;
        }
        </style>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
            <script type="text/javascript">
            $(document).ready(function(){
                $(".search-box input").keyup(function(){
                    var inputVal = $(this).val();
                    var resultDropdown = $(this).siblings(); //result
                    if(inputVal.length){
                        $.get("backend-search.php", {term: inputVal}).done(function(data){
                            resultDropdown.html(data); //set
                        });
                    } else{
                        resultDropdown.empty();
                    }
                });
                $(document).on("click", ".result p", function(){
                    $(this).parents(".search-box").find("input").val($(this).html());
                    $(this).parent(".result").empty();
                });
            });
            </script>
            <script type="text/javascript">
                   $(document).ready(function(){
                    $(".close").click(function(){
                        $("#myModal").hide();
                    });
                });
            </script>
        </head>
        </html>';
        echo '<div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm">
            <div class="form-group">
                <br>
                <h3 style="text-align:center; color: rgba(45, 65, 21)"> اكتب بريد المستخدم الالكتروني الذي تود تعديل بياناته</h3>
                <br>
                <form id="searchform" method="post" name="myForm">
        <div class="search-box" >
                <input id="user" type="text" name="mail" autocomplete="off" class="form-control"  >
                <div class="result"></div>
            </div>
            ';
            $cont3=Content::Button(4,"search");
            echo'
            <button type="submit" name="search" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
            </form>
            </div>
            
        </form>
        </div> 
        
</div>';
        include_once "footer.php";
    }
    public static function UpdateUser($Result)
    {
        $Resultaddress=Address::ViewDropdown();

        include_once "header.php";
        echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> عدل بياناتك</h2>
        <div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm" onsubmit="return validateForm()">
        <div class="form-group">
                <label for="user" class="label" style="margin-left: 93%;font-size:20px;color:black;">  اسمك<span class="text-danger">*</label>
                <input id="user" type="text" name="firstname" class="form-control" style="direction:RTL;" pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" value='.$Result->FirstName.' required  >
            </div>
            <div class="form-group">
                <label for="user" class="label" style="margin-left: 91%;font-size:20px;color:black;"> اسم الاب<span class="text-danger">*</label>
                <input id="user" type="text" name="lastname" class="form-control" style="direction:RTL;" pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" value='.$Result->MiddleName.' required  >
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 90%;font-size:20px;color:black;" >اسم العائلة<span class="text-danger">*</label>
                <input id="user" type="text"  name="familyname" class="form-control" style="direction:RTL;" pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" value='.$Result->FamilyName.' required  >
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >تاريخ الميلاد<span class="text-danger">*</label>
                <input type="date" name="dateofbirth" id="dateofbirth" style="margin-left: 84%" value='.$Result->DateOfBirth.' required>
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >رقم المحمول<span class="text-danger">*</label>
                <input type="text" name="MobileNumber" class="form-control" style="direction:RTL;" pattern="[0-9]{6,25}" value=0'.$Result->Mobile.' required>
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 90%;font-size:20px;color:black;" >رقم الهاتف<span class="text-danger">*</label>
                <input type="text" name="Home" class="form-control" style="direction:RTL;" pattern="[0-9]{6,25}" value='.$Result->Home.' required>
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >الرقم القومى<span class="text-danger">*</label>
                <input type="text" name="NationaID" class="form-control" style="direction:RTL;" pattern="[0-9]{11,}" value='.$Result->national_ID.' required>
            </div>
            <div class="form-group">
                <label class="label" style="margin-left: 94%;font-size:20px;color:black;" >البلد<span class="text-danger">*</label>
                <select class="form-control" name="state" id="country" style="direction:RTL;"required>
                <option value=0 >اختر البلد</option>';
                for($k=0;$k<count($Resultaddress);$k++)
                {
                echo '<option  value="'.$Resultaddress[$k]->ID.'">'.$Resultaddress[$k]->Name.'</option> ';
                } 
                        echo "</select>
                        <br>
                                                <label class='label' style='margin-left: 91%;font-size:20px;color:black;' >المحافظة<span class='text-danger'>*</label>
                                                <select class='form-control' name='city' id='city' style='direction:RTL;' required>
                            
                        </select>
                        <script type='text/javascript'>
                        $(document).ready(function(){
                            $('#country').on('change',function(){
                                var countryID = $(this).val();
                                if(countryID){
                                    $.ajax({
                                        type:'POST',
                                        url:'ajaxpro.php',
                                        data:'country_id='+countryID,
                                        success:function(html){
                                            $('#city').html(html);
                                        }
                                    }); }
                            });
                        });
                        </script>
                        </div>
                        ";
                        $cont3=Content::Button(61,"save");
                        echo"
                                            <button type='submit' name='save' class='btn btn-primary btn-flat m-b-30 m-t-30'>".$cont3."</button>
                                            <div class='register-link m-t-15 text-center'>
                                            </div>
                                        </form>
        </div>
                                    
        
            </div>
            <script language='javascript' type='text/javascript'>
            // Allow Arabic Characters only
function CheckArabicCharactersOnly(e) 
        {
            var unicode = e.charCode ? e.charCode : e.unicode
            if (unicode != 8)
             { //if the key isn't the backspace key (which we should allow)
                     if (unicode == 32)
                     { return}
                    else 
                    {
                        if ((unicode >= 48 && unicode <= 57) || (unicode >= 65 && unicode <= 90) || (unicode >= 97 && unicode <= 122)
                         || (specialKeys.indexOf(e.unicode) != -1 && e.charCode != e.unicode)) 
                        //if not a number or arabic";
                        $alert=Content::Alert(61,"alert2");
                                    echo"
                                    alert('".$alert."');
                        return false; //disable key press
                     }
              }
            }
function validateForm() 
    { 
        
y2=document.forms['myForm']['dateofbirth'].value;
var currentTime = new Date();
var currentyear = currentTime.getFullYear();
var YearOFuser=0;

for (var i = 0; i< 4; i++)
{
    var year2= y2.charAt(i);
    YearOFuser+=year2;
    
}
if(currentyear-YearOFuser<20|| currentyear-YearOFuser>60)
{";
                        $alert3=Content::Alert(61,"alert3");
                        echo'
                        alert("'.$alert3.'");
                        return false;

                    }
                    x=document.forms["myForm"]["MobileNumber"].value;
                    if (x.length!=11 || isNaN(x) ) 
                    {';
                        $alert4=Content::Alert(61,"alert4");
                        echo'
                        alert("'.$alert4.'");
                        return false;
                    }
                    x=document.forms["myForm"]["Home"].value;
                    if (x.length!=8 || isNaN(x) ) 
                    {';
                        $alert5=Content::Alert(61,"alert5");
                        echo'
                        alert("'.$alert5.'");
                        return false;
                    }
                    x=document.forms["myForm"]["NationaID"].value;
                    if (x.length!=14 || isNaN(x) ) 
                    {';
                        $alert6=Content::Alert(61,"alert6");
                        echo'
                        alert("'.$alert6.'");
                        return false;
                    }
    }      
</script>';
        include_once "footer.php";
    }
    public static function UpdateMyself($Result)
    {
        $Resultaddress=Address::ViewDropdown();

        include_once "header.php";
        echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> عدل بياناتك</h2>
        <div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm" onsubmit="return validateForm()">
        <div class="form-group">
                <label for="user" class="label" style="margin-left: 93%;font-size:20px;color:black;">  اسمك<span class="text-danger">*</label>
                <input id="user" type="text" name="firstname" class="form-control" style="direction:RTL;" pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" value='.$Result->FirstName.' required  >
            </div>
            <div class="form-group">
                <label for="user" class="label" style="margin-left: 91%;font-size:20px;color:black;"> اسم الاب<span class="text-danger">*</label>
                <input id="user" type="text" name="lastname" class="form-control" style="direction:RTL;" pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" value='.$Result->MiddleName.' required  >
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 90%;font-size:20px;color:black;" >اسم العائلة<span class="text-danger">*</label>
                <input id="user" type="text"  name="familyname" class="form-control" style="direction:RTL;" pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" value='.$Result->FamilyName.' required  >
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >تاريخ الميلاد<span class="text-danger">*</label>
                <input type="date" name="dateofbirth" id="dateofbirth" style="margin-left: 84%" value='.$Result->DateOfBirth.' required>
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >رقم المحمول<span class="text-danger">*</label>
                <input type="text" name="MobileNumber" class="form-control" style="direction:RTL;" pattern="[0-9]{6,25}" value=0'.$Result->Mobile.' required>
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 90%;font-size:20px;color:black;" >رقم الهاتف<span class="text-danger">*</label>
                <input type="text" name="Home" class="form-control" style="direction:RTL;" pattern="[0-9]{6,25}" value='.$Result->Home.' required>
            </div>
            <div class="form-group">
                <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >الرقم القومى<span class="text-danger">*</label>
                <input type="text" name="NationaID" class="form-control" style="direction:RTL;" pattern="[0-9]{11,}" value='.$Result->national_ID.' required>
            </div>
            <div class="form-group">
                <label class="label" style="margin-left: 94%;font-size:20px;color:black;" >البلد<span class="text-danger">*</label>
                <select class="form-control" name="state" id="country" style="direction:RTL;"required>
                <option value=0 >اختر البلد</option>';
                for($k=0;$k<count($Resultaddress);$k++)
                {
                echo '<option  value="'.$Resultaddress[$k]->ID.'">'.$Resultaddress[$k]->Name.'</option> ';
                } 
                        echo "</select>
                        <br>
                                                <label class='label' style='margin-left: 91%;font-size:20px;color:black;' >المحافظة<span class='text-danger'>*</label>
                                                <select class='form-control' name='city' id='city' style='direction:RTL;' required>
                            
                        </select>
                        <script type='text/javascript'>
                        $(document).ready(function(){
                            $('#country').on('change',function(){
                                var countryID = $(this).val();
                                if(countryID){
                                    $.ajax({
                                        type:'POST',
                                        url:'ajaxpro.php',
                                        data:'country_id='+countryID,
                                        success:function(html){
                                            $('#city').html(html);
                                        }
                                    }); }
                            });
                        });
                        </script>
                        </div>
                        ";
                        $cont3=Content::Button(3,"save");
                        echo"
                                            <button type='submit' name='save' class='btn btn-primary btn-flat m-b-30 m-t-30'>".$cont3."</button>
                                            <div class='register-link m-t-15 text-center'>
                                            </div>
                                        </form>
        </div>
                                    
        
            </div>
            <script language='javascript' type='text/javascript'>
                                // Allow Arabic Characters only
                function CheckArabicCharactersOnly(e) 
                            {
                                var unicode = e.charCode ? e.charCode : e.unicode
                                if (unicode != 8)
                                 { //if the key isn't the backspace key (which we should allow)
                                         if (unicode == 32)
                                         { return}
                                        else 
                                        {
                                            if ((unicode >= 48 && unicode <= 57) || (unicode >= 65 && unicode <= 90) || (unicode >= 97 && unicode <= 122)
                                             || (specialKeys.indexOf(e.unicode) != -1 && e.charCode != e.unicode)) 
                                            //if not a number or arabic";
                                            $alert=Content::Alert(3,"alert2");
                                                        echo"
                                                        alert('".$alert."');
                                            return false; //disable key press
                                         }
                                  }
                                }
                 function validateForm() 
                        { 
                            
                    y2=document.forms['myForm']['dateofbirth'].value;
                    var currentTime = new Date();
                    var currentyear = currentTime.getFullYear();
                    var YearOFuser=0;

                    for (var i = 0; i< 4; i++)
                    {
                        var year2= y2.charAt(i);
                        YearOFuser+=year2;
                        
                    }
                    if(currentyear-YearOFuser<20|| currentyear-YearOFuser>60)
                    {";
                        $alert3=Content::Alert(3,"alert3");
                        echo'
                        alert("'.$alert3.'");
                        return false;

                    }
                    x=document.forms["myForm"]["MobileNumber"].value;
                    if (x.length!=11 || isNaN(x) ) 
                    {';
                        $alert4=Content::Alert(3,"alert4");
                        echo'
                        alert("'.$alert4.'");
                        return false;
                    }
                    x=document.forms["myForm"]["Home"].value;
                    if (x.length!=8 || isNaN(x) ) 
                    {';
                        $alert5=Content::Alert(3,"alert5");
                        echo'
                        alert("'.$alert5.'");
                        return false;
                    }
                    x=document.forms["myForm"]["NationaID"].value;
                    if (x.length!=14 || isNaN(x) ) 
                    {';
                        $alert6=Content::Alert(3,"alert6");
                        echo'
                        alert("'.$alert6.'");
                        return false;
                    }
    }      
</script>';
        include_once "footer.php";
    }
    public static function DeleteUser()
    {
        include_once "header.php";

        echo '<html>
        <head>
        <style>
        .result{ 
            box-sizing: border-box;
        }
        .result p{
            width: 100%;
            margin: 0;
            text-align:center;
            font-size:15px;
            color:black;
            border: 1px solid #CCCCCC;
            border-top: none;
            cursor: pointer;
        }
        .result p:hover{
            background: #f2f2f2;
        }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
            $(".search-box input").keyup(function(){
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(); //result
                if(inputVal.length){
                    $.get("backend-search.php", {term: inputVal}).done(function(data){
                        resultDropdown.html(data); //set
                    });
                } else{
                    resultDropdown.empty();
                }
            });
            $(document).on("click", ".result p", function(){
                $(this).parents(".search-box").find("input").val($(this).html());
                $(this).parent(".result").empty();
            });
        });
        </script>
        <script type="text/javascript">
               $(document).ready(function(){
                $(".close").click(function(){
                    $("#myModal").hide();
                });
            });
        </script>
        </head>
        </html>';
        echo '<div class="form-validation">
        <form class="form-valide" method="post" id="form" name="myForm">
            <div class="form-group">
                <br>
                <h3 style="text-align:center; color: rgba(45, 65, 21)"> اكتب بريد المستخدم الالكتروني الذي تود مسحه</h3>
                <br>
                <form id="searchform" method="post" name="myForm">
        <div class="search-box" >
                <input id="user" type="text" name="mail" autocomplete="off" class="form-control"  >
                <div class="result"></div>
            </div>';
            $cont3=Content::Button(1,"remove");
            echo'
            
            <button type="submit" name="remove" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
            </form>
            </div>
            
        </form>
        </div> 
        
</div>';

        include_once "footer.php";
    }
    public static function ShowAllUsers($Result)
	{
		
            include_once "header.php";
            echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> جميع المستخدمين</h2>
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
                                        <th>المهنة</th>
                                        <th>البريد الالكتروني</th>
                                        <th>المحافظة</th>
                                        <th>البلد</th>
                                        <th>رقم الهاتف</th>
                                        <th>رقم المحمول</th>
                                        <th>تاريخ الميلاد</th>
                                        <th>الرقم القومي</th>
                                        <th>الاسم بالكامل</th>
                                    </tr>
                                </thead>
                                <tbody>';
                                for ($i=0;$i<count($Result);$i++)
                                {
                                    echo "<tr>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->usertype . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->Email . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->city . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->country . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->Home . "</td>";
                                    echo "<td style='color:#514F4E;'>0" . $Result[$i]->Mobile . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->DateOfBirth . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->national_ID . "</td>";
                                    echo "<td style='color:#514F4E;'>" . $Result[$i]->FirstName ." ". $Result[$i]->MiddleName ." ". $Result[$i]->FamilyName . "</td>";
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
    public static function SendAll()
	{
		
            include_once "header.php";
            echo '<h2 style="text-align:center; color: rgba(45, 65, 21)"> اكتب الرسالة التي تود ارسالها لجميع العاملين</h2>
            <div class="form-validation">
            <form class="form-valide" method="post" id="form" name="myForm" >
            <div class="form-group">
                    <label for="user" class="label" style="margin-left: 93%;font-size:20px;color:black;">  الرسالة<span class="text-danger">*</label>
                    <input id="user" type="text" name="msg" class="form-control" style="direction:RTL;" required  >
                </div>';
                $cont3=Content::Button(55,"save");
                echo'
                <button type="submit" name="save" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$cont3.'</button>
                                           
                </form>
                </div>';
            include_once "footer.php";
		
	}

}
?>
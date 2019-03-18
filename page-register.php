<?php
$access_key = '398560a0ad027a0e28d23abe8cb12a50';
include_once "classUser.php";
include_once "classStudent.php";
include_once "classDatabase.php";
    
    if(isset($_POST['Submit']))
    {
        $obj = new Student();
        $user = new Users();
        $user->FirstName=$_POST['firstname'];
        $user->MiddleName=$_POST['lastname'];
        $user->FamilyName=$_POST['familyname'];
        $user->DateOfBirth=$_POST['dateofbirth'];
        $user->Mobile=$_POST['MobileNumber'];
        $user->Home=$_POST['Home'];
        $user->Address=$_POST['city'];
        $user->Email=$_POST['PersonalMail'];
        $passhash=$_POST['Pass1'];
        $user->Password=md5($passhash);
        $user->national_ID=$_POST['NationaID'];
        $obj->facultyID=$_POST['facultyID']; 
        $obj->GradeID=$_POST['GradeID']; 

        $email_address =  $user->Email;
        $ch = curl_init('http://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'');  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        // Store the data:
        $json = curl_exec($ch);
        curl_close($ch);
        
        // Decode JSON response:
        $validationResult = json_decode($json, true);
        
        if ($validationResult['format_valid'] && $validationResult['smtp_check']) {
            //echo "<script> alert('Email is valid');</script>";
            return Student::SignUp($obj,$user);
        }
        else{
            echo "<script> alert('Email is not valid');</script>";
        }
        
        
    }

    if(isset($_POST['reg']))
    {
        header("location: Regulations.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
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
                            <form  method="post">
                            <button type="submit" name="reg"class="btn btn-primary btn-flat m-b-30 m-t-30">نبذة عن السكن الطلابي</button>
                                   
</form>
<br>
                                <h2 style="text-align:center;">طلب تقديم للسكن</h2>
                                <div class="form-validation">
                                <form class="form-valide" method="post"  name="signupForm" onsubmit="return validateForm()">
                                    <div class="form-group">
                                        <label for="user" class="label" style="margin-left: 80%;font-size:20px">  اسمك<span class="text-danger">*</label>
                                        <input id="firstname" type="text" name="firstname" class="form-control" style="direction:RTL"  pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" required  >
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="label" style="margin-left: 70%;font-size:20px"> اسم الاب<span class="text-danger">*</label>
                                        <input id="lastname" type="text" name="lastname" class="form-control" style="direction:RTL"   pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" required  >
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 66%;font-size:20px" >اسم العائلة<span class="text-danger">*</label>
                                        <input id="familyname" type="text"  name="familyname" class="form-control" style="direction:RTL"  pattern="[أ-ي]{1,30}"  title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" required  >
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 60%;font-size:20px" >تاريخ الميلاد<span class="text-danger">*</label>
                                        <input type="date" name="dateofbirth" id="dateofbirth" style="margin-left: 40%" style="direction:RTL;" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 60%;font-size:20px" >رقم المحمول<span class="text-danger">*</label>
                                        <input type="text" id="MobileNumber" name="MobileNumber" class="form-control"  pattern="[0-9]{6,25}" style="direction:RTL;" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 65%;font-size:20px" >رقم الهاتف<span class="text-danger">*</label>
                                        <input type="text" name="Home"  id="Home" class="form-control"   pattern="[0-9]{6,25}" style="direction:RTL;" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 65%;font-size:20px" >رقم القومى<span class="text-danger">*</label>
                                        <input type="text" name="NationaID" id="NationaID" class="form-control"   pattern="[0-9]{11,}" style="direction:RTL;" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 65%;font-size:20px">التقدير<span class="text-danger">*</label>
                                        <select name="GradeID" id="GradeID" class="form-control" onchange="validatechoose()" style="direction:RTL;"  required>
                                        <option value=0>اختر التقدير</option>
                                        <?php
                         
                         $connection = new DB();
                         $conn = $connection->connect();
                                                 $conn->query("SET NAMES 'utf8'");
                                                 $sql="SELECT * FROM grades";
                                                 $resultQuery = $conn->query($sql);
                                                 while($row = $resultQuery->fetch_assoc())
                                                 {
                                                    if($row==true)
                                                      {
                                                        $id1=$row["ID"];
                                                        $grade=$row["Grade"];
                                                        echo '<option value="'.$id1.'">'.$grade.'</option>';
                                                      }
                                                }
                                                     $conn->close();
                                    ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 65%;font-size:20px">الكليه<span class="text-danger">*</label>
                                        <select name="facultyID" class="form-control" style="direction:RTL;"  required>
                                        <option value=0>اختر الكليه</option>
                                        <?php
                         
                         $connection = new DB();
                         $conn = $connection->connect();
                                                 $conn->query("SET NAMES 'utf8'");
                                                 $sql="SELECT * FROM faculties";
                                                 $resultQuery = $conn->query($sql);
                                                 while($row = $resultQuery->fetch_assoc())
                                                 {
                                                    if($row==true)
                                                      {
                                                        $id2=$row["ID"];
                                                        $faculty=$row["Faculty"];
                                                        echo '<option value="'.$id2.'">'.$faculty.'</option>';
                                                      }
                                                }
                                                     $conn->close();
                                    ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="label" style="margin-left: 80%;font-size:20px" >البلد<span class="text-danger">*</label>
                                        <select class="form-control" name="state" id="country" style="direction:RTL;" required>
                                        <option value=0>اختر بلدك</option>
                    <?php
                         
                         $connection = new DB();
                         $conn = $connection->connect();
                            $conn->query("SET NAMES 'utf8'");
                            $query="SELECT * FROM address WHERE Parent_ID=0";
                            $resultQuery = $conn->query($query);
                            while($rowq = $resultQuery->fetch_assoc()){
                                if($rowq==true)
                                {
                                    $id=$rowq["ID"];
                                    $type=$rowq["Name"];
                                    echo '<option value="'.$id.'">'.$type.'</option>';
                                    
                                }
                            }

                        
                        $conn->close();
                    ?>
                </select>
                                        <label class="label" style="margin-left: 70%;font-size:20px" >المحافظة<span class="text-danger">*</label>
                                        <select class="form-control" name="city" id="city" style="direction:RTL;" required>
                    
                </select>
                <script type="text/javascript">
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
                                    <div class="form-group">
                                        <label for="pass" class="label" for="val-email" style="margin-left: 55%;font-size:20px">البريد الالكتروني<span class="text-danger">*</span></label>
                                        <input id="email" type="email" name="PersonalMail"  class="form-control">
                                    </div>
                                    <form>
                                    <div class="form-group">
                                        <label for="pass" class="label"  for="val-password" style="margin-left: 70%;font-size:20px" > كلمه السر<span class="text-danger">*</label>
                                        <input id="pass1" type="password" class="form-control" name ="Pass1" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label"  for="val-confirm-password" style="margin-left: 58%;font-size:20px" >اعاده كلمه السر<span class="text-danger">*</label>
                                        <input id="pass2" type="password" class="form-control" name ="Pass2" required>
                                    </div>
                                    <button type="submit" name="Submit"class="btn btn-primary btn-flat m-b-30 m-t-30">انشاء</button>
                                    
                                     <div class="register-link m-t-15 text-center">
                                        <p>هل لديك حساب بالفعل؟ <a href="page-login.php">تسجيل الدخول</a></p>
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
                         { //if the key isn't the backspace key (which we should allow)
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
         function validateForm() 
                { 
                    x=document.forms["signupForm"]["MobileNumber"].value;
                    if (x.length!=11 || isNaN(x) ) 
                    {
                        alert("تاكد من رقم المحمول");
                        return false;
                    }
                    x=document.forms["signupForm"]["Home"].value;
                    if (x.length!=8 || isNaN(x) ) 
                    {
                        alert("تاكد من رقم المنزل");
                        return false;
                    }
                    x=document.forms["signupForm"]["NationaID"].value;
                    if (x.length!=14 || isNaN(x) ) 
                    {
                        alert("تاكد من الرقم القومي");
                        return false;
                    }
                    var password = document.forms["signupForm"]["Pass1"].value
                    var confirm_password = document.forms["signupForm"]["Pass2"].value;

                    if(password != confirm_password) {
                        alert("كلمه السر غير متشابهة");
                        return false;
                    } 
                }
        function validatechoose()
        {
              var b = 0;
              var x=document.getElementsByName("GradeID"); 
               for(j=0;j<x.length;j++) 
                 {
                   if(x.item(j).checked == false) 
                      {
                        b++;
                      }
                 }
                  if(b == x.length) 
                    {
                        alert("من فضلك اختر التقدير");
                        return false;
                    } 
               
        }        
     </script>
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

</html>
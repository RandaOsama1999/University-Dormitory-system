<?php
$access_key = '398560a0ad027a0e28d23abe8cb12a50';
include_once "classUser.php";
include_once "classDatabase.php";
include_once "classStudent.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: page-login.php');
}
if (isset($_GET['Logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: page-login.php");
}
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
            return Student::addStudent($obj,$user);
        }
        else{
            echo "<script> alert('Email is not valid');</script>";
        }
        
    }

?>
<!DOCTYPE html>
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

    <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
    <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<style>
    li button {
    display: block;
    color: black;
    padding: 8px 16px;
    text-decoration: none;
    background-color: #f1f1f1;
    border: none;
    padding: 12px 28px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

li button:hover{
    background-color: white;
    color: black;
    text-decoration: none;
}

li button.active {
    background-color: white;
    color: black;
}
    </style>
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon -->
                        <b><img src="UniLogoSmall.png" alt="homepage" class="dark-logo" /></b>
                        
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <!--<span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>-->
                    </a>
                </div>
                <!-- End Logo -->
                        <!-- Profile -->
                        <li class="nav-item dropdown" style="margin-left: 70%">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="facebook-avatar.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                            <form  method="get" >
                                <ul class="dropdown-user">
                                    <!--<li><a href="#"><i class="ti-user"></i> تعديل بياناتك</a></li>-->
                                    <li><button class="active" name="Logout"><i class="fa fa-power-off"></i> تسجيل الخروج</button></li>
                                </ul>
                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label" style="font-size:150%; text-align:center; color: rgba(45, 65, 21);">مسئولياتك</li>
                        
                                <?php
                                            
                                            $connection = new DB();
                                            $conn = $connection->connect();
                                    $conn->query("SET NAMES 'utf8'");

                                    $email = $_SESSION['email']; 
                                    $sql = "SELECT * FROM user WHERE Email='$email' AND IsDeleted=0";
                                    $result = $conn->query($sql);
                                        while($row = $result->fetch_assoc()){
                                            if($row==true)
                                            {
                                                $Name=$row["FirstName"];
                                                $FName=$row["FamilyName"];
                                                $usertype_ID=$row['usertype_ID'];
                                                $sqltwo = "SELECT * FROM usertypelinks WHERE userType_ID='$usertype_ID' AND IsDeleted=0";
                                                $resulttwo = $conn->query($sqltwo);
                                                    while($rowtwo = $resulttwo->fetch_assoc()){
                                                        if($rowtwo==true)
                                                        {
                                                            $links_ID=$rowtwo['links_ID'];
                                                            $sqlt = "SELECT * FROM links WHERE ID='$links_ID' AND IsDeleted=0";
                                                            $resultt = $conn->query($sqlt);
                                                                while($rowt = $resultt->fetch_assoc()){
                                                                    if($rowt==true)
                                                                    {
                                                                        $PhysicalAddress=$rowt['PhysicalAddress'];
                                                                        $FriendlyAddress=$rowt['FriendlyAddress'];
                                                                        echo '<li><a style="font-size:120%; text-align:center" href='.$PhysicalAddress.'>'.$FriendlyAddress.' </a></li>';
                                                                    }
                                                                }
                                                            
                                                        }
                                                    }
                                                
                                            }
                                        }
                                    
                                    $conn->close();
                                ?>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <br>
                                <h2 style='text-align:center; color: rgba(45, 65, 21)'> انشاء حساب لمستخدم جديد</h2>
                                <div class="form-validation">
                                <form class="form-valide" method="post" id="form" name="myForm" onsubmit="return validateForm()">
                                <div class="form-group">
                                <label for="user" class="label" style="margin-left: 93%;font-size:20px;color:black;">  اسمك<span class="text-danger">*</label>
                                        <input id="user" type="text" name="firstname" class="form-control" style="direction:RTL;" pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" required  >
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="label" style="margin-left: 91%;font-size:20px;color:black;"> اسم الاب<span class="text-danger">*</label>
                                        <input id="user" type="text" name="lastname" class="form-control" style="direction:RTL;" pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" required  >
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 90%;font-size:20px;color:black;" >اسم العائلة<span class="text-danger">*</label>
                                        <input id="user" type="text"  name="familyname" class="form-control" style="direction:RTL;" pattern="[أ-ي]{1,30}" title="اكتب باللغه العربيه" onkeypress="return CheckArabicCharactersOnly(event);" required  >
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >تاريخ الميلاد<span class="text-danger">*</label>
                                        <input type="date" name="dateofbirth" id="dateofbirth" style="margin-left: 84%" style="direction:RTL;" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >رقم المحمول<span class="text-danger">*</label>
                                        <input type="text" name="MobileNumber" class="form-control" pattern="[0-9]{6,25}" style="direction:RTL;"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 90%;font-size:20px;color:black;" >رقم الهاتف<span class="text-danger">*</label>
                                        <input type="text" name="Home" class="form-control" pattern="[0-9]{6,25}" style="direction:RTL;"  required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >رقم القومى<span class="text-danger">*</label>
                                        <input type="text" name="NationaID" class="form-control"  pattern="[0-9]{11,}" style="direction:RTL;" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 94%;font-size:20px;color:black;">التقدير<span class="text-danger">*</label>
                                        <select name="GradeID"  class="form-control"  onchange="validatechoose()" style="direction:RTL;"  required>
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
                                        <label for="pass" class="label" style="margin-left: 94%;font-size:20px;color:black;">الكليه<span class="text-danger">*</label>
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
                                        <label class="label" style="margin-left: 94%;font-size:20px;color:black;" >البلد<span class="text-danger">*</label>
                                        <select class="form-control" name="state" id="country" style="direction:RTL;"required>
                                        <option value=0 >اختر البلد</option>
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
                <br>
                                        <label class="label" style="margin-left: 91%;font-size:20px;color:black;" >المحافظة<span class="text-danger">*</label>
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
                                    </div>
                                    <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">انشاء</button>
                                    
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
                    x=document.forms["myForm"]["MobileNumber"].value;
                    if (x.length!=11 || isNaN(x) ) 
                    {
                        alert("تاكد من رقم المحمول");
                        return false;
                    }
                    x=document.forms["myForm"]["Home"].value;
                    if (x.length!=8 || isNaN(x) ) 
                    {
                        alert("تاكد من رقم المنزل");
                        return false;
                    }
                    x=document.forms["myForm"]["NationaID"].value;
                    if (x.length!=14 || isNaN(x) ) 
                    {
                        alert("تاكد من الرقم القومي");
                        return false;
                    }
                    var password = document.forms["myForm"]["Pass1"].value
                    var confirm_password = document.forms["myForm"]["Pass2"].value;

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
</div>
                            

    </div>



                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © <?php echo date("Y"); ?> All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
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


    <!-- Amchart -->
     <script src="js/lib/morris-chart/raphael-min.js"></script>
    <script src="js/lib/morris-chart/morris.js"></script>
    <script src="js/lib/morris-chart/dashboard1-init.js"></script>


	<script src="js/lib/calendar-2/moment.latest.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/semantic.ui.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/prism.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.calendar.min.js"></script>
    <!-- scripit init-->
    <script src="js/lib/calendar-2/pignose.init.js"></script>

    <script src="js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="js/scripts.js"></script>
    <!-- scripit init-->

    <script src="js/custom.min.js"></script>

</body>

</html>
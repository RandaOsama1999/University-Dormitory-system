<?php
include_once "classUserModel.php";
include_once "classDatabase.php";
include_once "classContent.php";

session_start();
            
$conn=DB::getInstance();
$mysql=$conn->getConnection();
$conn=mysqli_query($mysql,"SET NAMES 'utf8'");
date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
            if(isset($_POST['change'])){
                $email = $_POST['email'];
                        $obj = new Users();
                        $passhash=$_POST['Pass1'];
                        $obj->Password=md5($passhash);
                        $pass=$obj->Password;
                        DB::update("user","Password='$pass',LastUpdatedDateTime='$today'","Email='$email' AND IsDeleted=0");
                       // $conn->close();
                        header("Location:page-login.php");

                        //$_SESSION['email'] = $email;
                        //header("location: AllPages.php");
						}
						
            
            //$conn->close();
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
                            <h2 style="text-align:center;">هل نسيت كلمة المرور؟</h2>
                                <form method="post" name="signupForm" onsubmit="return validateForm()">
                                    <div class="form-group">
                                    <label for="pass" class="label" for="val-email" style="margin-left: 55%;font-size:20px">البريد الالكتروني<span class="text-danger">*</span></label>
                                        <input id="pass" type="email" name="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label"  for="val-password" style="margin-left: 70%;font-size:20px" > كلمه السر<span class="text-danger">*</label>
                                        <input id="pass" type="password" class="form-control" name ="Pass1" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label"  for="val-confirm-password" style="margin-left: 58%;font-size:20px" >اعاده كلمه السر<span class="text-danger">*</label>
                                        <input id="pass" type="password" class="form-control" name ="Pass2" required>
                                    </div>
                    <div>

                                    </div>
                                    <?php                                        
                                        $cont3=Content::Button(60,"change");
                                    ?>
                                    <button type="submit" name="change" class="btn btn-primary btn-flat m-b-30 m-t-30"><?php echo $cont3 ?></button>
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
    <script>
    function validateForm() 
                { 
                    var password = document.forms["signupForm"]["Pass1"].value
                    var confirm_password = document.forms["signupForm"]["Pass2"].value;

                    if(password != confirm_password) {
                        alert("كلمه السر غير متشابهة");
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
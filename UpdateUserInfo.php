<?php
include_once "classUser.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: page-login.php');
}
if (isset($_GET['Logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: page-login.php");
}
            $servername = "localhost";
            $username = "root";
            $password = "";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $conn->query("SET NAMES 'utf8'");
            $email = $_SESSION['email']; 
            $mail = $_GET['mail']; 

            $sql = "SELECT * FROM alazharuni.user WHERE Email='$mail'";
            $resultQuery = $conn->query($sql);
            while($row = $resultQuery->fetch_assoc()){
                if($row==true)
                {
                    $ID=$row['ID'];
                    $FirstName=$row['FirstName'];
                                    $LastName=$row['MiddleName'];
                                    $FamilyName=$row['FamilyName'];
                                    $DateOfBirth=$row['DateOfBirth'];
                                    $Mobile=$row['Mobile'];
                                    $Home=$row['Home'];
                                    $UserP=$row["Password"];
                                    $NationalID=$row["NationalID"];
                }
            }
            if(isset($_POST['save']))
                    { 
                        $obj = new Users();
                        $obj->ID=$ID;
                        $obj->FirstName=$_POST['firstname'];
                        $obj->MiddleName=$_POST['lastname'];
                        $obj->FamilyName=$_POST['familyname'];
                        $obj->DateOfBirth=$_POST['dateofbirth'];
                        $obj->Mobile=$_POST['MobileNumber'];
                        $obj->Home=$_POST['Home'];
                        $obj->Address=$_POST['city'];
                        $obj->Email=$_POST['PersonalMail'];
                        $obj->Password=$_POST['Pass1'];
                        $obj->national_ID=$_POST['NationaID'];
        return Users::updateother($obj);
                    }
            
            $conn->close();

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
                                            
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    
                                    // Create connection
                                    $conn = new mysqli($servername, $username, $password);
                                    // Check connection
                                    if ($conn->connect_error) {
                                        die("Connection failed: " . $conn->connect_error);
                                    }

                                    $conn->query("SET NAMES 'utf8'");

                                    $email = $_SESSION['email']; 
                                    $sql = "SELECT * FROM alazharuni.user WHERE Email='$email'";
                                    $result = $conn->query($sql);
                                        while($row = $result->fetch_assoc()){
                                            if($row==true)
                                            {
                                                $Name=$row["FirstName"];
                                                $FName=$row["FamilyName"];
                                                $usertype_ID=$row['usertype_ID'];
                                                $sqltwo = "SELECT * FROM alazharuni.usertypelinks WHERE userType_ID='$usertype_ID'";
                                                $resulttwo = $conn->query($sqltwo);
                                                    while($rowtwo = $resulttwo->fetch_assoc()){
                                                        if($rowtwo==true)
                                                        {
                                                            $links_ID=$rowtwo['links_ID'];
                                                            $sqlt = "SELECT * FROM alazharuni.links WHERE ID='$links_ID'";
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
                                <h2 style='text-align:center; color: rgba(45, 65, 21)'> عدل بياناتك</h2>
                                <div class="form-validation">
                                <form class="form-valide" method="post" id="form" name="myForm">
                                    <div class="form-group">
                                        <label for="user" class="label" style="margin-left: 93%;font-size:20px;color:black;">  اسمك<span class="text-danger">*</label>
                                        <input id="user" type="text" name="firstname" class="form-control" style="direction:RTL;" value='<?php echo $FirstName; ?>' required  >
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="label" style="margin-left: 91%;font-size:20px;color:black;"> اسم الاب<span class="text-danger">*</label>
                                        <input id="user" type="text" name="lastname" class="form-control" style="direction:RTL;" value='<?php echo $LastName; ?>' required  >
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 90%;font-size:20px;color:black;" >اسم العائلة<span class="text-danger">*</label>
                                        <input id="user" type="text"  name="familyname" class="form-control" style="direction:RTL;" value='<?php echo $FamilyName; ?>' required  >
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >تاريخ الميلاد<span class="text-danger">*</label>
                                        <input type="date" name="dateofbirth" id="dateofbirth" style="margin-left: 84%" value='<?php echo $DateOfBirth; ?>' required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >رقم المحمول<span class="text-danger">*</label>
                                        <input type="text" name="MobileNumber" class="form-control" style="direction:RTL;" value='0<?php echo $Mobile; ?>' required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 90%;font-size:20px;color:black;" >رقم الهاتف<span class="text-danger">*</label>
                                        <input type="text" name="Home" class="form-control" style="direction:RTL;" value='<?php echo $Home; ?>' required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 89%;font-size:20px;color:black;" >الرقم القومى<span class="text-danger">*</label>
                                        <input type="text" name="NationaID" class="form-control" style="direction:RTL;"value='<?php echo $NationalID; ?>' required>
                                    </div>
                                    <div class="form-group">
                                        <label class="label" style="margin-left: 94%;font-size:20px;color:black;" >البلد<span class="text-danger">*</label>
                                        <select class="form-control" name="state" id="country" style="direction:RTL;"required>
                                        <option value=0 >اختر البلد</option>
                    <?php
                         
                            $servername = "localhost";
                            $name = "root";
                            $password = "";
                            
                            // Create connection
                            $conn = new mysqli($servername, $name, $password);
                            // Check connection
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }
                            $conn->query("SET NAMES 'utf8'");
                            $query="SELECT * FROM alazharuni.address WHERE Parent_ID=0";
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
                                    <div class="form-group">
                                        <label for="pass" class="label"  for="val-password" style="margin-left: 90%;font-size:20px;color:black;" > كلمه السر<span class="text-danger">*</label>
                                        <input id="pass" type="text" class="form-control"  style="direction:RTL;" value='<?php echo $UserP; ?>' name ="Pass1" required>
                                    </div>
                                    <button type="submit" name="save" class="btn btn-primary btn-flat m-b-30 m-t-30">تعديل</button>
                                    <div class="register-link m-t-15 text-center">
                                    </div>
                                </form>
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
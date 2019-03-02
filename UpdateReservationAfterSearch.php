<?php
include_once "classReservation.php";
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
if(isset($_POST['Submit']))
    {
        $sqltwo = "SELECT ID FROM alazharuni.room WHERE RoomNo=".$_POST['room']." AND BuildingNo=".$_POST['BuildingNo'];
                $resulttwo = $conn->query($sqltwo) or die($conn->error);
                while($rowtwo = $resulttwo->fetch_assoc()){
                    if($rowtwo==true)
                    {
                        $id=$rowtwo['ID'];
                        $obj = new ReservRooms();
                        $obj->Room_ID=$id;
                        $obj->Student_ID=$_GET['id'];                         ;
                        $obj->DateFrom=$_POST['datefrom'];
                        $obj->DateTo=$_POST['dateto'];
                    
                        return ReservRooms::update($obj);
                    }
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
                                <h2 style='text-align:center; color: rgba(45, 65, 21)'> تعديل حجز غرفة</h2>
                                <div class="form-validation">
                                <form class="form-valide" method="post" id="searchform" name="myForm">
                                
                                <div class="form-group">
                                    <label for="pass" class="label" for="val-email" style="margin-left: 93%;font-size:20px;color:black;">المبني<span class="text-danger">*</span></label>
									<select class="form-control" name="BuildingNo" id="BuildingNo" style="direction:RTL;" required>
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
                            $query="SELECT * FROM alazharuni.buildings ";
                            $resultQuery = $conn->query($query);
                            while($rowq = $resultQuery->fetch_assoc()){
                                if($rowq==true)
                                {
                                    $id=$rowq["ID"];
                                    $type=$rowq["Building"];
                                    echo '<option value="'.$id.'">'.$type.'</option>';
                                    
                                }
                            }

                        
                        $conn->close();
                    ?>
                </select>
									</div>
									<div class="form-group">
                                    <label for="pass" class="label" for="val-email" style="margin-left: 90%;font-size:20px;color:black;">رقم الغرفه<span class="text-danger">*</span></label>
                                    <select class="form-control" name="room" id="room" style="direction:RTL;" required>
                    
                    </select>
                    <script type="text/javascript">
                    $(document).ready(function(){
                        $('#BuildingNo').on('change',function(){
                            var BuildingNo = $(this).val();
                            if(BuildingNo){
                                $.ajax({
                                    type:'POST',
                                    url:'ajaxpro7.php',
                                    data:'BuildingNo='+BuildingNo,
                                    success:function(html){
                                        $('#room').html(html);
                                    }
                                }); }
                        });
                    });
                    </script>
									</div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 83%;font-size:20px;color:black;" >تاريخ بدأ الحجز<span class="text-danger">*</label>
                                        <input type="date" name="datefrom" id="datefrom" style="margin-left: 80%" style="direction:RTL;" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 83%;font-size:20px;color:black;" >تاريخ نهاية الحجز<span class="text-danger">*</label>
                                        <input type="date" name="dateto" id="dateto" style="margin-left: 80%" style="direction:RTL;" required>
                                    </div>
                                    <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">اضافة</button>
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
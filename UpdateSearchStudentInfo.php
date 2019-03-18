<?php
include_once "classUser.php";
include_once "classDatabase.php";

session_start();
if (!isset($_SESSION['email'])) {
    header('location: page-login.php');
}
if (isset($_GET['Logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: page-login.php");
}

$connection = new DB();
$conn = $connection->connect();
            $conn->query("SET NAMES 'utf8'");
            $email = $_SESSION['email']; 
                            if(isset($_POST['search'])){
                                header('location: UpdateStudentInfo.php?mail='.$_POST['mail']);
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
            $('.search-box input').keyup(function(){
                var inputVal = $(this).val();
                var resultDropdown = $(this).siblings(); //result
                if(inputVal.length){
                    $.get("backend-search1.php", {term: inputVal}).done(function(data){
                        resultDropdown.html(data); //set
                    });
                } else{
                    resultDropdown.empty();
                }
            });
            $(document).on("click", ".result p", function(){
                $(this).parents(".search-box").find('input').val($(this).html());
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
                <div class="form-validation">
                    <form class="form-valide" method="post" id="form" name="myForm">
                        <div class="form-group">
                            <br>
                            <h3 style='text-align:center; color: rgba(45, 65, 21)'> اكتب بريد المستخدم الالكتروني الذي تود تعديل بياناته</h3>
                            <br>
                            <form id="searchform" method="post" name="myForm">
                    <div class="search-box" >
                            <input id="user" type="text" name="mail" autocomplete='off' class="form-control"  >
                            <div class='result'></div>
                        </div>
                        <button type="submit" name="search" class="btn btn-primary btn-flat m-b-30 m-t-30">تعديل</button>
                        </form>
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
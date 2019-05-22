<?php
include_once "classDatabase.php";
include_once "classLink.php";
include_once "classThemes.php";

if(isset($_GET['settings']))
  {
    header('location: Settings.php');
  }
  $obj=new themes();
  themes::setdefaulttheme();
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
    <title>Al-Azhar Dormitory System</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="charts4php-free-latest/lib/js/chartphp.css">
		<script src="charts4php-free-latest/lib/js/jquery.min.js"></script>
		<script src="charts4php-free-latest/lib/js/chartphp.js"></script>
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
#hidden{
    display:none;
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
        <div class="header" style="<?php echo $obj->applyAll(); ?>;">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header" style="<?php echo $obj->applyAll(); ?>;">

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
                                    <li><button class="active" name="settings"><i class="fa fa-power-off"></i> اعدادات</button></li>

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
        <div class="left-sidebar"   style="<?php echo $obj->applyAll(); ?>;">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" style="<?php echo $obj->applyAll(); ?>;">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav"  style="<?php echo $obj->applyAll(); ?>;">
                    <ul id="sidebarnav"  style="<?php echo $obj->applyAll(); ?>;">
                    <li class="nav-devider"></li>
                        <li class="nav-label" style="font-size:150%; text-align:center; <?php echo $obj->applyAll();?>">مسئولياتك</li>                        <br>
                        <br>
                        <!--<li class="nav-label" style="font-size:150%; text-align:center; color: rgba(45, 65, 21);">مسئولياتك</li>-->
                        <?php
                        
                            $Resultheader=Link::headerPerm();
                            for ($i=0;$i<count($Resultheader);$i++)
                            {
                                echo '<li><a style="font-size:120%; text-align:center" href='.$Resultheader[$i]->PhysicalAddress.'>'.$Resultheader[$i]->FriendlyAddress.' </a></li>';
                            }
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
                                   


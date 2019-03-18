<?php
include_once "classPayment.php";
include_once "classPaymentOptions.php";
include_once "classDatabase.php";
include_once "classPaymentMethodOptions.php";
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
            $sql = "SELECT * FROM options WHERE IsDeleted=0";
            $resultQuery = $conn->query($sql);
            $count=0;
            while($row = $resultQuery->fetch_assoc())
            {
                if($row==true)
                {
                $count++;
                }
            }
            
            for($i=1;$i<=$count;$i++)
            {
                $PaymentOptionsObject[$i]= new Options();
            } 

            $sql1 = "SELECT * FROM options WHERE IsDeleted=0";
            $resultQuery1= $conn->query($sql1);
            $j=1;
            while($row1= $resultQuery1->fetch_assoc())
            {
                $PaymentOptionsObject[$j]->OptionsName=$row1['Name'];
                $PaymentOptionsObject[$j]->OptionsType=$row1['Type'];
                   $j++;
            }
            /////////////////////////////////////////
            $sqlunique = "SELECT DISTINCT Type FROM alazharuni.options WHERE IsDeleted=0";
            $resultunique = $conn->query($sqlunique);
            $countunique=0;
            while($rowunique = $resultunique->fetch_assoc())
            {
                if($rowunique==true)
                {
                $countunique++;
                }
            }
            
            for($i=1;$i<=$countunique;$i++)
            {
                $PaymentOptionsObjectunique[$i]= new Options();
            } 

            $sql1unique ="SELECT DISTINCT Type FROM alazharuni.options WHERE IsDeleted=0";
            $resultQuery1unique= $conn->query($sql1unique);
            $junique=1;
            while($rowunique2= $resultQuery1unique->fetch_assoc())
            {
             if($rowunique2['Type']!=" ")
             { 
                $PaymentOptionsObjectunique[$junique]->OptionsType=$rowunique2['Type'];
                $junique++;
             }
               
            }
            
            /////////////////////////////////////////

           

            $PendingArray=array();
            if(isset($_POST['AddingNewOptions']))
            {  
                
                if ($fh = fopen('Counter.txt', 'r')) {
                    while (!feof($fh)) {
                        $line = fgets($fh);
                        
                    }
                    fclose($fh);
                }
                if($line==0)
                {
                    $PaymentObject = new Pay();
                    $PaymentObject->PaymethodType=$_POST['PaymethodType'];
                    $paymentTemp;
                    Pay::addpaymethod($PaymentObject);
                    $sqlthree = "SELECT * FROM alazharuni.paymentmethod WHERE Type='$PaymentObject->PaymethodType' AND IsDeleted=0";
                    $resultthree = $conn->query($sqlthree);
                        while($rowthree = $resultthree->fetch_assoc())
                        {
                            if($rowthree==true)
                            { 
                              
                                $paymentTemp=$rowthree['ID'];
                        $fp1 = fopen('Counter.txt', 'w');
                        fwrite($fp1,$paymentTemp );
                        fclose($fp1);
    
                            }
                        }
                       
                }
                else
                {
                    $paymentTemp=$line;
                }

                        $NewOptionsObject = new Options();
                        $NewOptionsObject->OptionsName=$_POST['AddedPaymethodOption'];
                        $NewOptionsObject->OptionsType=$_POST['CurrentOptions2'];
                        Options::addOptions($NewOptionsObject);

                        $sqltwo = "SELECT * FROM alazharuni.options WHERE Name='$NewOptionsObject->OptionsName' AND IsDeleted=0";
                        $resulttwo = $conn->query($sqltwo);
                            while($rowtwo = $resulttwo->fetch_assoc()){
                                if($rowtwo==true)
                                { 
                                    $optionstemp=$rowtwo['ID'];

                                }
                            }
                         $LinkPaymentAndOptions= new LinkPaymentAndOptions();

                          $LinkPaymentAndOptions->Pay_ID=$paymentTemp;
                          $LinkPaymentAndOptions->Option_ID=$optionstemp;
                          LinkPaymentAndOptions::addpaymentmethodoption($LinkPaymentAndOptions);
                          
                           
            }
           
            if(isset($_POST['save']))
                    { 
                        
                        foreach ($_POST['CurrentOptions'] as $selectedOption)
                        {
                            
                            $LinkPaymentAndOptions= new LinkPaymentAndOptions();
                            $LinkPaymentAndOptions->Pay_ID=$paymentTemp;

                            $LinkPaymentAndOptions->Option_ID=$selectedOption;
                            LinkPaymentAndOptions::addpaymentmethodoption($LinkPaymentAndOptions);
                         
                        
                        }
                if ($fh = fopen('Counter.txt', 'r'))
                 {
                    while (!feof($fh)) 
                    {
                        $line = fgets($fh);   
                }
            }
                    fclose($fh);
                    if($line!=0)
                    {
                        $fp1 = fopen('Counter.txt', 'w');
                        fwrite($fp1,0 );
                        fclose($fp1);
                        header("Location:Pay.php");
                    }
                    else
                    {
                        $PaymentObject = new Pay();
                        $PaymentObject->PaymethodType=$_POST['PaymethodType'];
                        $paymentTemp;
                        Pay::addpaymethod($PaymentObject);
                        $sqlthree = "SELECT * FROM alazharuni.paymentmethod WHERE Type='$PaymentObject->PaymethodType' AND IsDeleted=0";
                        $resultthree = $conn->query($sqlthree);
                            while($rowthree = $resultthree->fetch_assoc())
                            {
                                if($rowthree==true)
                                { 
                                  
                                    $paymentTemp=$rowthree['ID'];
                                }
                            }
                            foreach ($_POST['CurrentOptions'] as $selectedOption)
                          {
                              
                              $LinkPaymentAndOptions= new LinkPaymentAndOptions();
                              $LinkPaymentAndOptions->Pay_ID=$paymentTemp;
  
                              $LinkPaymentAndOptions->Option_ID=$selectedOption;
                              LinkPaymentAndOptions::addpaymentmethodoption($LinkPaymentAndOptions);
                    }

                }  
                header("Location:AllPages.php");
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
                            
                                <h2 style='text-align:center; color: rgba(45, 65, 21)'> اضافه نوع جديد للدفع</h2>
                                <div class="form-validation">
                                <form class="form-valide" method="post" id="form" name="myForm">
                              
                                    <div   id="x1" class="C" >
                                        <label for="user" class="label" style="margin-left: 85%;font-size:20px;color:black;"> اسم الطريقه<span class="text-danger">*</label>
                                        <input id="x3" type="text" name="PaymethodType"    style="margin-left: 80%;"    >
                                    </div>
                                     
                                     <div id="x2">
                                        <label for="user" class="label" style="margin-left: 80%;font-size:20px;color:black;padding:10px; "> الطلبات لهذه الطريقه<span class="text-danger">*</label>
                                        <select name="CurrentOptions[]" style="margin-left: 80%" id="CurrentOptionsID" value="100"multiple>
                                      
                                        <?php
                                        for($c=1;$c<=$count;$c++)
                                        {
                                        echo '<option value="'.$c.'">'.$PaymentOptionsObject[$c]->OptionsName.'</option>';
                                        }
                                        
                                        ?>
                                         </select>
                                    </div>
                                     
                                          
                                        <input type="button" id="extraID"name="extra"    class="btn btn-primary btn-flat m-b-30 m-t-30" value="اضافه المزيد من الطلبات ">
                                       
                                       

                                        <div id="div_ctrl"  style="display: none;"  >
                                        <label for="user" class="label" style="margin-left: 85%;font-size:20px;color:black;padding:10px;">اسم الطلب<span class="text-danger">*</label>
                                        <input id="user" type="text" name="AddedPaymethodOption"  style="margin-left: 80%;    " >
                                        </div>
                                        
                                        <div id="div_ctrl2"  style="display: none;" >
                                        <label for="user" class="label" style="margin-left: 80%;font-size:20px;color:black;padding:10px;">اختار نوع الطلب<span class="text-danger">*</label>
                                        <select name="CurrentOptions2" id="CurrentOptions2ID" style="margin-left: 80%;width:170px;" >  
                                        <option value="0" selected disabled hidden  >    دوس علي السهم علشان تختار  </option>
                                      <?php
                                      for($k=1;$k<=$countunique;$k++)
                                      {
                                      echo '<option value="'.$PaymentOptionsObjectunique[$k]->OptionsType.'">'.$PaymentOptionsObjectunique[$k]->OptionsType.'</option>';
                                      }  
                                      ?> 
                                       </select> 
                                       </div>
                                       
                                       <input type="submit"   style="display: none;" id="AddingNewOptionsID"  name="AddingNewOptions" onclick="HidingTheForm()"   class="btn btn-primary btn-flat m-b-30 m-t-30"  value="اضافه ما تم كتباته   ">
                                      
                                       <button type="submit"id="saveID" name="save" class="btn btn-primary btn-flat m-b-30 m-t-30">اضافه</button>
                                    <div class="register-link m-t-15 text-center">
                                    </div>
                                </form> 
<script>
$("#extraID").click(function() {
$("#div_ctrl").show();
$("#div_ctrl2").show();
$("#AddingNewOptionsID").show();
$("#extraID").hide();
}); 

   
   
                        $("#saveID").unbind("click").bind("click", function()
                   {
                    var e = document.getElementById("CurrentOptions2ID");
var value = e.options[e.selectedIndex].value;
 
            if ($("#CurrentOptionsID").get(0).selectedIndex == -1)
			  {  
if(value==0)
              {
                alert("لازم تختار واحد من الاختيارات المتاحه");
                return false;
              }
            }
        });   



function HidingTheForm()
{ 
    $("x3").prop("readonly", true);
$("#div_ctrl").hide();
$("#div_ctrl2").hide();
$("#extraID").show();
$('#AddingNewOptionsID').hide();

}
 

</script>
 
                                     
                
       
                                     
                                   



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
<?php
include_once "classUser.php";
    
    if(isset($_POST['Submit']))
    {
        $obj = new Users();
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
        $obj->facultyID=$_POST['facultyID']; 
        $obj->GradeID=$_POST['GradeID']; 
        return Users::SignUp($obj);
        
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
                                <h2 style="text-align:center;">انشاء حساب</h2>
                                <div class="form-validation">
                                <form class="form-valide" method="post">
                                    <div class="form-group">
                                        <label for="user" class="label" style="margin-left: 80%;font-size:20px">  اسمك<span class="text-danger">*</label>
                                        <input id="user" type="text" name="firstname" class="form-control" style="direction:RTL;" required  >
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="label" style="margin-left: 70%;font-size:20px"> اسم الاب<span class="text-danger">*</label>
                                        <input id="user" type="text" name="lastname" class="form-control" style="direction:RTL;" required  >
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 66%;font-size:20px" >اسم العائلة<span class="text-danger">*</label>
                                        <input id="user" type="text"  name="familyname" class="form-control" style="direction:RTL;" required  >
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 60%;font-size:20px" >تاريخ الميلاد<span class="text-danger">*</label>
                                        <input type="date" name="dateofbirth" id="dateofbirth" style="margin-left: 40%" style="direction:RTL;" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 60%;font-size:20px" >رقم المحمول<span class="text-danger">*</label>
                                        <input type="text" name="MobileNumber" class="form-control" style="direction:RTL;" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 65%;font-size:20px" >رقم الهاتف<span class="text-danger">*</label>
                                        <input type="text" name="Home" class="form-control" style="direction:RTL;" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 65%;font-size:20px" >رقم القومى<span class="text-danger">*</label>
                                        <input type="text" name="NationaID" class="form-control" style="direction:RTL;" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label" style="margin-left: 65%;font-size:20px">التقدير<span class="text-danger">*</label>
                                        <select name="GradeID"  class="form-control" style="direction:RTL;"  required>
                                        <option value=0>اختر التقدير</option>
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
                                                 $sql="SELECT * FROM alazharuni.grades";
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
                                                 $sql="SELECT * FROM alazharuni.faculties";
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
                                        <input id="pass" type="email" name="PersonalMail" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label"  for="val-password" style="margin-left: 70%;font-size:20px" > كلمه السر<span class="text-danger">*</label>
                                        <input id="pass" type="password" class="form-control" name ="Pass1" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="label"  for="val-confirm-password" style="margin-left: 58%;font-size:20px" >اعاده كلمه السر<span class="text-danger">*</label>
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
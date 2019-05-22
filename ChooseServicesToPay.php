<?php
include_once "classRoom.php";
include_once "classDatabase.php";
include_once "classContent.php";

session_start();
if (!isset($_SESSION['email'])) {
    header('location: page-login.php');
}
if (isset($_GET['Logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: page-login.php");
}
$conn=DB::getInstance();
$mysql=$conn->getConnection();
$conn=mysqli_query($mysql,"SET NAMES 'utf8'");
$email = $_SESSION['email']; 
$sql4 = "SELECT * FROM user WHERE Email='$email' AND IsDeleted=0 ";    
            $resultQuery4 = mysqli_query($mysql,$sql4);
            while($row4= $resultQuery4->fetch_assoc())
            {
                if($row4==true)
                {
                    $IDTEST=$row4["ID"];
                }
            }
            $sql5 = "SELECT * FROM student WHERE Student_ID='$IDTEST' ";    
             
            $resultQuery5 = mysqli_query($mysql,$sql5);
            while($row5= $resultQuery5->fetch_assoc())
            {
                if($row5==true)
                {
                    $stdID=$row5['ID'];
                    $State_ID=$row5["State_ID"];
                    if($State_ID==2)
                    {
                        header("location:AllPages.php");
                        
                    }
                    
                } 
               


            }
            $sql6 = "SELECT * FROM reservation WHERE Student_ID='$stdID' ";    

            $resultQuery6 =  mysqli_query($mysql,$sql6);
            while($row6= $resultQuery6->fetch_assoc())
            {
                if($row6==true)
                {
                    $Reservation_ID=$row6["ID"];
                    /*if($State_ID==2)
                    {
                        header("location:AllPages.php");
                        
                    }*/
                    
                } 
            }
            $sql8 = "SELECT * FROM paymentmethodoptionsvalue WHERE IsDeleted=0 ";    
             
            $resultQuery8 =  mysqli_query($mysql,$sql8);
            while($row8= $resultQuery8->fetch_assoc())
            {
                if($row8==true)
                {
                    $res_ID=$row8['Reservation_ID'];
                    if($res_ID=$Reservation_ID)
                    {
                        header("location:AllPages.php");
                    }
                }
            }
            /*$sql8 = "SELECT * FROM paymentmethodoptionsvalue WHERE IsDeleted=0 ";    
             
            $resultQuery8 = $conn->query($sql8);
            while($row8= $resultQuery8->fetch_assoc())
            {
                if($row8==true)
                {
                    $Reservation_ID=$row8["Reservation_ID"];
                    $sqlQ="select * from reservation where ID=$Reservation_ID";
                    $resultQ3 = mysqli_query($conn,$sqlQ) or die(mysql_error());
                    while($rowQ2= $resultQ3->fetch_assoc())
                    {
                        if($rowQ2==true)
                        {
                            $stdid=$rowQ2['Student_ID'];
                                if($stdid==$IDTEST)
                                {
                                        header("location:AllPages.php");
                                    
                                } 
                        }
                    }
                    
                } 
               
            }*/
            if(isset($_POST['Submit']))
            {
                $checkarr=array();
                $conn=DB::getInstance();
                $mysql=$conn->getConnection();
                $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
                       $query="SELECT * FROM fees WHERE Fees_Type NOT LIKE '%وجب%' AND IsDeleted=0";
                       $resultQuery = mysqli_query($mysql,$query);
                       while($rowq = $resultQuery->fetch_assoc()){
                           if($rowq==true)
                           {
                               $id=$rowq["ID"];
                               $Fees_Type=$rowq["Fees_Type"];
                               $Fees_Number=$rowq["Fees_Number"];
                               if(isset($_POST[$id]))
                                {
                                    array_push($checkarr,$id);
                                }
                               
                           }
                       }

                   
                   //$conn->close();
                   $mealid=$_POST['pay'];
                   array_push($checkarr,$mealid);
                   $_SESSION['checkarr']=$checkarr;
                header("location:Pay.php");
            }
            

?>
        <?php include_once "header.php";?>

                <!-- Start Page Content -->
                <br>
                <?php
                         
                         $conn=DB::getInstance();
                         $mysql=$conn->getConnection();
                         $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
                            $query="SELECT * FROM fees WHERE Fees_Type='الغرفة' AND IsDeleted=0";
                            $resultQuery =mysqli_query($mysql,$query);
                            while($rowq = $resultQuery->fetch_assoc()){
                                if($rowq==true)
                                {
                                    $id=$rowq["ID"];
                                    $Fees_Type=$rowq["Fees_Type"];
                                    $Fees_Number=$rowq["Fees_Number"];
                                    echo "<h2 style='text-align:center; color: rgba(45, 65, 21)'> مصاريف الغرفة: $Fees_Number جنيه </h2>";
                                    
                                }
                            }

                        
                        //$conn->close();
                    ?>
                                <br>
                                <div class="form-validation">
                                <form class="form-valide" method="post" name="myForm">
                                <h3 style='text-align:center; color: rgba(45, 65, 21)'> اضافة خدامات علي الغرفة </h3>
                                <div class="form-group">
                                    <select class="form-control" name="pay" id="pay" style="direction:RTL;" required>
                                    <option value=0>اختر عدد الوجبات</option>
                    <?php
                         
                         $conn=DB::getInstance();
                         $mysql=$conn->getConnection();
                         $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
                            $query="SELECT * FROM fees WHERE Fees_Type LIKE '%وجب%' AND IsDeleted=0";
                            $resultQuery =mysqli_query($mysql,$query);
                            while($rowq = $resultQuery->fetch_assoc()){
                                if($rowq==true)
                                {
                                    $id=$rowq["ID"];
                                    $Fees_Type=$rowq["Fees_Type"];
                                    $Fees_Number=$rowq["Fees_Number"];
                                    echo '<option value="'.$id.'">'.$Fees_Type.', EGP'.$Fees_Number.'</option>';
                                    
                                }
                            }

                        
                       // $conn->close();
                    ?>
                </select>
                                    </div>
                                    <div class="form-group">
                    <?php
                         
                         $conn=DB::getInstance();
                         $mysql=$conn->getConnection();
                         $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
                            $query="SELECT * FROM fees WHERE Fees_Type NOT LIKE '%وجب%' AND Fees_Type!='الغرفة'  AND IsDeleted=0";
                            $resultQuery = mysqli_query($mysql,$query);
                            while($rowq = $resultQuery->fetch_assoc()){
                                if($rowq==true)
                                {
                                    $id=$rowq["ID"];
                                    $Fees_Type=$rowq["Fees_Type"];
                                    $Fees_Number=$rowq["Fees_Number"];
                                    echo '<input type="checkbox" name="'.$id.'" value="'.$Fees_Type.'" >'.$Fees_Type.', EGP'.$Fees_Number.'<br>';
                                    
                                }
                            }

                        
                       // $conn->close();
                    ?>
                                    </div>
                                    <?php                                       
                                        $cont3=Content::Button(24,"Submit");
                                    ?>
                                    <button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30"><?php echo $cont3; ?></button>
                                    </form>
                                   
                    </div>	
                    
                   <?php include_once "footer.php";
                   ?>
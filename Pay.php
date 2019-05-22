<?php
include_once "classRoom.php";
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
             
            $resultQuery5 =  mysqli_query($mysql,$sql5);
            while($row5= $resultQuery5->fetch_assoc())
            {
                if($row5==true)
                {
                    $State_ID=$row5["State_ID"];
                    if($State_ID==2)
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
            
            $checkarr=$_SESSION['checkarr'];
            /*for($i=0;$i<count($checkarr);$i++)
            {
                echo "<script> alert('".$checkarr[$i]."');</script>";  
            }*/
            if(isset($_POST['Submit']))
            {
                /*$conn=DB::getInstance();
                $mysql=$conn->getConnection();
                $conn=mysqli_query($mysql,"SET NAMES 'utf8'");*/
                $arr=$_SESSION['arr'];
                $arr2=$_SESSION['arr2'];
                $reservID=$_SESSION['reservID'];
                //$val=$_SESSION['val'];
                date_default_timezone_set("Africa/Cairo");
                $today = date("Y-m-d H:i:s");
                for ($i = 0; $i < count($arr); $i++) {  
                  $val=$_POST[$arr[$i]];
                  //echo "<script> alert('".$reservID."');</script>";  
                    DB::add("paymentmethodoptionsvalue","PaymethodOptions_ID,Value,Reservation_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","$arr2[$i],'$val',$reservID,'$today','$today',0");
                   

                }
                //$conn->close();
                header("location:AllPages.php");
            }
            

?>
        <?php include_once "header.php";?>

                <!-- Start Page Content -->
                <br>
                                <h2 style='text-align:center; color: rgba(45, 65, 21)'> دفع مصاريف الغرفة</h2>
                                <div class="form-validation">
                                <form class="form-valide" method="post" name="myForm">
                                <div class="form-group">
                                    <label for="pass" class="label" for="val-email" style="margin-left: 90%;font-size:20px;color:black;">طريقة الدفع<span class="text-danger">*</span></label>
                                
                                    <select class="form-control" name="pay" id="pay" style="direction:RTL;" required>
                                    <option value=0>اختر طريقة الدفع</option>
                    <?php
                         
                         $conn=DB::getInstance();
                        $mysql=$conn->getConnection();
                        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
                            $query="SELECT * FROM paymentmethod WHERE IsDeleted=0";
                            $resultQuery = mysqli_query($mysql,$query);
                            while($rowq = $resultQuery->fetch_assoc()){
                                if($rowq==true)
                                {
                                    $id=$rowq["ID"];
                                    $type=$rowq["Type"];
                                    echo '<option value="'.$id.'">'.$type.'</option>';
                                    
                                }
                            }

                        
                        //$conn->close();
                    ?>
                </select>
                                    </div>
                                    </form>
                                    <script>
                                        $(document).ready(function($) {
    $("#pay").change(function() {
        var search_id = $(this).val();
        $.ajax({
            url: "showselected.php",
            method: "post",
            data: {search_id:search_id},
            success: function(data){
                $("#ShowSelectedValueDiv").html(data);
            }
        })
    });
});

                                    </script>
                                    

                                    <form class="form-valide" method="post" id="form" name="myForm">
<div id="ShowSelectedValueDiv">
    
</div>
</form>
                    </div>	
                   <?php include_once "footer.php";?>
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
            $sql = "SELECT * FROM alazharuni.paymentmethod WHERE IsDeleted=0";
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
            $PaymentObject[$i]= new Pay();
        } 
        $sql1 = "SELECT * FROM alazharuni.paymentmethod WHERE IsDeleted=0";
        $resultQuery1= $conn->query($sql1);
        $j=1;
        while($row1= $resultQuery1->fetch_assoc())
        {
            $PaymentObject[$j]->PaymethodType=$row1['Type'];
            $PaymentObject[$j]->PaymethodID=$row1['ID'];
           
               $j++;
        }
        if(isset($_POST['save']))
        {
            $ChosenPayment=$_POST['CurrentOptions'];
             
 echo($ChosenPayment);

            $sql2 = "SELECT Option_ID FROM alazharuni.paymentmethodoptions WHERE Pay_ID='$ChosenPayment' AND IsDeleted=0";
            $resultQuery2= $conn->query($sql2);
            $OptionsCtr=0;
            $arr=array();
            while($row2= $resultQuery2->fetch_assoc())
            {
                $arr[$OptionsCtr]=$row2['Option_ID'];
                echo( $arr[$OptionsCtr]);
                $OptionsCtr++;
            }

            $conn->delete("alazharuni.paymentmethodoptions","Pay_ID='$ChosenPayment'");
          /*$sql3 = "DELETE FROM alazharuni.paymentmethodoptions WHERE Pay_ID='$ChosenPayment' AND IsDeleted=0";
            
            $resultQuery3= $conn->query($sql3);*/
            $conn->delete("alazharuni.paymentmethod","'ID='$ChosenPayment'");

            $sql4 = "DELETE  FROM alazharuni.paymentmethod WHERE ID='$ChosenPayment' AND IsDeleted=0";
            
            $resultQuery4= $conn->query($sql4);
            $DissmissArray=array();
 
            for($i=0;$i<count($arr);$i++)
            {
              
                $sql5 = "SELECT ID FROM alazharuni.paymentmethodoptions WHERE Option_ID='$arr[$i]' AND IsDeleted=0";
                 
                $resultQuery5= $conn->query($sql5);
                while($row5= $resultQuery5->fetch_assoc())
                {
                    if($row5==true)
                    {

                    }
                    else
                    {
                        $DissmissArray[$i]=$arr[$i];
                    }
                }
            }
            
            for($i=0;$i<count( $DissmissArray);$i++)
            {
              
                $sql5 = "DELETE  FROM alazharuni.options WHERE ID='$DissmissArray[$i]' AND IsDeleted=0";
            }

         
         
            

        }
            ?>





  <br>
                            
                            <h2 style='text-align:center; color: rgba(45, 65, 21)'> الغاء طريقه</h2>
                            <div class="form-validation">
                            <form class="form-valide" method="post" id="form" name="myForm">
                                 <div id="x2">
                                 <label for="user" class="label" style="margin-left: 70%;font-size:20px;color:black;">  اسم الطريقه اللي عايز تلغيها<span class="text-danger">*</label>
                                    <select name="CurrentOptions" style="margin-left: 70%;width:100px" id="CurrentOptionsID" required   >
                                  
                                    <?php
                                    for($c=1;$c<=$count;$c++)
                                    {
                                    echo '<option value="'.$PaymentObject[$c]->PaymethodID.'">'. $PaymentObject[$c]->PaymethodType.'</option>';
                                    }
                                    ?>
                                     </select>
                                </div>
                                 
                                      
                                    <input type="submit" id="save"name="save"    class="btn btn-primary btn-flat m-b-30 m-t-30" value="مسح ">
</form>











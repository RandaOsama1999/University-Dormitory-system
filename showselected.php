<?php
include_once "classDatabase.php";
$connection = new DB();
$conn = $connection->connect();
if(isset($_POST['search_id'])){
    session_start();
    $p= $_POST['search_id'];
 $conn->query("SET NAMES 'utf8'");
 $email = $_SESSION['email']; 
 date_default_timezone_set("Africa/Cairo");
 $today = date("Y-m-d");
 $National_ID=0;
 $arr=array();
 $arr2=array();
 $x=0;
 
 $sql3 = "SELECT * FROM user WHERE Email='$email' AND IsDeleted=0";    
            $resultQuery3 = $conn->query($sql3);
            while($row3= $resultQuery3->fetch_assoc())
            {
                if($row3==true)
                {
                    $National_ID=$row3["NationalID"];
                }
            }
    $sqlthree="SELECT * FROM paymentmethodoptions WHERE Pay_ID='$p' AND IsDeleted=0";
     $resulttt = $conn->query($sqlthree);
             while($rowww = $resulttt->fetch_assoc()){
                        if($rowww==true)
                            { 
                                $optionid=$rowww['Option_ID'];
                                $ID_Of_Payment_Method_Options=$rowww['ID'];
                                $sqlfour="SELECT * FROM options WHERE ID=$optionid AND IsDeleted=0";
                                $results=$conn->query($sqlfour);
                                while($rows=$results->fetch_assoc()){
                                    if($rows==true)
                                    {
                                        $name=$rows['Name'];
                                        $type=$rows['Type'];
                                        $sql2 = "SELECT * FROM paymentmethodoptionsvalue WHERE PaymethodOptions_ID='$ID_Of_Payment_Method_Options' AND IsDeleted=0";    
                                        $resultQuery2 = $conn->query($sql2);
                                        while($row2 = $resultQuery2->fetch_assoc())
                                        {
                                            if($row2==true)
                                            {
                                                $Value=$row2["Value"];
                                            }
                                        }
                                        if($type=="String")
                                        {
                                           echo '
                                           <div class="form-group">
                                           <label for="pass" class="label" for="val-email" style="margin-left: 85%;font-size:20px;color:black;">'.$name.'<span class="text-danger">*</span></label>
                                     <input class="form-control" type="text" style="direction:RTL;" name="'.$x.'"/></div>';
                                     array_push($arr,$x);
                                     $x++;
                                     array_push($arr2,$ID_Of_Payment_Method_Options);
                                        }
                                        if($type=="Integer")
                                        {
                                           echo '<div class="form-group">
                                           <label for="pass" class="label" for="val-email" style="margin-left: 90%;font-size:20px;color:black;"> '.$name.'<span class="text-danger">*</span></label>
                                           <input class="form-control" type="text" style="direction:RTL;" name="'.$x.'"/></div>';
                                           array_push($arr,$x);
                                     $x++;
                                     array_push($arr2,$ID_Of_Payment_Method_Options);
                                        }
                                        if($type=="Date")
                                        {
                                          echo '<div class="form-group">
                                          <label for="pass" class="label" style="margin-left: 85%;font-size:20px;color:black;" >  '.$name.'<span class="text-danger">*</label>
                                          <input class="form-control" type="month" style="direction:RTL; name="'.$x.'" required></div>';
                                          array_push($arr,$x);
                                     $x++;
                                     array_push($arr2,$ID_Of_Payment_Method_Options);
                                        }
                                        if($type=="StaticString")
                                        {
                                            echo"
                                            <div class='form-group'>
                                                <label for='user' class='label' style='margin-left: 89%;font-size:20px;color:black;'> " 
                                                .$name. "<span class='text-danger'>*</label>
                                                <text style='margin-left: 85%;font-size:20px;'> " 
                                                . $Value. "</text></div>";
                                        }
                                        if($type=="StaticInteger")
                                        {
                                            echo"
                                            <div class='form-group'>
                                                <label for='user' class='label' style='margin-left: 89%;font-size:20px;color:black;'> " 
                                                .$name. "<span class='text-danger'>*</label>
                                                <text style='margin-left: 85%;font-size:20px;'> " 
                                                . $National_ID. "</text></div>";
                                        }
                                        if($type=="StaticDate")
                                        {
                                            echo"
        
                                            <div class='form-group'>
                                                <label for='user' class='label' style='margin-left: 88%;font-size:20px;color:black;'> " 
                                                .$name. "<span class='text-danger'>*</label>
                                                <text style='margin-left: 85%;font-size:20px;'> " 
                                                .$today. "</text></div>";
                                        }
                                        if($type=="Button")
                                        {
                                            echo'<button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$name.'</button>';
                                        }
                                        if($type=="Print")
                                        {
                                            echo"<a titlt='print screen' alt 'print screen' onclick='window.print();'targer=_blank' 
                                                style='cursor:pointer; margin-left:40%;'>" 
                                                .$name. "</a>";
                                        }
                                        

                                    }
                                }
                            }
                        }
                        
                            /*
                            date_default_timezone_set("Africa/Cairo");
                            $today = date("Y-m-d H:i:s");
                            //for ($i = 0; $i < sizeof($arr); $i++) {
                              //  $val=$_POST[$arr[$i]];
                                //echo $val;
                                $connection->add("paymentmethodoptionsvalue","PaymethodOptions_ID,Value,CreatedDateTime,LastUpdatedDateTime,IsDeleted","1,1,'$today','$today',0");
        
                            //}

                            /*$sqlthree="SELECT * FROM paymentmethodoptions WHERE Pay_ID='$p' AND IsDeleted=0";
     $resulttt = $conn->query($sqlthree);
             while($rowww = $resulttt->fetch_assoc()){
                        if($rowww==true)
                            { 
                                $optionid=$rowww['Option_ID'];
                                $ID_Of_Payment_Method_Options=$rowww['ID'];
                                $sqlfour="SELECT * FROM options WHERE ID=$optionid AND IsDeleted=0";
                                $results=$conn->query($sqlfour);
                                while($rows=$results->fetch_assoc()){
                                    if($rows==true)
                                    {
                                        $name=$rows['Name'];
                                        $type=$rows['Type'];
                                        $sql2 = "SELECT * FROM paymentmethodoptionsvalue WHERE PaymethodOptions_ID='$ID_Of_Payment_Method_Options' AND IsDeleted=0";    
                                        $resultQuery2 = $conn->query($sql2);
                                        while($row2 = $resultQuery2->fetch_assoc())
                                        {
                                            if($row2==true)
                                            {
                                                $Value=$row2["Value"];
                                            }
                                        }
                                        if($type=="String")
                                        {
                                            $connection->add("paymentmethodoptionsvalue","PaymethodOptions_ID,Value,Reservation_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$ID_Of_Payment_Method_Options','$MiddleName','$FamilyName','$DateOfBirth','$Mobile','$Home','$national_ID','$Address','$Email','$Password','$usertype_ID','$today','$today',0");
        
                                        }
                                        if($type=="Integer")
                                        {
                                            $connection->add("paymentmethodoptionsvalue","FirstName,MiddleName,FamilyName,DateOfBirth,Mobile,Home,NationalID,Address_ID,Email,Password,usertype_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$FirstName','$MiddleName','$FamilyName','$DateOfBirth','$Mobile','$Home','$national_ID','$Address','$Email','$Password','$usertype_ID','$today','$today',0");
        
                                        }
                                        if($type=="Date")
                                        {
                                            $connection->add("paymentmethodoptionsvalue","FirstName,MiddleName,FamilyName,DateOfBirth,Mobile,Home,NationalID,Address_ID,Email,Password,usertype_ID,CreatedDateTime,LastUpdatedDateTime,IsDeleted","'$FirstName','$MiddleName','$FamilyName','$DateOfBirth','$Mobile','$Home','$national_ID','$Address','$Email','$Password','$usertype_ID','$today','$today',0");
        
                                        }
                                        

                                    }
                                }
                            }
                        }*/
                        
	
 }
?>
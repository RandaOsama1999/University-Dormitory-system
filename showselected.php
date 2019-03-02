<?php
if(isset($_POST['search_id'])){
    session_start();
    $p= $_POST['search_id'];
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
 date_default_timezone_set("Africa/Cairo");
 $today = date("Y-m-d");
 $National_ID=0;
 $sql3 = "SELECT * FROM alazharuni.user WHERE Email='$email' ";    
            $resultQuery3 = $conn->query($sql3);
            while($row3= $resultQuery3->fetch_assoc())
            {
                if($row3==true)
                {
                    $National_ID=$row3["NationalID"];
                }
            }
    $sqlthree="SELECT * FROM alazharuni.paymentmethodoptions WHERE Pay_ID='$p'";
     $resulttt = $conn->query($sqlthree);
             while($rowww = $resulttt->fetch_assoc()){
                        if($rowww==true)
                            { 
                                $optionid=$rowww['Option_ID'];
                                $ID_Of_Payment_Method_Options=$rowww['ID'];
                                $sqlfour="SELECT * FROM alazharuni.options WHERE ID=$optionid";
                                $results=$conn->query($sqlfour);
                                while($rows=$results->fetch_assoc()){
                                    if($rows==true)
                                    {
                                        $name=$rows['Name'];
                                        $type=$rows['Type'];
                                        $sql2 = "SELECT * FROM alazharuni.paymentmethodoptionsvalue WHERE PaymethodOptions_ID='$ID_Of_Payment_Method_Options' ";    
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
                                     <input class="form-control" type="text" style="direction:RTL;" name="snum"/></div>';
                                        }
                                        if($type=="Integer")
                                        {
                                           echo '<div class="form-group">
                                           <label for="pass" class="label" for="val-email" style="margin-left: 90%;font-size:20px;color:black;"> '.$name.'<span class="text-danger">*</span></label>
                                           <input class="form-control" type="text" style="direction:RTL;" name="snum"/></div>';
                                        }
                                        if($type=="Date")
                                        {
                                          echo '<div class="form-group">
                                          <label for="pass" class="label" style="margin-left: 85%;font-size:20px;color:black;" >  '.$name.'<span class="text-danger">*</label>
                                          <input class="form-control" type="month" style="direction:RTL;" required></div>';
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
                                            echo'
        
                                            
<button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$name.'</button>';
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
	
 }
?>
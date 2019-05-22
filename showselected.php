<?php
include_once "classDatabase.php";
$conn=DB::getInstance();
$mysql=$conn->getConnection();
if(isset($_POST['search_id'])){
    session_start();
    $p= $_POST['search_id'];
    $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
    $email = $_SESSION['email']; 
    date_default_timezone_set("Africa/Cairo");
    $today = date("Y-m-d");
    $National_ID=0;
    $arr=array();
    $arr2=array();
    $x=0;
    
    $sql3 = "SELECT * FROM user WHERE Email='$email' AND IsDeleted=0";    
    $resultQuery3 =mysqli_query($mysql,$sql3);
    while($row3= $resultQuery3->fetch_assoc())
    {
        if($row3==true)
        {
            $National_ID=$row3["NationalID"];
            $firstname=$row3["FirstName"];
            $middlename=$row3["MiddleName"];
            $familyname=$row3["FamilyName"];
            $id=$row3['ID'];
            $sql="select * from student where Student_ID=$id";
            $resultQuery3 = mysqli_query($mysql,$sql) or die(mysql_error());
            while($row2= $resultQuery3->fetch_assoc())
            {
                if($row2==true)
                {
                    $stdid=$row2['ID'];
                    $facultyID=$row2["Faculty_ID"];
                    $sqltwo = "SELECT * FROM faculties WHERE ID=".$facultyID."";
                    $resulttwo = mysqli_query($mysql,$sqltwo);
                    if ($resulttwo->num_rows > 0) {
                        while($rowtwo = $resulttwo->fetch_assoc()) {
                            $faculty=$rowtwo['Faculty'];
                        }
                    }
                    $sqlQ="select * from reservation where Student_ID=$stdid";
                    $resultQ3 = mysqli_query($mysql,$sqlQ) or die(mysql_error());
                    while($rowQ2= $resultQ3->fetch_assoc())
                    {
                        if($rowQ2==true)
                        {
                            $reservID=$rowQ2['ID'];
                        }
                    }
                    
                }
            }
            
        }
     }
    $_SESSION['reservID']= $reservID;

    $fullname=$firstname." ".$middlename." ".$familyname;
    
    $valuesstatic=array();
            
    $sqlthree="SELECT * FROM paymentmethodoptions WHERE Pay_ID='$p' AND IsDeleted=0";
    $resulttt = mysqli_query($mysql,$sqlthree);
    while($rowww = $resulttt->fetch_assoc()){
        if($rowww==true)
        { 
            $optionid=$rowww['Option_ID'];
            $ID_Of_Payment_Method_Options=$rowww['ID'];
            $sqlfour="SELECT * FROM options WHERE ID=$optionid AND IsDeleted=0";
            $results= mysqli_query($mysql,$sqlfour);
            while($rows=$results->fetch_assoc()){
                if($rows==true)
                {
                    $name=$rows['Name'];
                    $type=$rows['Type'];
                    $sql2 = "SELECT * FROM staticPayOptions WHERE Options_ID='$optionid'";    
                    $resultQuery2 = mysqli_query($mysql,$sql2);
                    while($row2 = $resultQuery2->fetch_assoc())
                    {
                        if($row2==true)
                        {
                            $Value=$row2["Value"];
                            array_push($valuesstatic,$Value);
                        }
                    }
                    if($type==15)
                    {
                        echo '<div class="form-group">
                        <label for="pass" class="label" for="val-email" style="margin-left: 85%;font-size:20px;color:black;">'.$name.'<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" style="direction:RTL;"  name="'.$x.'"/></div>';
                        array_push($arr,$x);
                        $x++;
                        array_push($arr2,$ID_Of_Payment_Method_Options);
                    }
                    if($type==5)
                    {
                        echo '<div class="form-group">
                        <label for="pass" class="label" for="val-email" style="margin-left: 90%;font-size:20px;color:black;"> '.$name.'<span class="text-danger">*</span></label>
                        ';
                        if($name=="CVV")
                        {
                            echo ' <input class="form-control" type="text" style="direction:RTL;" pattern="[0-9]{3}" title="ادخل ال3 ارقام" name="'.$x.'"/></div>';
                        }
                        else{
                           echo ' <input class="form-control" type="text" style="direction:RTL;" pattern="[0-9]{16}" title="ادخل ال16 رقم" name="'.$x.'"/></div>';
                        }
                        array_push($arr,$x);
                        $x++;
                        array_push($arr2,$ID_Of_Payment_Method_Options);
                    }
                    if($type==4)
                    {
                        echo '<div class="form-group">
                        <label for="pass" class="label" for="val-email" style="margin-left: 85%;font-size:20px;color:black;"> '.$name.'<span class="text-danger">*</span></label>
                        <input class="form-control" type="month" style="direction:RTL;"  name="'.$x.'"/></div>';
                        array_push($arr,$x);
                        $x++;
                        array_push($arr2,$ID_Of_Payment_Method_Options);
                    }
                    if($type==16)
                    {
                        echo"<div class='form-group'>
                        <label for='user' class='label' style='margin-left: 89%;font-size:20px;color:black;'> " 
                        .$name. "<span class='text-danger'>*</label>
                        <text style='margin-left: 85%;font-size:20px;'> ". $Value. "</text></div>";
                    }
                    if($type==17)
                    {
                        echo"<div class='form-group'>
                        <label for='user' class='label' style='margin-left: 89%;font-size:20px;color:black;'> " 
                        .$name. "<span class='text-danger'>*</label>
                        <text style='margin-left: 85%;font-size:20px;'> ". $National_ID. "</text></div>";
                    }
                    if($type==9)
                    {
                        echo"<div class='form-group'>
                        <label for='user' class='label' style='margin-left: 88%;font-size:20px;color:black;'> " 
                        .$name. "<span class='text-danger'>*</label>
                        <text style='margin-left: 85%;font-size:20px;'> ".$today. "</text></div>";
                    }
                    if($type==12)
                    {
                        echo'<button type="submit" name="Submit" class="btn btn-primary btn-flat m-b-30 m-t-30">'.$name.'</button>';
                    }
                    if($type==14)
                    {
                        if($p==1)
                        {
                            echo"<a titlt='print screen' alt 'print screen' onclick='print();' 
                            style='cursor:pointer; margin-left:40%;'>" .$name. "</a>";
                            echo '<script>function print() {window.open("http://localhost/SE/TCPDFreciept.php")}</script>';
                        }
                        else if($p==4)
                        {
                            echo"<a titlt='print screen' alt 'print screen' onclick='print();' 
                            style='cursor:pointer; margin-left:40%;'>" .$name. "</a>";
                            echo '<script>function print() {window.open("http://localhost/SE/TCPDFreciept2.php")}</script>';
                        }
                    }
                    if($type==2)
                    {
                        echo '<div class="form-group">
                        <label for="pass" class="label" for="val-email" style="margin-left: 85%;font-size:20px;color:black;"> '.$name.'<span class="text-danger">*</span></label>
                        <input class="form-control" type="date" style="direction:RTL;" name="'.$x.'"/></div>';
                        array_push($arr,$x);
                        $x++;
                        array_push($arr2,$ID_Of_Payment_Method_Options);
                    }
                    if($type==3)
                    {
                        echo '<div class="form-group">
                        <label for="pass" class="label" for="val-email" style="margin-left: 85%;font-size:20px;color:black;"> '.$name.'<span class="text-danger">*</span></label>
                        <input class="form-control" type="email" style="direction:RTL;" name="'.$x.'"/></div>';
                        array_push($arr,$x);
                        $x++;
                        array_push($arr2,$ID_Of_Payment_Method_Options);
                    }
                    if($type==6)
                    {
                        echo '<div class="form-group">
                        <label for="pass" class="label" for="val-email" style="margin-left: 85%;font-size:20px;color:black;"> '.$name.'<span class="text-danger">*</span></label>
                        <input class="form-control" type="password" style="direction:RTL;" name="'.$x.'"/></div>';
                        array_push($arr,$x);
                        $x++;
                        array_push($arr2,$ID_Of_Payment_Method_Options);
                    }
                    if($type==8)
                    {
                        echo '<div class="form-group">
                        <label for="pass" class="label" for="val-email" style="margin-left: 85%;font-size:20px;color:black;"> '.$name.'<span class="text-danger">*</span></label>
                        <input class="form-control" type="text" style="direction:RTL;" name="'.$x.'"/></div>';
                        array_push($arr,$x);
                        $x++;
                        array_push($arr2,$ID_Of_Payment_Method_Options);
                    }
                    if($type==10)
                    {
                        echo '<div class="form-group">
                        <label for="pass" class="label" for="val-email" style="margin-left: 85%;font-size:20px;color:black;"> '.$name.'<span class="text-danger">*</span></label>
                        <input class="form-control" type="time" style="direction:RTL;" name="'.$x.'"/></div>';
                        array_push($arr,$x);
                        $x++;
                        array_push($arr2,$ID_Of_Payment_Method_Options);
                    }
                    if($type==11)
                    {
                        echo '<div class="form-group">
                        <label for="pass" class="label" for="val-email" style="margin-left: 85%;font-size:20px;color:black;"> '.$name.'<span class="text-danger">*</span></label>
                        <input class="form-control" type="url" style="direction:RTL;" name="'.$x.'"/></div>';
                        array_push($arr,$x);
                        $x++;
                        array_push($arr2,$ID_Of_Payment_Method_Options);
                    }
                                        

                }
            }
        }
    }
    $_SESSION['fullname']=$fullname;
    $_SESSION['National_ID']=$National_ID;
    $_SESSION['faculty']=$faculty;
    $_SESSION['valuesstatic']=$valuesstatic;
    $_SESSION['arr']=$arr;
    $_SESSION['arr2']=$arr2;
 }
?>
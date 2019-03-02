<?php

class Users
{

    public  $ID;
    public  $FirstName;
    public  $MiddleName;
    public  $FamilyName;
    public  $DateOfBirth;
    public  $Mobile;
    public  $Home;
    public  $Address;
    public  $Email;
    public  $Password;
    public  $usertype_ID;
    public  $national_ID;
    public  $facultyID;
    PUBLIC  $GradeID;

    public function __construct() {
       
        
    }

    /*public static function read()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alazharuni";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $conn->query("SET NAMES 'utf8'");
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);
        echo "<br><br><br><br><br><br><br><h1 style='color: rgba(196, 90, 143, 0.836); text-align: center;'>All Users</h1><br><table align='center'>
        <tr>
        <th>Firstname</th>
        <th>MiddleName</th>
        <th>FamilyName</th>
        <th>DateOfBirth</th>
        <th>Gender</th>
        <th>Mobile</th>
        <th>Home</th>
        <th>City</th>
        <th>Country</th>
        <th>Email</th>
        <th>Password</th>
        <th>User Type</th>
        </tr>";
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                        echo "<td>" . $row['FirstName'] . "</td>";
                        echo "<td>" . $row['MiddleName'] . "</td>";
                        echo "<td>" . $row['FamilyName'] . "</td>";
                        echo "<td>" . $row['DateOfBirth'] . "</td>";
                        echo "<td>" . $row['Gender'] . "</td>";
                        echo "<td>0" . $row['Mobile'] . "</td>";
                        echo "<td>&nbsp" . $row['Home'] . "</td>";
                        $Address=$row['Address_ID'];
                        $sqltwo = "SELECT * FROM address WHERE ID=$Address";
                        $resulttwo = $conn->query($sqltwo);
                        if ($resulttwo->num_rows > 0) {
                            while($rowtwo = $resulttwo->fetch_assoc()) {
                                $Parent_ID=$rowtwo['Parent_ID'];
                                if($Parent_ID>0)
                                {
                                    echo "<td>&nbsp" . $rowtwo['Name'] . "</td>";
                                    $sqlt = "SELECT * FROM address WHERE ID=$Parent_ID";
                                    $resultt = $conn->query($sqlt);
                                    if ($resultt->num_rows > 0) {
                                        while($rowt = $resultt->fetch_assoc()) {
                                            $Parent_ID2=$rowt['Parent_ID'];
                                            if($Parent_ID2==0)
                                            {
                                                echo "<td>&nbsp" . $rowt['Name'] . "</td>";
                                                
                                            }
                                        }
                                    }
                                }
                            }
                        }
                        echo "<td>&nbsp" . $row['Email'] . "</td>";
                        echo "<td>" . $row['Password'] . "</td>";
                $usertypeID=$row['usertype_ID'];
                $sqltwo = "SELECT * FROM usertype WHERE ID=$usertypeID";
                $resulttwo = $conn->query($sqltwo);
                if ($resulttwo->num_rows > 0) {
                    while($rowtwo = $resulttwo->fetch_assoc()) {
                        echo "<td>" . $rowtwo['Type'] . "</td>";
                        echo "</tr>";
                    }
                }
            }
        }
        echo "</table>";
        $conn->close();

    }*/
    public static function create(Users $user)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alazharuni";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        //'$user->Address'
        $conn->query("SET NAMES 'utf8'");
        $mysql="INSERT INTO user (FirstName,MiddleName,FamilyName,DateOfBirth,Mobile, Home,Address_ID,Email,Password,usertype_ID,NationalID) 
        VALUES ('$user->FirstName','$user->MiddleName','$user->FamilyName','$user->DateOfBirth','$user->Mobile',
        '$user->Home','$user->Address','$user->Email','$user->Password','$user->usertype_ID','$user->national_ID')";
        mysqli_query($conn,$mysql);

        $conn->close();
        header("Location:AddUser.php");

    }
    public static function SignUp(Users $user)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alazharuni";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $conn->query("SET NAMES 'utf8'");
        $mysql="INSERT INTO user (FirstName,MiddleName,FamilyName,DateOfBirth,Mobile,Home,NationalID,Address_ID,Email,Password,usertype_ID) 
                VALUES ('$user->FirstName','$user->MiddleName','$user->FamilyName','$user->DateOfBirth','$user->Mobile',
                '$user->Home','$user->national_ID','$user->Address','$user->Email','$user->Password',1)";
                mysqli_query($conn,$mysql);
        $id=mysqli_insert_id($conn);
        $sql="INSERT INTO student (Student_ID,Faculty_ID,Grade_ID,State_ID) 
        VALUES ($id,'$user->facultyID','$user->GradeID',2)";
        mysqli_query($conn,$sql);
        $conn->close();
        header("Location:page-register.php");

    }
    public static function delete(Users $user)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alazharuni";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $conn->query("SET NAMES 'utf8'");
        $sql="SELECT * FROM user WHERE Email='$user->Email'";
                $result2=$conn->query($sql);
                while($row = $result2->fetch_assoc()){
                    if($row==true)
                    {
                        $ID=$row['ID'];
                        $msql="DELETE FROM student WHERE Student_ID='$ID'";
                        $resultm=$conn->query($msql);
                    }
                }
                $mysql="DELETE FROM user WHERE Email='$user->Email'";
                $result=$conn->query($mysql);
                
        $conn->close();
        header('location: DeleteUser.php');

    }
    public static function update(Users $user)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alazharuni";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $conn->query("SET NAMES 'utf8'");
        $mysql="UPDATE user SET FirstName='$user->FirstName' ,MiddleName='$user->MiddleName', 
        FamilyName='$user->FamilyName', DateOfBirth='$user->DateOfBirth',Mobile='$user->Mobile', 
        Home='$user->Home',Address_ID='$user->Address',Password='$user->Password', NationalID='$user->national_ID' WHERE ID='$user->ID'";
        mysqli_query($conn,$mysql);

        /*$sql="UPDATE student SET Faculty_ID='$user->facultyID',Grade_ID='$user->GradeID' WHERE Student_ID='$user->ID'";
        mysqli_query($conn,$sql);*/
        $conn->close();
        header("Location:AllPages.php");

    }
    public static function updateother(Users $user)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "alazharuni";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $conn->query("SET NAMES 'utf8'");
        $mysql="UPDATE user SET FirstName='$user->FirstName' ,MiddleName='$user->MiddleName', 
        FamilyName='$user->FamilyName', DateOfBirth='$user->DateOfBirth',Mobile='$user->Mobile', 
        Home='$user->Home',Address_ID='$user->Address',Password='$user->Password',NationalID='$user->national_ID' WHERE ID='$user->ID'";
        mysqli_query($conn,$mysql);
        $conn->close();
        header("Location:UpdateSearchUserInfo.php");

    }

}
?>
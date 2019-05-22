<?php
include_once "classDatabase.php";
$conn=DB::getInstance();
$mysql=$conn->getConnection();
$conn=mysqli_query($mysql,"SET NAMES 'utf8'");
$links_ID=array();
$links_ID2=array();
$sql = "SELECT * FROM usertypelinks WHERE userType_ID =".$_POST['userTypeid']." AND IsDeleted=0"; 
$result = mysqli_query($mysql,$sql);

   while($row = $result->fetch_assoc()){
        if($row==true)
        {
            array_push($links_ID, $row['links_ID']);
        }
    }
    $sqltw = "SELECT * FROM usertypelinks WHERE userType_ID !=".$_POST['userTypeid']." AND IsDeleted=0"; 
    $resulttw = mysqli_query($mysql,$sqltw);

        while($rowtw = $resulttw->fetch_assoc()){
            if($rowtw==true)
            {
                array_push($links_ID2, $rowtw['links_ID']);
            }
        }
        $result=array_diff($links_ID2,$links_ID);
        foreach ($result as $arr) {
            /*for($j=0;$j<sizeof($links_ID);$j++)
            {
                if($links_ID2[$i] != $links_ID[$j]){*/
                $sqlt = "SELECT * FROM links WHERE ID =".$arr." AND IsDeleted=0"; 
                $resultt = mysqli_query($mysql,$sqlt); 
                
                    while($rowt = $resultt->fetch_assoc()){
                        if($rowt==true)
                        {
                            
                            echo '<option value="'.$arr.'">'.$rowt['FriendlyAddress'].'</option>';
                        }
                    }
               /* }

            }*/
        }
        

?>
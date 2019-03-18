<?php

include_once("../../config.php");
include_once(CHARTPHP_LIB_PATH . "/inc/chartphp_dist.php");

$p = new chartphp();
// data array is populated from example data file
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
			$line_chart_data=array();
			$faculties=array();
			$facultiesN=array();
			$grades=array();
			$gradesN=array();

$sql="SELECT * FROM alazharuni.faculties";
$resultQuery = $conn->query($sql);
while($row = $resultQuery->fetch_assoc())
{
   if($row==true)
	 {
	   $id2=$row["ID"];
	   $faculty=$row["Faculty"];
			array_push($faculties,$id2);
			array_push($facultiesN,$faculty);
			array_push($p->series_label,$faculty);
	 
			
	 }

}
$sql2="SELECT * FROM alazharuni.grades";
$resultQuery2 = $conn->query($sql2);
while($row2 = $resultQuery2->fetch_assoc())
{
   if($row2==true)
	 {
		$id=$row2["ID"];
		$grade=$row2["Grade"];
			array_push($grades,$id);
			array_push($gradesN,$grade);
	 }

}

for ($x = 0; $x < sizeof($faculties); $x++) {
	$arr=array();
	for ($i = 0; $i < sizeof($grades); $i++) {
  
		$sql3="SELECT COUNT(ID) as coun FROM alazharuni.student WHERE Grade_ID=$grades[$i] AND Faculty_ID=$faculties[$x]";
		$resultQuery3 = $conn->query($sql3) or die($conn->error);
		while($row3 = $resultQuery3->fetch_assoc())
		{
		if($row3==true)
			{
				$num=$row3['coun'];

				
					array_push($arr,
						array($gradesN[$i],$num));
					
			}
			else{
				array_push($arr,
						array($gradesN[$i],0));
			}
		}
	}
	array_push($line_chart_data,$arr);
	

}

	$conn->close();

$p->data = $line_chart_data;
$p->chart_type = "line";

// Common Options
$p->title = "Line Chart";
$p->xlabel = "التقدير";
$p->ylabel = "عدد الطالبات";


$out = $p->render('c1');
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="../../lib/js/chartphp.css">
		<script src="../../lib/js/jquery.min.js"></script>
		<script src="../../lib/js/chartphp.js"></script>
	</head>
	<body>
		<div>
			<?php echo $out; ?>
		</div>
	</body>
</html>
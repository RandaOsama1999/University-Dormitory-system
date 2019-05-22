<?php
include_once "classDatabase.php";
class Grade
{
    public  $ID;
    public  $Grade;

    public function __construct() {
    }
    public static function ViewDropdown()
    {
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql="SELECT * FROM grades";
		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($DataSet))
		{
            $MyObject= new Grade();
            $MyObject->ID=$row["ID"];
            $MyObject->Grade=$row["Grade"];
			$Result[$i]=$MyObject;
			$i++;
		}
		return $Result;
        //$conn->close();
    }
}
?>
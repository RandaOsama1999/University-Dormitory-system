<?php
include_once "classDatabase.php";
class Building
{
    public  $ID;
    public  $Building;

    public function __construct() {
    }
    public static function ViewDropdown()
    {
        $conn=DB::getInstance();
$mysql=$conn->getConnection();
$conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql = "SELECT * FROM buildings";
		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($DataSet))
		{
            $MyObject= new Building();
            $MyObject->ID=$row["ID"];
            $MyObject->Building=$row["Building"];
			$Result[$i]=$MyObject;
			$i++;
		}
		return $Result;
        //$conn->close();
    }
}
?>
<?php
include_once "classDatabase.php";
class Types
{

    public  $TypesID;
    public  $Type;
    
 

    function __construct($id)
	{
        $conn=DB::getInstance();
		$mysql=$conn->getConnection();
		$conn=mysqli_query($mysql,"SET NAMES 'utf8'");

		if ($id !="")
		{	

			$sql="select * from types where ID=$id";
			 
			$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
			if ($row = mysqli_fetch_array($DataSet))
			{ 
				$this->Type=$row["Type"];
				$this->TypesID=$id; 
			}
		}
	}
	public static function SelectAll()
	{
        $conn=DB::getInstance();
		$mysql=$conn->getConnection();
		$conn=mysqli_query($mysql,"SET NAMES 'utf8'");

		$sql="select * from types ";
		$DataSet = mysqli_query($mysql,$sql) or die(mysql_error());
		$i=0;
		$Result;
		while ($row = mysqli_fetch_array($DataSet))
		{
			$MyObj= new Types($row["ID"]);
            $Result[$i]=$MyObj;    
			$i++;
		}
		return $Result;
		
	}

 

}
?>
<?php
include_once "classDatabase.php";
include_once "DormFees.php"; 
include_once "RoomExtraDecorations.php"; 
class extraservices extends roomdecorations
{
   
    public $Name="خدامات اضافية";
    
    public function __construct(dormfees $dormfees) 
    {
        $this->dormfees = $dormfees;
    }
    
    public function name(){
        return $this->dormfees->name().", ".$this->Name;
    }
    public function fees(){
        //$obj=new roomfees();
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $sql="SELECT Fees_Number from fees WHERE Fees_Type= '$this->Name' AND IsDeleted=0";
        $result = mysqli_query($mysql,$sql);
        while($row=$result->fetch_assoc())
            {
                if($row==true)
                { 
                    //$ID=$row["ID"]; 
                    $FeesNumber=$row["Fees_Number"];

                    //echo "<script> alert('".$FeesNumber."');</script>"; 
                    return ($FeesNumber+$this->dormfees->fees());
                }
            }
    }
    
}
?>
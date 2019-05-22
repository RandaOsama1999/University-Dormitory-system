<?php
require_once 'classFeesModel.php';
require_once 'classFeesView.php';
class FeesController{
    public static function AddFee()
    {
        FeesView::AddFee();
        if(isset($_POST['Submit']))
        {
            $obj = new Fees();
            $obj->Fees_Type=$_POST['service'];
            $obj->Fees_Number=$_POST['price'];
        
            return Fees::create($obj);
            
        }
    }
    public static function UpdateFee()
    {
        FeesView::UpdateFee();
        if(isset($_POST['Submit']))
        {
            $obj = new Fees();
            $obj->ID=$_POST['service'];
            $obj->Fees_Number=$_POST['price'];
           
            return Fees::update($obj);
            
        }
    }
    public static function DeleteFee()
    {
        FeesView::DeleteFee();
        if(isset($_POST['Submit']))
    {
        $obj = new Fees();
        $obj->ID=$_POST['service'];
       
        return Fees::delete($obj);
        
    }
    }
    public static function ViewFees()
    {
        $Result=Fees::ViewAllFees();
        FeesView::ShowAllFees($Result);
    }
}

?>
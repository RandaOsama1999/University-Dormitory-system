<?php
require_once 'MaterialAvailableView.php';
require_once 'classMaterialAvailable.php';
require_once 'classOrderedMaterial.php';

include_once("charts4php-free-latest/config.php");
include_once(CHARTPHP_LIB_PATH . "/inc/chartphp_dist.php");
 
class MaterialAvailableController
{ 
    public static function MakeReq()
    { 
        MaterialAvailableView::MakeRequest();
        if(isset($_POST['save']))
        {   
        
            
            $x=$_COOKIE['myJavascriptVar'];
            if (strlen($x)==3)
            {
                $quantity = substr($x, -1);
            }
            else
            {
                $quantity = substr($x, -2);

            }
            
            for($i=0;$i<1;$i++)
            {
                
            $OrderedMaterial= new OrderedMaterial();
            $OrderedMaterial->MaterialID=$x[$i]+1;
            $OrderedMaterial->QuantityNeeded=$quantity;
            OrderedMaterial::add($OrderedMaterial);
            }
            echo '<script type="text/javascript">';
            echo 'window.location.href="OrderMaterial.php";';
            echo '</script>';
        }
        
    } 
    public static function AddNew()
    { 
        MaterialAvailableView::AddNewMaterial();
        if(isset($_POST['Add']))
        {
        
            $MaterialAvailable= new MaterialAvailable();
            $MaterialAvailable->Name=$_POST['Name'];
            $MaterialAvailable->Quantity=$_POST['Quantity'];
            MaterialAvailable::add($MaterialAvailable);
        }
        
    } 
    public static function Update()
    { 
        MaterialAvailableView::UpdateQuantity();
        if(isset($_POST['Update']))
        {
           
            $MaterialAvailable= new MaterialAvailable();
            $MaterialAvailable->Name=$_POST['CurrentOptions2'];
            $MaterialAvailable->Quantity=$_POST['QuantityUpdate'];
            MaterialAvailable::Update($MaterialAvailable);
            header("location: UpdateQuantityEXE.php");
        }
        
    } 
    public static function Delete()
    { 
        MaterialAvailableView::Delete();
        if(isset($_POST['Delete']))
        {
           echo($_POST['CurrentOptions2']);
            $MaterialAvailable= new MaterialAvailable();
            $MaterialAvailable->ID=$_POST['CurrentOptions2'];
            MaterialAvailable::Delete($MaterialAvailable);
            header("location: DeleteFoodEXE.php");
        }
        
    } 
    public static function viewReport()
    {
        $out=MaterialAvailable::viewReport();
        MaterialAvailableView::viewReport($out);
    } 
}

 
?>
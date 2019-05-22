<?php
require_once 'FoodAvailableView.php';
require_once 'classFoodAvailable.php';
require_once 'classOrderedFood.php';
 
include_once("charts4php-free-latest/config.php");
include_once(CHARTPHP_LIB_PATH . "/inc/chartphp_dist.php");
class FoodAvailableController
{ 
    public static function MakeReq()
    { 
        FoodAvailableView::MakeRequest();
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
                
            $OrderedFood= new OrderedFood();
            $OrderedFood->FoodID=$x[$i]+1;
            $OrderedFood->QuantityNeeded=$quantity;
            OrderedFood::add($OrderedFood);
            }
            echo '<script type="text/javascript">';
            echo 'window.location.href="OrderFoodEXE.php";';
            echo '</script>';
        }
        
    } 
    public static function AddNew()
    { 
        FoodAvailableView::AddNewFood();
        if(isset($_POST['Add']))
        {

            $FoodAvailable= new FoodAvailable();
            $FoodAvailable->Name=$_POST['Name'];
            $FoodAvailable->Quantity=$_POST['Quantity'];
            FoodAvailable::add($FoodAvailable);
        }
        
    } 
    public static function Update()
    { 
        FoodAvailableView::UpdateQuantity();
        if(isset($_POST['Update']))
        {
        
            $FoodAvailable= new FoodAvailable();
            $FoodAvailable->Name=$_POST['CurrentOptions2'];
            $FoodAvailable->Quantity=$_POST['QuantityUpdate'];
            FoodAvailable::Update($FoodAvailable);
            echo '<script type="text/javascript">';
            echo 'window.location.href="UpdateQuantityEXE.php";';
            echo '</script>';
        }
        
    } 
    public static function Delete()
    { 
        FoodAvailableView::Delete();
        if(isset($_POST['Delete']))
        {
           echo($_POST['CurrentOptions2']);
            $FoodAvailable= new FoodAvailable();
            $FoodAvailable->Name=$_POST['CurrentOptions2'];
            FoodAvailable::Delete($FoodAvailable);
            echo '<script type="text/javascript">';
            echo 'window.location.href="DeleteFoodEXE.php";';
            echo '</script>';
        }
        
    }
    public static function viewReport()
    {
        $out=FoodAvailable::viewReport();
        FoodAvailableView::viewReport($out);
    } 
}

 



?>
<?php
require_once 'OrderedFoodView.php';
require_once 'classFoodAvailable.php';
require_once 'classOrderedFood.php';
 
class OrderedFoodController
{ 
    public static function SelectOrder()
    { 
        OrderedFoodView::SelectAll();
    } 
     
}
if(isset($_POST['save']))
{   
   
    
     $x=$_POST['CurrentOptions2'];
     $object=new FoodAvailable();
     $object->Name=$x;
     $Result=FoodAvailable::SelectQuantity($object);//Quantity 
     $Result2=OrderedFood::SelectQuantityNeeded($object);//QuantityNeeded
     if($Result->Quantity-$Result2->QuantityNeeded>=0)
     {
          
          $Order= new OrderedFood();
    $Order->FoodID=$Result2->FoodID;
         OrderedFood::Delete($Order);

         $ResultUpdate=new FoodAvailable();
         $ResultUpdate->Name=$x;
         $ResultUpdate->Quantity=$Result->Quantity-$Result2->QuantityNeeded;
         FoodAvailable::update($ResultUpdate);
         echo '<script type="text/javascript">';
            echo 'window.location.href="SelectOrderedFoodEXE.php";';
            echo '</script>';
     }
     else
     {
         $_SESSION['Name']=$x;
         $_SESSION['QuantityNeeded']=$Result2->QuantityNeeded;
        echo '<script type="text/javascript">';
            echo 'window.location.href="client.php";';
            echo '</script>';
     }
      
 


}
 
 
?>
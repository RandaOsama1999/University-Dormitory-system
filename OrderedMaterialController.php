<?php
require_once 'OrderedMaterialView.php';
require_once 'classMaterialAvailable.php';
require_once 'classOrderedMaterial.php';
//require_once 'SubjectConcreteClass.php';
//require_once 'ObserverConcreteClass.php';
class OrderedMaterialController
{ 
    public static function SelectOrder()
    { 
        OrderedMaterialView::SelectAll();
        if(isset($_POST['save']))
        {   
           
            
             $x=$_POST['CurrentOptions2'];
             $object=new MaterialAvailable();
             $object->Name=$x;
             $Result=MaterialAvailable::SelectQuantity($object);//Quantity 
             $Result2=OrderedMaterial::SelectQuantityNeeded($object);//QuantityNeeded
             if($Result->Quantity-$Result2->QuantityNeeded>=0)
             {
                  
                  $Order= new OrderedMaterial();
            $Order->MaterialID=$Result2->MaterialID;
            OrderedMaterial::Delete($Order);
        
                 $ResultUpdate=new MaterialAvailable();
                 $ResultUpdate->Name=$x;
                 $ResultUpdate->Quantity=$Result->Quantity-$Result2->QuantityNeeded;
                 MaterialAvailable::update($ResultUpdate);
                 echo '<script type="text/javascript">';
                 echo 'window.location.href="SelectOrderedMaterial.php";';
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
        
    } 
     
}

 
 
?>
<?php
require_once 'classPayment.php';
require_once 'PaymentView.php';
require_once 'classPaymentMethodOptions.php';
require_once 'PaymentOptionsView.php';
 


class PaymentController{
  
    public static function ViewPayments()
    {
        $Result=Pay::ViewPaymentMethods();
        PaymentView::ShowPaymentMethods($Result);
    }
    public static function DeletePayments()
    {
        $Result=Pay::ViewPaymentMethods();
        PaymentView::DeletePaymentMethod($Result);
        if(isset($_POST['save']))
        {
            $ChosenPayment=$_POST['CurrentOptions'];
            Pay::delete($ChosenPayment);
        }
    }
    public static function AddPayments()
    { 
        PaymentView::AddNewPaymentMethod();
        if(isset($_POST['save']))
        {   
              
                $PaymentObject = new Pay();
                $PaymentObject->PaymethodType=$_POST['PaymethodType'];
                Pay::addpaymethod($PaymentObject); 
                
                $Result=Pay::SelectID($PaymentObject);
                echo '<script type="text/javascript">';
            echo 'window.location.href="AddCurrentOptionsEXE.php?payiD='.$Result->PaymethodID.'";';
            echo '</script>';
        } 
    } 
    public static function UpdatePayments()
    { 
        PaymentView::ViewAllToUpdatePayment();
        
    } 
}
    if(isset($_POST['0']))
        {   
              
                $PaymentObject = new Pay();
                $PaymentObject->PaymethodType=$_POST['CurrentOptions2'];
                $_SESSION['NewPaymethodType']=$PaymentObject->PaymethodType;
                //echo($PaymentObject->PaymethodType);
                PaymentView::UpdateName($PaymentObject);

        } 
        if(isset($_POST['1'])) //Delete Option
        {   
              
                $PaymentObject = new Pay();
                $PaymentObject->PaymethodType=$_POST['CurrentOptions2'];
                $_SESSION['NewPaymethodType']=$PaymentObject->PaymethodType; //Name
                $Result=Pay::SelectID($PaymentObject);
                $PaymentObject->PaymethodID=$Result->PaymethodID;
                $_SESSION['PaymentId']=$PaymentObject->PaymethodID;//ID
 
             PaymentView::DeleteOption();

              
        } 
        if(isset($_POST['2'])) //Add Options
        {   
              
                $PaymentObject = new Pay();
                $PaymentObject->PaymethodType=$_POST['CurrentOptions2'];
             
                $Result=Pay::SelectID($PaymentObject);
                $PaymentObject->PaymethodID=$Result->PaymethodID;
                $_SESSION['PaymentId']=$PaymentObject->PaymethodID;
                
              
                 PaymentOptionsView::AddNewOptions();
                
                



        
        } 
        
        if(isset($_POST['UpdateButton']))
        {
            $PaymentObject = new Pay();
            $PaymentObject->PaymethodType=$_POST['PaymethodType']; //NewObject
            $PaymentObjectSearch=new Pay();
            $PaymentObjectSearch->PaymethodType= $_SESSION['NewPaymethodType'];
            $Result=Pay::SelectID($PaymentObjectSearch);
            $PaymentObject->PaymethodID=$Result->PaymethodID;
            Pay::update($PaymentObject);
            header("location:UpdatePaymentEXE.php");
        }
        ///////////////////////////
        if(isset($_POST['AddingNewOptions']))
        {    
            if(isset($_POST['CurrentOptions']))
            {
            foreach ($_POST['CurrentOptions'] as $selectedOption)
            {
                
                    $LinkPaymentAndOptions= new LinkPaymentAndOptions();
                    $LinkPaymentAndOptions->Pay_ID=$_SESSION['PaymentId'];
                    $LinkPaymentAndOptions->Option_ID=$selectedOption+1;
                    if(LinkPaymentAndOptions::CheckIfFound($LinkPaymentAndOptions)==true)
                    {
                        
                    }
                    else
                    {
                        LinkPaymentAndOptions::addpaymentmethodoption($LinkPaymentAndOptions);
                    }
                   
            }
        }
             
                if(isset($_POST['CurrentOptions2']))
                {
                    $NewOptionsObject = new Options();
                    $NewOptionsObject->OptionsName=$_POST['AddedPaymethodOption'];
                    $NewOptionsObject->OptionsType=$_POST['CurrentOptions2'];
                    Options::addOptions($NewOptionsObject);

                    $Result=Options::SelectID($NewOptionsObject);    
                    

                    $LinkPaymentAndOptions= new LinkPaymentAndOptions();
                    $LinkPaymentAndOptions->Pay_ID=$_SESSION['PaymentId'];
                    $LinkPaymentAndOptions->Option_ID=$Result->OptionsID;
                    LinkPaymentAndOptions::addpaymentmethodoption($LinkPaymentAndOptions);

                }
             
                PaymentOptionsView::AddNewOptionsWithoutMENU();
            }
            if(isset($_POST['delete']))
            {   
                $LinkPaymentAndOptions= new LinkPaymentAndOptions();
                $LinkPaymentAndOptions->Pay_ID=$_SESSION['PaymentId'];
                $LinkPaymentAndOptions->Option_ID=$_POST['CurrentOptions'];
           
                
              LinkPaymentAndOptions::Delete($LinkPaymentAndOptions);
              PaymentView::ViewAllToUpdatePayment();

                   
            } 
        



?>
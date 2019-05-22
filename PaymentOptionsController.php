<?php
require_once 'classPaymentOptions.php';
require_once 'PaymentOptionsView.php';
require_once 'classPaymentMethodOptions.php';

class OptionsController
{ 
    public static function AddOptions($payiD)
    { 
        PaymentOptionsView::AddNewOptions();
        if(isset($_POST['AddingNewOptions']))
        {    
            

            
            foreach ($_POST['CurrentOptions'] as $selectedOption)
            {
                
                    $LinkPaymentAndOptions= new LinkPaymentAndOptions();
                    $LinkPaymentAndOptions->Pay_ID=$payiD;
                    $LinkPaymentAndOptions->Option_ID=$selectedOption;
                    LinkPaymentAndOptions::addpaymentmethodoption($LinkPaymentAndOptions);
            }
            
            
            if( !empty($_POST['AddedPaymethodOption'] ))
            {
                if(isset($_POST['CurrentOptions2']))
                {
                    $NewOptionsObject = new Options();
                    $NewOptionsObject->OptionsName=$_POST['AddedPaymethodOption'];
                    $NewOptionsObject->OptionsType=$_POST['CurrentOptions2'];
                    Options::addOptions($NewOptionsObject);

                    $Result=Options::SelectID($NewOptionsObject);    
                    

                    $LinkPaymentAndOptions= new LinkPaymentAndOptions();
                    $LinkPaymentAndOptions->Pay_ID=$payiD;
                    $LinkPaymentAndOptions->Option_ID=$Result->OptionsID;
                    LinkPaymentAndOptions::addpaymentmethodoption($LinkPaymentAndOptions);

                    PaymentOptionsView::AddNewOptionsWithoutMENU();
                }
                else
                {
                    echo 'smthng missing';
                }
            }
        }
    } 
}
?>
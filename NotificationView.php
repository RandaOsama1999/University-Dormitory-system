<?php
include_once "classDatabase.php";
require_once 'classNotification.php';
session_start();
 
class NotificationView
{
     public static function ShowNotifications()
	{
        
            include_once "header.php";
            
            $Obj=new Notifications();
            $Obj->UserType_ID=$_SESSION['UserType_ID'];
           $Result= Notifications::SelectByUserTypeID($Obj);
           for($i=0;$i<count($Result);$i++)
            {
                
                    echo ("<div style='color:black;font-size:20px;'>".$Result[$i]->Notification." تحريرا في :".$Result[$i]->CreatedDateTime."</div>");
                    
            }
            
include_once "footer.php";
        }
         
   
}

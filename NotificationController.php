<?php
require_once 'NotificationView.php';
 
 
 
class NotificationController
{ 
    public static function Show()
    { 
        NotificationView::ShowNotifications();
    } 
}
 
 
 
?>
<?php
require_once 'classPermission.php';
include_once 'PermissionView.php';
include_once 'classDatabase.php';
class PermissionController{
   

    public static function add()
    {
        Permission::addperm();
        if(isset($_POST['Submit']))
        {
            $obj = new LinkUser();
            $obj->userType_ID=$_POST['userType_ID'];
            $obj->links_ID=$_POST['permission'];
            LinkUser::create($obj);
        
        }
                 
}
    public static function viewlinks()
    {
        $Result=LinkUser::viewlink();
        $Result2=LinkUser::viewuser();
        Permission::viewPermission($Result,$Result2);
    }

   public static function delete()
    {
        Permission::deleteper();
                        
        if(isset($_POST['Submit']))
        {
            $obj = new LinkUser();
            $obj->userType_ID=$_POST['userType_ID'];
            $obj->links_ID=$_POST['permission'];
            LinkUser::delete($obj);
            
        }
    }

}

?>
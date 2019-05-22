<?php
require_once 'classUserType.php';
require_once 'ViewUsertype.php';
include_once 'classDatabase.php';
class UserTypeController
{
  public static function viewUserType()
  {
    $Result=UserType:: ViewAllTypes();
    ViewUsertype::userTypeview($Result);
  }
  public static function creatnewuser()
  {
    ViewUsertype::addUserType();
    if(isset($_POST['Submit']))
    {
        $obj = new UserType();
        $obj->Type=$_POST['usertype'];
        return UserType::create($obj);
    }
  }
  public static function deleteUserType()
  {
    ViewUsertype::deleteUsertype();
       if(isset($_POST['Submit']))
       {
           $obj = new UserType();
           $obj->ID=$_POST['Type'];
           return UserType::delete($obj);
       }
  }
  
}
   
?>
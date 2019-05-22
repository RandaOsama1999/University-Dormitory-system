<?php
include_once "classStudentModel.php";
include_once "classMaintenanceEngineer.php";
include_once "classUserModel.php";
session_start();
class FactoryTest
{
function clientCode($id)
{ 
    if($id==14)
    {
        $_SESSION['Eng']=serialize (new ME());  
       return  new Users();
    }
    else if($id== 1)
    {
        $_SESSION['Student']=serialize (new Student());  
        return  new Users();
    }
    else
    {
        return  new Users();
    }
}
}
?>
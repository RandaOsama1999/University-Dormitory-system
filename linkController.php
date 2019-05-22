<?php
require_once 'classLink.php';
include_once 'classDatabase.php';
require_once 'LinkView.php';
class linkController{
   
    public static function updatelinks()
    {
        LinkView::updatelink();
        if(isset($_POST['Submit']))
        {
            $obj = new Link();
            $obj->ID=$_POST['PhysicalAddress'];
            $obj->FriendlyAddress=$_POST['FriendlyAddress'];
            return Link::update($obj);
            
        }
    }
    public static function addlink()
    {
        LinkView::addlink();
        if(isset($_POST['Submit']))
        {
            $obj = new Link();
            $obj->PhysicalAddress=$_POST['PhysicalAddress'];
            $obj->FriendlyAddress=$_POST['FriendlyAddress'];
            return Link::add($obj);
            
        }
    }
    public static function deletelink()
    {
        LinkView::deletelink();
        if(isset($_POST['Submit']))
        {
            $obj = new Link();
            $obj->ID=$_POST['PhysicalAddress'];
            return Link::delete($obj);
            
        }
    }
    public static function viewlinks()
    {
        
        $Result=Link:: ViewAllLinks();
        LinkView::Linksview($Result);
    }
    public static function SearchStaticPage()
    {
        LinkView::SearchStaticPage();
        if(isset($_POST['remove'])){
            $name=$_POST['html'];
            echo '<script type="text/javascript">';
            echo 'window.location.href="UpdateStaticPageAfterSearch.php?name='.$name.'";';
            echo '</script>';
        }
    }
    public static function UpdateStaticPage($name)
    {
        $Result=Link::getdataTOupdate($name);
        
        LinkView::UpdateStaticPage($Result);
        if(isset($_POST['submit'])){
            $html=$_POST['editor1'];
            Link::updatestaticpage($html,$name);
        }
    }
    public static function SearchEverythingPage()
    {
        LinkView::SearchEverythingPage();
        if(isset($_POST['remove'])){
            $id=$_POST['html'];
            echo '<script type="text/javascript">';
            echo 'window.location.href="UpdateEverything.php?id='.$id.'";';
            echo '</script>';
        }
    }
    public static function viewEverythingPage($id)
    {
        $Resulttwo=Link::viewEverythingpage($id);
        LinkView::viewEverythingPage($Resulttwo);
        if(isset($_POST['submit'])){
            $i=2;
            for($k=0;$k<count($Resulttwo);$k++)
            {
                if($Resulttwo[$k]->Type_ID==1)
                {
                    $obj = new Link();
                    $obj->Links_ID=$id;
                    $obj->Type_ID=1;
                    $obj->Content=$_POST['mail'];
                    //echo "<script> alert('".$obj->Content."');</script>";
                    Link::updateEverythingpage($obj);
                }
                else if($Resulttwo[$k]->Type_ID==2)
                {
                    $obj = new Link();
                    $obj->Links_ID=$id;
                    $obj->Type_ID=2;
                    $obj->Content=$_POST['alert'.$i];
                    $obj->NameOfType="alert".$i;
                    Link::updateEverythingpagewithname($obj);
                    $i=$i+1;
                }
                else if($Resulttwo[$k]->Type_ID==3)
                {
                    $obj = new Link();
                    $obj->Links_ID=$id;
                    $obj->Type_ID=3;
                    $obj->Content=$_POST['button'];
                    Link::updateEverythingpage($obj);
                }
                else
                {
                    $obj = new Link();
                    $obj->Links_ID=$id;
                    $obj->Type_ID=4;
                    $obj->Content=$_POST['label'];
                    Link::updateEverythingpage($obj);
                }
            } 
            echo '<script type="text/javascript">';
            echo 'window.location.href="UpdateEverything.php?id='.$id.'";';
            echo '</script>';
            
        }
    }
   /* public static function addnew()
    {

            if(isset($_POST['Submit']))
                 {
                 $obj = new Link();
                 $obj->ID=$_POST['PhysicalAddress'];
                 $obj->FriendlyAddress=$_POST['FriendlyAddress'];
                 return Link::addnew($obj);
                }
    }*/
}

?>
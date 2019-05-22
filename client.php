<?php
include_once 'classNotification.php';
session_start();

 
class Subject implements \SplSubject
{
     
    public $state;

     
    private $observers;
    
    public function __construct()
    {
        $this->observers = new \SplObjectStorage;
    }
 
    public function attach(\SplObserver $observer) 
    {
        echo "Subject: Attached an observer.\n";
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer)
    {
        $this->observers->detach($observer);
        echo "Subject: Detached an observer.\n";
    }
    public function notify() 
    {
        echo "Subject: Notifying observers...\n";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
    public function someBusinessLogic()
    {
         
        $this->notify();
    }
}
class ConcreteObserverA implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
       $obj=new Notifications();//Sending to admin
       $obj->UserType_ID='3';
       $msg= ' ليس هناك الكميه المطلوبه من ال';
       $msg1=$msg." ".$_SESSION['Name'];
       $obj->Notification=$msg1;
       Notifications::add($obj);
    }
}

class ConcreteObserverB implements \SplObserver
{
    public function update(\SplSubject $subject) 
    { 
        $obj=new Notifications();//Sending to admin
        $obj->UserType_ID='6';
        $msg= 'يرجي اضافه الكميه التاليه ';
        $msg1=$msg.":".$_SESSION['QuantityNeeded']."لهذا الصنف :".$_SESSION['Name'];
        $obj->Notification=$msg1;
        Notifications::add($obj);
    }
}

/**
 * The client code.
 */

$subject = new Subject;
 
$o1 = new ConcreteObserverA;
$subject->attach($o1);
 
$o2 = new ConcreteObserverB;
$subject->attach($o2);
 
$subject->someBusinessLogic();
 
 
?>
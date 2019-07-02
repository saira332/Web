
<?php
    // interface RobotPlan
    // {
    //     function setRobotHead(string $head);
    //     function setRobotTorso(string $torso);
    //     function setRobotArms(string $arms);
    //     function setRobotLegs(string $legs);
    // }
    // class Robot implements RobotPlan
    // {
    //     private  $robotHead;
    //     private  $robotTorso;
    //     private  $robotArms;
    //     private  $robotLegs;

       
    //     public function setRobotHead( $head)
    //     {
    //         $robotHead = $head;
    //     }
    //     public function getRobotHead()
    //     {
    //         return $robotHead;
    //     }
    //     public function setRobotTorso( $torso)
    //     {
    //         $robotTorso = $torso;
    //     }
    //     public function getRobotTorso()
    //     {
    //         return $robotTorso;
    //     }
    //     public function setRobotArms( $arms)
    //     {
    //         $robotArms = $arms;
    //     }
    //     public function getRobotArms()
    //     {
    //         return $robotArms;
    //     }
    //     public function setRobotLegs( $legs)
    //     {
    //         $robotLegs = $legs;
    //     }
    //     public function getRobotLegs()
    //     {
    //         return $robotLegs;
    //     }


    // }
    
    // interface RobotBuilder
    // {
    //     function buildRobotHead();
    //     function buildRobotTorso();
    //     function buildRobotArms();
    //     function buildRobotLegs();
    //     function  getRobot();
    // }

    // class OldRobotBuilder implements RobotBuilder
    // {
    //     private  $robot;

    //     public OldRobotBuilder()
    //     {
    //         $this->robot = new Robot();
    //     }
    //     public function buildRobotHead()
    //     {
    //         $robot->setRobotHead("Tin head");
    //     }
    //     public function buildRobotTorso()
    //     {
    //         $robot->setRobotTorso("Tin Torso");
    //     }
    //     public function buildRobotArms()
    //     {
    //         $robot->setRobotArms("Tin Arms");
    //     }
    //     public function buildRobotLegs()
    //     {
    //         $robot->setRobotLegs("Tin Legs");
    //     }
    //     public function Robot getRobot()
    //     {
    //         return $this->robot;
    //     } 
    // }

    // class RobotEngineer
    //     {
    //         private  $robotBuilder;

    //         public RobotEngineer(RobotBuilder robotBuilder)
    //         {
    //             $this->robotBuilder = $robotBuilder;
    //         }

    //         public function  getRobot()
    //         {
    //             return $this->robotBuilder->getRobot();
    //         }

    //         public function makeRobot()
    //         {
    //             $this->robotBuilder->buildRobotHead();
    //             $this->robotBuilder->buildRobotTorso();
    //             $this->robotBuilder->buildRobotArms();
    //             $this->robotBuilder->buildRobotLegs();
    //         }
    //     }

    //      $oldStyleRobot = new OldRobotBuilder();

    //      $robootEngineer = new RobotEngineer($oldStyleRobot);

    //     $robootEngineer->makeRobot();
    //     Robot $firstRobot = robootEngineer->getRobot();
    //     echo "(robot head  : {0} " . $firstRobot.getRobotHead();
    //     echo"robot head  : {0} ". $firstRobot.getRobotTorso();
    //     echo"robot head  : {0} ". $firstRobot.getRobotArms();
    //     echo"robot head  : {0} ". $firstRobot.getRobotLegs();
    
    
    // class CarDecoration
    // {
    //     function EngineType()
    //     {
    //         echo "No Engine";
    //     }
    // }

    // class PetrolEngine extends CarDecoration
    // {
    //     function EngineType()
    //     {
    //         echo "Petrol Engine";
    //     }
    // }
    // class DieselENgine extends CarDecoration
    // {
    //     function EngineType()
    //     {
    //         echo "Diesel Engine";
    //     }
    // }
    // $c = new CarDecoration();
    // $c->EngineType();
    // echo "</br>";
    // $a = new PetrolEngine();
    // $a->EngineType();
    // echo "</br>";
    // $b = new DieselENgine();
    // $b->EngineType();


    // interface NotificationInterface {
    //     public function setData($data);
    //     public function sendNotification();
    // }
    // class TwitterAdapter implements NotificationInterface
    // {
    //     protected $_data;
    //     public function setData($data){
    //         $this->_data = $data;
    //     }
    //     public function sendNotification()
    //     {
    //         $twitterClient = new TwitterService();
    //         $twitterClient->setMessage($this->_data['message']);
    //         $twitterClient->sendTweet();
    //     }
    // }
    // class EmailAdapter implements NotificationInterface 
    // {
    //     protected $_data;
    //     public function setData($data){
    //         $this->_data = $data;
    //     }
    //     public function sendNotification()
    //     {
    //         $emailClient = new EmailService();
    //         $emailClient->setTitle($this->_data['title']);
    //         $emailClient->setMessage($this->_data['message']);
    //         $emailClient->setFrom($this->_data['from']);
    //         $emailClient->setTo($this->_data['to']);
    //         $emailClient->sendEmail();
    //     }
    // }
    // class SmsAdapter implements NotificationInterface
    // {
    //     protected $_data;
    //     public function setData($data){
    //         $this->_data = $data;
    //     }
    //     public function sendNotification()
    //     {
    //         $smsClient = new SmsService();
    //         $smsClient->setRecipient($this->_data['recipient']);
    //         $smsClient->setMessage($this->_data['message']);
    //         $smsClient->sendText();
    //     }
    // }
    // class NotificationManager {
 
    //     public function sendNotification($type = '', $data)
    //     {
    //       switch($type){
    //         case "email": 
    //           $notification = new EmailAdapter();
    //           break;
    //         case "twitter":
    //           $notification = new TwitterAdapter();
    //           break;
    //         case "sms":
    //           $notification = new SmsAdapter();
    //           break;
    //         default:
    //           // Do something to log an exception 
    //           return false;
    //           break;
    //       }
          
    //       $notification->setData($data);
    //       $notification->sendNotification();
          
          
    //     }
    //   }


    // class singlon
    // {
    //      static  $objCount;
    //      static  $obj;

    //     private function singlon()
    //     {
    //         $objCount++;
    //     }

    //      static function setObj()
    //     {
    //         if ($obj == null)
    //         {
    //             $obj = new singlon();
    //         }

    //         return $obj;
    //     }

    //      function Message(string $msg)
    //     {
    //         echo $msg;
    //         return $msg;
    //     }
    // }
    //  $s1 = singlon.setObj();
    //  $s1->Message("this is s1");
    //          $s2 = singlon.setObj();
    //         $s1->Message("this is s2");
    //          $s3 = singlon.setObj();
    //         $s1->Message("this is s3");
    //          $s4 = singlon.setObj();
    //         $s1->Message("this is s4");
    //         echo"no of objects = ". singlon.$objCount;

//     class User
// {
//     // Hold an instance of the class
//     private static $instance;
 
//     // The singleton method
//     public static function singleton()
//     {
//         if (!isset(self::$instance)) {
//             self::$instance = new User() ;
//         }
//         return self::$instance;
//     }
//     function Message($msg)
//         {
//             echo $msg;
//             return $msg;
//         }
    
// }
// $user1 = User::singleton();
// $user1->Message("this is user 1 </br>");
// $user2 = User::singleton();
// $user2->Message("this is user 2 </br>");
// $user3 = User::singleton();
// $user3->Message("this is user 3");

interface INotify
{
    function Notification();
}

class EventNotification implements INotify
{
    public $message;
     function EventNotification($msg)
    {
        $message = $msg;
    }

    function Notification()
    {
        echo $message;
    }
}

class SpecialOffer implements INotify
{

    public $message;
    function SpecialOffer($msg)
    {
        $message = $msg;
    }

    function Notification()
    {
        echo $message;
    }
}
class subject
{
    // $allnotifications = new ArrayList();
   public $allnotifications = array();

    function Register(INotify $notification)
    {
        // $allnotifications.Add($notification);
        array_push($allnotifications,$notification);
    }

    function annouce()
    {
        foreach($allnotifications as $n )
        {
            $n.Notification();
        }
    }

    $e = new EventNotification("event abc");
    $sa = new SpecialOffer("special offer");

    $s = new subject();
    $s->Register($e);
    $s->Register($sa);
    $s->annouce();
}
        ?>

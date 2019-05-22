<?php
require_once 'PHPMailer-master/src/PHPMailer.php';
require_once 'PHPMailer-master/src/Exception.php';
require __DIR__ . '\twilio\vendor\autoload.php';
use Twilio\Rest\Client;
require_once('TCPDF-master/examples/tcpdf_include.php');
require_once('TCPDF-master/tcpdf.php');
include_once "classDatabase.php";
include_once "DormFees.php";
include_once "classContent.php";
include_once "RoomFees.php";
include_once "Decor3Meals.php";
include_once "Decor2Meals.php";
include_once "DecorDrinks.php";
include_once "Decor1Meal.php";
include_once "Decor_Washing.php";
include_once "Decor_Services.php";
include_once "Decor_ExtraServices.php";
include_once "Decor_Cleaning.php";

class facade
{
    public $mail;
    public $sms;
    public $pdf;
    public $sid;
    public $token;
    public function __construct()
    {
        $this->sid = 'ACb7a15a1c4e41cf4510f2c43bbfde611e';
        $this->token = 'faa90a845201400add367a867e9cd130';
        $this->mail = new PHPMailer\PHPMailer\PHPMailer();
        $this->sms = new Client($this->sid, $this->token);
        $this->pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    }
    public  function sendmail($email,$pwrurl,$name){
        $conn=DB::getInstance();
        $mysql=$conn->getConnection();
        $conn=mysqli_query($mysql,"SET NAMES 'utf8'");

        $cont=Content::EmailContent(57);
        $cont2=Content::Alert(57,"alert1");

        $this->mail->isSendmail();
        //Set who the message is to be sent from
        $this->mail->setFrom('azhardormsadmission@gmail.com', 'AlAzhar Admissions');
        //Set who the message is to be sent to
        $this->mail->addAddress($email, $name);
        //Set the subject line
        $this->mail->Subject = 'Password Reset';
        //Replace the plain text body with one created manually
        $this->mail->Body = $cont.": ".$pwrurl;
         //Attach an image file
        $this->mail->addAttachment('UniLogoSmall.png');
        //send the message, check for errors
        $sent=$this->mail->send();
        if ($sent) {
            echo "<script> alert('".$cont2."');</script>";
           
        } else {
            //echo "Message sent!";
            echo "Mailer Error: " . $this->mail->ErrorInfo;
        }
    } 
    public  function sendSMS($arr,$message){
        //echo "<script> alert('hi');</script>";
        for($i=0;$i<count($arr);$i++)
        {
            //echo "<script> alert('".$arr[$i]."');</script>";
            $sms = $this->sms->messages->create(
                // the number you'd like to send the message to
                ''.$arr[$i].'',
                array(
                    // A Twilio phone number you purchased at twilio.com/console
                    'from' => '+19203769511',
                    // the body of the text message you'd like to send
                    'body' => ''.$message.''
                )
            );
        }
        
        //echo "<script> alert('Messages sent');</script>";
        //echo $sms->sid;

    } 
    public  function VisaPDF(){
        $this->pdf->SetCreator(PDF_CREATOR);
        $this->pdf->SetTitle('StudentReciept');
        $this->pdf->SetSubject('StudentReciept');

        // set default header data
        $this->pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // set header and footer fonts
        $this->pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $this->pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        // set default monospaced font
        $this->pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

        // set margins
        $this->pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $this->pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $this->pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

        // set auto page breaks
        $this->pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        // set image scale factor
        $this->pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
            require_once(dirname(__FILE__).'/lang/eng.php');
            $this->pdf->setLanguageArray($l);
        }
        $email = $_SESSION['email'];
        $valuesstatic=$_SESSION['valuesstatic'];
        $fullname=$_SESSION['fullname'];
        $National_ID=$_SESSION['National_ID'];
        $faculty=$_SESSION['faculty'];
        // ---------------------------------------------------------
        // set font
        $this->pdf->AddPage();
        $this->pdf->SetFont('Times', 'B', 12);
        $this->pdf->Text(20, 50, "Student Name: ");
        $this->pdf->SetFont('aefurat', '', 11);
        $this->pdf->Text(55, 50, $fullname);

        $this->pdf->SetFont('Times', 'B', 12);
        $this->pdf->Text(20, 55, "Student National ID: ");
        $this->pdf->SetFont('aefurat', '', 11);
        $this->pdf->Text(60, 55, $National_ID);

        $this->pdf->SetFont('Times', 'B', 12);
        $this->pdf->Text(20, 60, "Email: ");
        $this->pdf->SetFont('Times', '', 11);
        $this->pdf->Text(40, 60, $email);

        $this->pdf->SetFont('Times', 'B', 12);
        $this->pdf->Text(20, 65, "Faculty: ");
        $this->pdf->SetFont('aefurat', '', 11);
        $this->pdf->Text(50, 65, $faculty);

        $this->pdf->SetFont('Times', 'B', 12);
        $this->pdf->Text(20, 75, "Account Name: ");
        $this->pdf->SetFont('Times', '', 11);
        $this->pdf->Text(50, 75, $valuesstatic[0]);

        $this->pdf->SetFont('Times', 'B', 12);
        $this->pdf->Text(20, 80, "Account Number: ");
        $this->pdf->SetFont('Times', '', 11);
        $this->pdf->Text(56, 80, $valuesstatic[1]);


        $this->pdf->SetFont('Times', 'B', 12);
        $this->pdf->Text(150, 50, 'Date: ');
        $this->pdf->SetFont('Times', '');
        $this->pdf->Text(162, 50, date('F j, Y'));

        $this->pdf->SetFont('Times', 'B', 12);
        $this->pdf->Text(150, 55, "Year: ");
        $this->pdf->SetFont('Times', '');
        $this->pdf->Text(162, 55, date("Y")."/".(date("Y")+1));

        $this->pdf->SetY(90);
        $feestype=array();
            $feesnum=array();
            $conn=DB::getInstance();
            $mysql=$conn->getConnection();
            $conn=mysqli_query($mysql,"SET NAMES 'utf8'");
        $checkarr=$_SESSION['checkarr'];
        $sqltwo="SELECT * FROM fees WHERE Fees_Type='الغرفة'";
        $resulttwoo =mysqli_query($mysql,$sqltwo);
            if ($resulttwoo->num_rows > 0) {
                while($rowtwoo = $resulttwoo->fetch_assoc()) {
                array_push($feestype,$rowtwoo['Fees_Type']);
                array_push($feesnum,$rowtwoo['Fees_Number']);
                
                }
            }
        for($i=0;$i<count($checkarr);$i++)
        {
            //echo "<script> alert('".$checkarr[$i]."');</script>";  
            $sql="SELECT * FROM fees WHERE ID=".$checkarr[$i]." AND IsDeleted=0";
            $resulttwo = mysqli_query($mysql,$sql);
            if ($resulttwo->num_rows > 0) {
                while($rowtwo = $resulttwo->fetch_assoc()) {
                array_push($feestype,$rowtwo['Fees_Type']);
                array_push($feesnum,$rowtwo['Fees_Number']);
                }
            }
        }




        $this->pdf->PriceTable($feestype, $feesnum);

        $this->pdf->Output('reciept.pdf', 'I');

    } 
}
class MYPDF extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        $image_file = 'UniLogoSmall.jpg';
        $this->Image($image_file, 20, 15, 30, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        // Set font
        $this->SetFont('Times', 'B', 10);
        $this->SetFillColor(255, 255, 255);
        $this->SetTextColor(0);
        
        $this->Text(20, 28, "Al-Azhar University");
        $this->Text(20, 32, "El-Nasr road");
        $this->Text(20, 36, "Nasr City, Egypt");
        $this->Text(20, 40, "Email : Info@azhar.edu.eg");

        $this->Text(150, 28, "National Bank of Egypt");
        $this->Text(150, 32, "Phone : 19623");
        
        $image_filetwo = 'NBE.jpg';
        $this->Image($image_filetwo, 150, 14, 30, '', 'JPG', '', 'T', false, 300, '', false, false, 0, false, false, false);
        $this->Line(20,46,188,46);
    }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        $this->SetY(-15);
        // Set font
        $this->SetFont('Times', 'I', 8);
        // Page number
        $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
    function PriceTable($products, $prices) {
        
$checkarr=$_SESSION['checkarr'];
$d=new roomfees();
for($i=0;$i<count($checkarr);$i++)
{
    
        if($checkarr[$i]==2)
        {
            $d=new cleaning($d);
        }
        if($checkarr[$i]==3)
        {
            $d=new services($d);
        }
        if($checkarr[$i]==4)
        {
            
            $d=new extraservices($d);
        }
        if($checkarr[$i]==5)
        {
            $d=new threemeals($d);
        }
        if($checkarr[$i]==6)
        {
            $d=new twomeals($d);   
        }
        if($checkarr[$i]==7)
        {
            $d=new onemeal($d);
        }
        if($checkarr[$i]==8)
        {
            $d=new washing($d);
        }
        if($checkarr[$i]==10)
        {
            $d=new drinks($d);
        }
}

        $this->SetLeftMargin(20);
        $this->SetFont('Times', 'B', 12);
        $this->SetFillColor(105,105,105);
        $this->SetTextColor(255,255,255);
        $this->Cell(95, 9, "Fee Description", 'LTR', 0, 'C', true);
        $this->Cell(75, 9, "Fee Amount", 'LTR', 1, 'C', true);

        $this->SetFont('aefurat', '', 11);
        $this->SetFillColor(238);
        $this->SetTextColor(0,0,0);
        $fill = false;

        for ($i = 0; $i < count($products); $i++) {
            $this->Cell(95, 7, $products[$i], 1, 0, 'L', $fill);
            $this->Cell(75, 7, 'EGP ' . $prices[$i], 1, 1, 'R', $fill);
            $fill = !$fill;
        }
        $this->SetX(60);
        $this->SetFont('Times', 'B', 12);
        $this->Cell(55, 8, "Total", 1);
        $this->Cell(75, 8, 'EGP ' . $d->fees(), 1, 1, 'R');
    }
}





?>
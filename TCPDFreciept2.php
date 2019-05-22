<?php
include_once "classDatabase.php";
include_once "DormFees.php";
include_once "RoomFees.php";
include_once "Decor3Meals.php";
include_once "Decor2Meals.php";
include_once "Decor1Meal.php";
include_once "Decor_Washing.php";
include_once "Decor_Services.php";
include_once "Decor_ExtraServices.php";
include_once "Decor_Cleaning.php";
require_once('TCPDF-master/examples/tcpdf_include.php');
require_once('TCPDF-master/tcpdf.php');

session_start();

// Extend the TCPDF class to create custom Header and Footer
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

// create new PDF document
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetTitle('StudentReciept');
$pdf->SetSubject('StudentReciept');

// set default header data
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}
$email = $_SESSION['email'];
$valuesstatic=$_SESSION['valuesstatic'];
$fullname=$_SESSION['fullname'];
$National_ID=$_SESSION['National_ID'];
$faculty=$_SESSION['faculty'];
// ---------------------------------------------------------
// set font
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 12);
$pdf->Text(20, 50, "Student Name: ");
$pdf->SetFont('aefurat', '', 11);
$pdf->Text(55, 50, $fullname);

$pdf->SetFont('Times', 'B', 12);
$pdf->Text(20, 55, "Student National ID: ");
$pdf->SetFont('aefurat', '', 11);
$pdf->Text(60, 55, $National_ID);

$pdf->SetFont('Times', 'B', 12);
$pdf->Text(20, 60, "Email: ");
$pdf->SetFont('Times', '', 11);
$pdf->Text(40, 60, $email);

$pdf->SetFont('Times', 'B', 12);
$pdf->Text(20, 65, "Faculty: ");
$pdf->SetFont('aefurat', '', 11);
$pdf->Text(50, 65, $faculty);

$pdf->SetFont('Times', 'B', 12);
$pdf->Text(150, 50, 'Date: ');
$pdf->SetFont('Times', '');
$pdf->Text(162, 50, date('F j, Y'));

$pdf->SetFont('Times', 'B', 12);
$pdf->Text(150, 55, "Year: ");
$pdf->SetFont('Times', '');
$pdf->Text(162, 55, date("Y")."/".(date("Y")+1));

$pdf->SetY(90);
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

$pdf->PriceTable($feestype, $feesnum);
/*
$pdf->SetFont('aefurat', '', 15);
$pdf->Text(50, 150, "اطبع هذه الورقة و اذهب بها الي خزينة الجامعة لدفع المصاريف كاش");*/

$pdf->Output('reciept.pdf', 'I');

?>
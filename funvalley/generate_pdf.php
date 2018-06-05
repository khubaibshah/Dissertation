<?php


/**
 * Created by IntelliJ IDEA.
 * User: khubaib
 * Date: 22/03/2018
 * Time: 14:59
 */
//include connection file
include("connection.php");
include('api/fpdf/fpdf.php');

//class PDF extends FPDF
//{
//// Page header
//    function Header()
//    {
//        // Logo
//        $this->Image('img/fvlogo.png', 10, -5, 70);
//        $this->SetFont('Arial', 'B', 13);
//        // Move to the right
//        $this->Cell(130);
//
//        // Title
//        $this->Cell(40, 10, 'Customer booking details', 0, 0, 'C');
//        // Line break
//        $this->Ln(20);
//
//    }
//
//// Page footer
//    function Footer()
//    {
//        // Position at 1.5 cm from bottom
//        $this->SetY(-15);
//        $this->SetX(-15);
//        // Arial italic 8
//        $this->SetFont('Arial', 'B', 8);
//        // Page number
//
//        $this->Cell(0, 5, 'Page ' . $this->PageNo() . '/{nb}', 0, 0, 'L');
//    }
//}
//
//$db = new dbObj();
//$connString = $db->getConnstring();
//$display_heading = array(
//    'partydate' => 'partydate',
//    'partytime' => 'Party time',
//    'partyfoodselection1' => 'partyfoodselection1',
//    'partyfoodselection2' => 'partyfoodselection2',
//    'icecream' => 'icecream',
//    'foodplatters' => 'foodplatters',
//    'maleorfemale' => 'MorF',
//    'springrolls' => 'springrolls',
//    'sandwiches' => 'sandwiches',
//    'childsname' => 'childsname' ,
//    'childsage' => 'childsage'   ,
//    'morf' => 'morf'   ,
//    'email' => 'email'   ,
//    'address1' => 'address1'   ,
//    'contact' => 'contact'   ,
//    'postcode' => 'postcode'   ,
//    'name' => 'name'   ,
//    'adultsinattendance' => 'adultsinattendance'   ,
//    'citytown' => 'citytown',
//
//
//);
//
//
////$result = mysqli_query($connString, "SELECT partydate,partytime,partybag,partyfoodselection1,partyfoodselection2,icecream,foodplatters,springrolls,sandwiches,childsname,childrenattending,childsage,morf,email,address1,contact,postcode,name,adultsinattendance,citytown FROM funvalley")
////or die("database error:" . mysqli_error($connString));
//
//
//$result = mysqli_fetch_array(mysqli_query($connString,"SELECT partydate,partytime,partybag,partyfoodselection1,partyfoodselection2,icecream,foodplatters,springrolls,sandwiches,childsname,childrenattending,childsage,morf,email,address1,contact,postcode,name,adultsinattendance,citytown FROM funvalley"));
//$header = mysqli_query($connString, "SHOW columns FROM funvalley");
//
//
//$pdf = new PDF();
//
//
////header
//$pdf->AddPage('L');
////footer page
//$pdf->AliasNbPages();
//
//$pdf->SetAutoPageBreak(true, 10);
//
//
////form fields
//$pdf->Cell(56, 6, 'Key', 0, 0, 'L', FALSE);
//
//$pdf->MultiCell(100, 6, 'fuck know', 0, 'L', FALSE);
//$pdf->Ln();
//$pdf->SetFont('Arial', 'B', 9);
//
//
//
//
//foreach($header as $heading) {
//    $pdf->Cell(40,12,$display_heading[$heading['Field']],1);
//}
//
//foreach($result as $row) {
//    $pdf->Ln();
//    foreach($row as $column)
//        $pdf->Cell(37,10,$column,0, 'R', FALSE);
//}
//
//
//$pdf->Output("report.pdf", "I");
//
class PDF extends FPDF
{
// Page header
    function Header()
    {
//         Logo
        $this->Image('img/fvlogo.png', 10, -5, 70);
        $this->SetFont('Arial', 'B', 13);
        // Move to the right
        $this->Cell(130);

        // Title
        $this->Cell(40, 10, 'Customer booking details', 0, 0, 'C');
        // Line break
        $this->Ln(20);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',5);
        // Page number
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
    }

}




$db = new dbObj();
$connString = $db->getConnstring();
$display_heading = array(
    'user_id' => 'user_id',
    'partydate' => 'Partydate',
    'partytime' => 'Party time',
    'partybag' => 'Partybag',
    'partyfoodselection1' => 'partyfoodselection1',
    'partyfoodselection2' => 'partyfoodselection2',
    'icecream' => 'icecream',
    'foodplatters' => 'foodplatters',
    'maleorfemale' => 'MorF',
    'childrenattending' => 'childrenattending',
    'springrolls' => 'springrolls',
    'sandwiches' => 'sandwiches',
    'childsname' => 'childsname' ,
    'childsage' => 'childsage'   ,
    'morf' => 'morf'   ,
    'email' => 'email'   ,
    'address1' => 'address1'   ,
    'contact' => 'contact'   ,
    'postcode' => 'postcode'   ,
    'name' => 'name'   ,
    'adultsinattendance' => 'adultsinattendance'   ,
    'citytown' => 'citytown',


);
$result = mysqli_query($connString, "SELECT user_id,partydate,partytime,partybag,partyfoodselection1,partyfoodselection2,icecream,foodplatters,springrolls,sandwiches,childsname,childrenattending,childsage,morf,email,address1,contact,postcode,name,adultsinattendance,citytown FROM funvalley") or die("database error:". mysqli_error($connString));
$header = mysqli_query($connString, "SHOW columns FROM funvalley");

$pdf = new PDF();


//header
$pdf->AddPage('L');
//footer page
$pdf->AliasNbPages();
$pdf->SetFont('Arial','B',12);
foreach($header as $heading) {
    $pdf->Cell(30,32,$display_heading[$heading['Field']],0);

//    $pdf->AddPage('L');
//    $pdf->multiCell($display_heading[$heading['morf']]);
}

$pdf->SetAutoPageBreak(true, 10);


//form fields
$pdf->Cell(56, 6, 'Key', 0, 0, 'L', FALSE);

$pdf->Cell(100, 6, 'Test', 0, 'L', FALSE);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 9);


foreach($result as $row) {
    $pdf->Ln();
    foreach($row as $column)
        $pdf->multiCell(30,32,$column,1);
}
$pdf->Output();


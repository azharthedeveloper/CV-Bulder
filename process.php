<?php

require_once('FPDF/fpdf.php');

if (isset($_REQUEST['generate'])) {
	// echo "<pre>";
	// print_r($_REQUEST);
	
	extract($_REQUEST);

	$full_name = $first_name." ".$last_name;
	// echo $full_name;
	// die;

$pdf = new FPDF();

$pdf->addpage('P',"A4",0);

$pdf->setLineWidth(1);
$pdf->setDrawColor(176,0,32);
$pdf->Line(5,5,5,290);//Leftside Vertical Line;
$pdf->Line(205,5,205,290);//Rightside Vertical Line;
$pdf->Line(10,5,200,5);//Horizontal Top Line;
$pdf->Line(10,290,200,290);//Horizontal Bottom Line;

$pdf->setFont('Times', 'B', '22');
$pdf->setFillColor(239,83,80);
$pdf->Cell(0,14,$full_name,'TB',1,'C',1);

$pdf->Ln(2);
$pdf->setFont('Times', '', '14');
$pdf->MultiCell(0,6,$address,0,'C');
$pdf->MultiCell(0,6,$phone_number,0,'C');
$pdf->MultiCell(0,6,$email,0,'C');

$pdf->Ln(2);
$pdf->setFont('Times', 'B', '22');
$pdf->setFillColor(239,83,80);
$pdf->Cell(0,14,'Objective','TB',1,'C',1);


$pdf->Ln(2);
$pdf->setFont('Times', '', '14');
$pdf->MultiCell(0,6,$objective,0,'J');

$pdf->Ln(2);
$pdf->setFont('Times', 'B', '22');
$pdf->setFillColor(239,83,80);
$pdf->Cell(0,14,'Personal Details','TB',1,'C',1);

$pdf->Ln(2);
$pdf->setFont('Times', 'B', '14');
$pdf->Cell(40,6,'Date-of-Birth',0,0);
$pdf->setFont('Times', '', '14');
$pdf->Cell(0,6,":\t $dob",0,1);
$pdf->setFont('Times', 'B', '14');
$pdf->Cell(40,6,"Father's Name",0,0);
$pdf->setFont('Times', '', '14');
$pdf->Cell(0,6,":\t $father_name",0,1);
$pdf->setFont('Times', 'B', '14');
$pdf->Cell(40,6,'Nationality',0,0);
$pdf->setFont('Times', '', '14');
$pdf->Cell(0,6,":\t $nationality",0,1);
$pdf->setFont('Times', 'B', '14');
$pdf->Cell(40,6,'CNIC',0,0);
$pdf->setFont('Times', '', '14');
$pdf->Cell(0,6,":\t $cnic",0,1);
$pdf->setFont('Times', 'B', '14');
$pdf->Cell(40,6,'Domicile',0,0);
$pdf->setFont('Times', '', '14');
$pdf->Cell(0,6,":\t $domicile",0,1);

$pdf->Ln(2);
$pdf->setFont('Times', 'B', '22');
$pdf->setFillColor(239,83,80);
$pdf->Cell(0,13,'Education','TB',1,'C',1);

$pdf->Ln(2);
$pdf->setFont('Times', 'B', '14');
$pdf->Cell(40,6,'Board/University',0,0);
$pdf->setFont('Times', '', '14');
$pdf->Cell(0,6,":\t $board",0,1);
$pdf->setFont('Times', 'B', '14');
$pdf->Cell(40,6,"Class/Dept",0,0);
$pdf->setFont('Times', '', '14');
$pdf->Cell(0,6,":\t $class",0,1);
$pdf->setFont('Times', 'B', '14');
$pdf->Cell(40,6,'Grade/Division',0,0);
$pdf->setFont('Times', '', '14');
$pdf->Cell(0,6,":\t $grade",0,1);
$pdf->setFont('Times', 'B', '14');
$pdf->Cell(40,6,'Year',0,0);
$pdf->setFont('Times', '', '14');
$pdf->Cell(0,6,":\t $year",0,1);

$pdf->Ln(2);
$pdf->setFont('Times', 'B', '22');
$pdf->setFillColor(239,83,80);
$pdf->Cell(0,13,'Skills','TB',1,'C',1);

$pdf->Ln(2);
$pdf->setFont('Times', 'B', '14');
$pdf->Cell(0,6,$skill_1,0,1);
$pdf->Cell(0,6,$skill_2,0,1);
$pdf->Cell(0,6,$skill_3,0,1);

$pdf->Ln(2);
$pdf->setFont('Times', 'B', '22');
$pdf->setFillColor(239,83,80);
$pdf->Cell(0,14,'Languages','TB',1,'C',1);

$pdf->Ln(2);
$pdf->setFont('Times', 'B', '14');
$pdf->Cell(0,6,$lang_1,0,1);
$pdf->Cell(0,6,$lang_2,0,1);
$pdf->Cell(0,6,$lang_3,0,1);


$filename = $first_name."_CV";

$pdf->output('D',$filename);


}





 ?>
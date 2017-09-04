<?php

require('fpdf/fpdf.php');

$pdf = new FPDF();

//First page

$pdf->AddPage();


$pdf->SetFont('Arial','B',16);
$pdf->SetXY(90,10);
$pdf->image('pictures/nr.jpg');

$pdf->SetXY(50,40);
$pdf->Cell(30,5,'Needy Readers - Pending Book Donations');


$pdf->SetXY(70,40);
$pdf->SetFont('Arial','',10);
$dat=gmdate("F d, Y | l");
$pdf->Cell(0,20,"Report Date : $dat",0,1);

$pdf->SetXY(65,55);
$pdf->SetFont('','U');
$pdf->SetTextColor(0,0,255);
$pdf->Write(5,'For more details Vist : http://volunteers.imcds.org','http://volunteers.imcds.org/');

$pdf->SetY(70);

$pdf->SetTextColor(0,0,0);
//connect to database

include('server.php');

$q5="select * from donor where status='pend' ORDER BY doid DESC";
$r5=mysql_query($q5) or die("pend donor ERROR");
$countn=0;


$pdf->SetFont('Arial','',14);
// build the data array from the database records.

while($new=mysql_fetch_array($r5)){
$countn=$countn+1;
$d_name=$new['dname'];
$n_book=$new['nbook'];
$d_town=$new['dtown'];
$dtp=$new['dtele'];
$dmail=$new['demail'];
$dinfo=$new['dinfo'];
$vo_id=$new['uid'];
$do_id=$new['doid'];
$adate=$new['adate'];


$text = "$countn.  Name           : $d_name";
$text2 = "     Area             : $d_town";
$text3 = "     Telephone    : $dtp";
$text5 = "     Added date   : $adate";
$text4 = "-------------------------------------------------------------------------------------------------------------------";
$pdf->Cell(0,5,$text,0,1);
$pdf->Cell(0,7,$text2,0,1);
$pdf->Cell(0,7,$text3,0,1);
$pdf->Cell(0,7,$text5,0,1);
$pdf->Cell(0,10,$text4,0,1);

}
$pdf->SetFont('Arial','',12);
$text6="Copyright © 2013 www.imcds.org All Rights Reserved";
$pdf->Cell(0,10,$text6,0,1);

// start and build the PDF document

//Column titles
// call the table creation method


$pdf->Output();


?>

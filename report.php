<?php 
    include('connection_connect.php');
    $id = $_GET['paosom_id'];
$query = "SELECT * FROM transfer INNER JOIN store ON store.store_id = transfer.store_id INNER JOIN paosom ON paosom.paosom_id = transfer.paosom_id INNER JOIN user ON paosom.user_id = user.user_id where paosom.paosom_id=$id ORDER BY transfer_datetime desc LIMIT 0, 1 "; 
$result = mysqli_query($conn, $query);
$my_row = $result->fetch_assoc();
$paosom_id = $my_row['paosom_id'];
$store_id = $my_row['store_id'];
$store_name = $my_row['store_name'];
$paosom_no = $my_row['paosom_no'];
$store_no = $my_row['store_no'];
$fname = $my_row['fname'];
$lname = $my_row['lname'];
$transfer_datetime = $my_row['transfer_datetime'];
$amount = $my_row['amount'];
require('fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->AddFont('angsa','','angsa.php');
$pdf->SetFont('angsa','',24);
// $pdf->Cell(40,10,"{$paosom_id}");




$pdf->Cell(105,20,iconv('utf-8','cp874','ผู้โอน'),0,0,'R');
$pdf->ln();
$pdf->Cell(110,10,iconv('utf-8','cp874',"{$paosom_no}"),0,0,'R');
$pdf->ln();
$pdf->Cell(140,20,iconv('utf-8','cp874'," วันและเวลาโอน  {$transfer_datetime}"),0,0,'R');
$pdf->ln();
$pdf->Cell(108,20,iconv('utf-8','cp874',"{$fname}    {$lname}"),0,0,'R');
$pdf->ln();
$pdf->Cell(120,20,iconv('utf-8','cp874',"ถึง ร้านค้า{$store_name}"),0,0,'R');

$pdf->ln();
$pdf->Cell(115,20,iconv('utf-8','cp874',"{$store_no}"),0,1,'R');

$pdf->Cell(110,20,iconv('utf-8','cp874','จำนวนเงิน'),0,0,'R');
$pdf->ln();
$pdf->Cell(110,20,iconv('utf-8','cp874',"{$amount} บาท"),0,0,'R');

$pdf->Image('img\paosom.png',60,200,90,0,'PNG');
ob_end_clean();
$pdf->Output();
?>
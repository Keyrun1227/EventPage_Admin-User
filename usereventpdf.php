<?php
$conn = mysqli_connect('localhost:3908','root','','stepcone_db');
require_once 'FPDF/fpdf.php';
session_start();
$kiran = $_SESSION['emai'];
$query="SELECT * from eventregisteration WHERE  email='$kiran' "; 
$result=mysqli_query($conn,$query);
if(!isset($_SESSION['user_name'])){
	header('location:index.php');
}

  $pdf= new FPDF('p','mm','a4');
  $pdf->SetFont('arial','b','14');
  $pdf->AddPage();
  $pdf->cell('190','10',"Event Registered List" ,'1','1','C');
  $pdf->cell('80','10','Email', '1','0','C');
  $pdf->cell('40','10','type', '1','0','C');
  $pdf->cell('70','10','event', '1','1','C');

  $pdf->SetFont('arial','','12');
  //$pdf->Output();
  while($k=mysqli_fetch_array($result))
  {
    $pdf->SetFont('arial','b','14'); 
    $pdf->cell('80','10',$k['email'], '1','0','C');
    $pdf->cell('40','10',$k['type'], '1','0','C');
    $pdf->cell('70','10',$k['event'], '1','1','C');
  }
   $pdf->Output();
?>
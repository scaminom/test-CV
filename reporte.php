<?php
require('./fpdf186/fpdf.php');
require('./models/conexion.php');
$sqlSelect = "SELECT * FROM estudiantes";
$result = $conexion->query($sqlSelect);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(40, 10, 'Reporte de Estudiantes');
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(40, 10, 'Cedula');
$pdf->Cell(40, 10, 'Nombre');
$pdf->Cell(40, 10, 'Apellido');
$pdf->Cell(40, 10, 'Telefono');
$pdf->Cell(40, 10, 'Direccion');
$pdf->Ln();
$pdf->SetFont('Arial', '', 12);

while ($row = $result->fetch_assoc()) {
    $pdf->Cell(40, 10, $row['CED_EST']);
    $pdf->Cell(40, 10, $row['NOM_EST']);
    $pdf->Cell(40, 10, $row['APE_EST']);
    $pdf->Cell(40, 10, $row['TEL_EST']);
    $pdf->Cell(40, 10, $row['DIR_EST']);
    $pdf->Ln();
}

$pdf->Output();

?>
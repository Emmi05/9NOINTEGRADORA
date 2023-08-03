<?php

require "../db.php";
require "plantilla.php";

// $sql = "SELECT*FROM Alumno WHERE AlumnoEstatus ='Baja temporal' ";
// $resultado = $conex->query($sql);

$pdf = new PDF("P", "mm", "letter");
$pdf->AliasNbPages();
$pdf->Addpage();
$pdf->Ln(50); //lo que se va a imprimir
$pdf->SetFont("Arial", "", 12);
//columnas xd 
 $pdf->Cell(30, 55, "1.Elaboracion de la segunda didactica del curso",  "C");
 $pdf->Cell(-30);
 $pdf->Ln(5);
 $pdf->Cell(0, 65, "2.100% del contenido de los programas de estudio",  "C");
 $pdf->Ln(10);
 $pdf->Cell(0, 65, "3.Entrega de evaluaciones parciales",  "C");

 $pdf->Ln(10);
 $pdf->Cell(0, 65, "4.Programas de trabajo academico",  "C");

 $pdf->Ln(6);
 $pdf->Cell(0, 65, "en horas de apoyo a la docencia, resultados",  "C");

 $pdf->Ln(10);
 $pdf->Cell(0, 65, "5.Reporte de indices de repribacion y desercion",  "C");

 $pdf->Ln(10);
 $pdf->Cell(0, 65, "6.Reporte de indices de repribacion y desercion",  "C");

 $pdf->Ln(19);
 $pdf->Cell(0, 65, "Notas",  "C");

 $pdf->Ln(10);
 $pdf->Cell(0, 65, "1.La columna de entrega a tiempo es unicamente para medicion de la eficencia por parte del profesor en",  "C");
 $pdf->Ln(5);
 $pdf->Cell(0, 65, "aplicacion del Procedimiento del Sistema de Gestion de calidad para la gestion del curso",  "C");
 
 $pdf->Ln(10);
 $pdf->Cell(0, 65, "Lo anterior, segun lo establecido con el Reglamento Interior de trabajo del personal docente",  "C");
 
 $pdf->Ln(10);
 $pdf->Cell(0, 65, "Para los fines legales que al interesado convengan, se extiende la presente constancia a los ** dias",  "C");
 $pdf->Ln(5);
 $pdf->Cell(0, 65, "mes de ** de **",  "C");

//  $pdf->Ln(10);
//  $pdf->Cell(0, 65, "coordinador de carrera",  "C");
 
 
// $pdf->Cell(40, 5, "..", "C");
// $pdf->Cell(40, 5, "..", "C");

// while($row = $resultado->fetch_assoc()){
//     $pdf->cell(25, 10, $row['AlumnoID'], 1, 0,'C', 0);
//     $pdf->cell(30, 10, $row['CandidatoID'], 1, 0,'C', 0);
//     $pdf->cell(25, 10, $row['CarreraID'], 1, 0,'C', 0);
//     $pdf->cell(40, 10, $row['AlumnoMatricula'], 1, 0,'C', 0);
//     $pdf->cell(40, 10, $row['AlumnoFecha'], 1, 0,'C', 0);
//     $pdf->cell(40, 10, $row['AlumnoEstatus'], 1, 1,'C', 0);
// }



$pdf->Output();//imprime

?>
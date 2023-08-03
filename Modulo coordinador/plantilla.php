<?php
// require"../FPDF/fpdf.php";
require('../pdf/fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    //Logo
    $this->Image('../img/logo2.png',10,8,25);
    // // Arial bold 15
    $this->SetFont("Arial", "B", 12);
    // Movernos a la derecha
    $this->Cell(30);
    // $this->SetDrawColor(0,80,180);
    // $this->SetFillColor(230,230,0);
    // $this->SetTextColor(220,50,50);
    $this->Cell(155,10,'Nombre del documento:Constancia de liberacion de actvidades docentes',1,0,'R');
    $this->Cell(-50);
     $this->Cell(65,50,utf8_decode("Asunto:"));
    // Título
  
    $this->Cell(-155,100,"A quien corresponda",0,0,"R");
    $this->Cell(-48);
    $this->Cell(50,125,utf8_decode("Por medio de la presente se hace constar que durante el cuatrimestre x el docente x cumplio con:"));
    // Salto de línea
    $this->Ln(5);
    $this->Cell(120);
    $this->Cell(-100,155,utf8_decode("En tiempo"));
    $this->Cell(130);
    $this->Cell(40, 155, "Destiempo", "C");
    $this->Cell(-189);
    $this->Cell(50,300,utf8_decode("Observacion mostro un **** desempeño para sus actidades del cuatrimestre *** "));
    $this->Cell(-189);
    $this->Ln(5);
    $this->Cell(20);
    $this->Cell(0,411,utf8_decode("Cooordinador de carrera "));
    $this->Cell(-100);
    $this->Cell(0,410,utf8_decode("Director (A) Academico"));

    
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}
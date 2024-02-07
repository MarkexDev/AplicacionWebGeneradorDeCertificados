<?php 

require('../librerias/fpdf/fpdf.php');
include_once('../configuraciones/bd.php');

$conexionBD = BD::crearInstancia();


$idcurso=isset($_GET['idcurso'])?$_GET['idcurso']:'';
$idalumno=isset($_GET['idalumno'])?$_GET['idalumno']:'';

$sql="SELECT alumnos.nombre, alumnos.apellidos, cursos.nombre_curso
FROM alumnos, cursos WHERE alumnos.id=:idalumno AND cursos.id=:idcurso";
$consulta=$conexionBD->prepare($sql);
$consulta -> bindParam(':idalumno',$idalumno);
$consulta -> bindParam(':idcurso',$idcurso);
$consulta -> execute();
$alumno=$consulta->fetch(PDO::FETCH_ASSOC);


function agregarText($pdf,$texto,$x,$y,$align='L',$fuente,$size=32,$r=0,$g=0,$b=0){
    $pdf -> SetFont ($fuente,"", $size);
    $pdf -> SetXY($x,$y);
    $pdf -> SetTextColor($r,$g,$b);
    $pdf -> Cell(0,10,$texto,0,0,$align);
    
}

function agregarImagen($pdf,$imagen,$x,$y){
    $pdf -> Image($imagen,$x,$y,0);
}


$pdf = new FPDF("L","cm",array(87,67));
$pdf -> AddPage();
$pdf ->setFont("Arial","B",16);
agregarImagen($pdf,"../src/certificado_.jpg",0,0);
agregarText($pdf,ucwords(utf8_decode($alumno['nombre']." ".$alumno['apellidos'])),2,25,'C','Arial',120,0,0,0);
agregarText($pdf,ucwords(utf8_decode($alumno['nombre_curso'])),1,37,'C','Arial',100,0,0,0);
agregarText($pdf,date("d/m/Y"),17,48,'L','Arial',40,0,0,0);
$pdf -> Output();


 ?>
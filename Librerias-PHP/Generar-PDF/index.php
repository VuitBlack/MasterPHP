<?php
require '../vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

//RECOGER LA VISTA A IMPRIMIR.
ob_start();    //abre el comado ob_start         
require_once "pdf_Generator.php";       //recoge todo lo que haya acontinuación.
$html = ob_get_clean();     //guardo todo dentro de la variable html

$html2pdf->writeHTML($html);  //pasamos el contenido de la variable para generar el PDF
$html2pdf->output('PDF_generado.pdf');  //generamos el PDF.

?>
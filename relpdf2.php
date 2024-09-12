<?php

require_once 'vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$css = file_get_contents('style.css');
$html = '<h3> OI </h3>';


$mpdf->WriteHTML($css,\Mpdf\HTMLParserMode::HEADER_CSS);
$mpdf->WriteHTML($html,\Mpdf\HTMLParserMode::HTML_BODY);

$mpdf->Output();
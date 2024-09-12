<?php

require_once 'vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();

$mpdf->WriteHTML('<h3> OI </h3>');

$mpdf->Output();

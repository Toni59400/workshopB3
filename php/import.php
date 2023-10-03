<?php
require('header.php');

require '../vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$file = '../files/rna_waldec_20230901_dpt_01.csv';
//$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($file);

//$inputFileType = \PhpOffice\PhpSpreadsheet\IOFactory::identify($file);
/**  Create a new Reader of the type that has been identified  **/
$reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();

//$reader->setReadDataOnly(true);
//$reader->setReadFilter(true);

$spreadsheet = $reader->load($file);

var_dump($spreadsheet);
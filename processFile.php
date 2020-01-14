<?php

require_once('CSVFileReader.php');
require_once('DisplayCSVInfo.php');

$key_value_array = [];

$CSVFileReader = new CSVFileReader();

$key_value_array = $CSVFileReader->processCSVFile();

$DisplayCSVInfo = new DisplayCSVInfo($key_value_array);

$DisplayCSVInfo->displayData();








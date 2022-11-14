<?php

declare(strict_types=1);

use IcarosNet\DateValidator\DateValidator;

require_once __DIR__."/../vendor/autoload.php";

$date_validator = new DateValidator();

//String parsing and main date formats:

var_dump($date_validator->ValidateDate('10/10/1999 20:40'));
echo '<br>';
var_dump($date_validator->ValidateDate('09/09/2010 08:40 PM'));
echo '<br>';

//Analysis (Validation) and Date Format Conversion:
echo 'Correct date->10/10/1999 20:40 a: ';
if($date_validator->ValidateDate('10/10/1999 20:40')){
    var_dump($date_validator->FormatDate('10/10/1999 20:40'));
}

echo '<br>';
echo 'Correct date->09/09/2010 08:40 PM to: ';
if($date_validator->ValidateDate('09/09/2010 08:40 PM')){
    var_dump($date_validator->FormatDate('09/09/2010 08:40 PM'));
}

echo '<br>';
echo 'Incorrect Date->09/XX/2010 0N:40 PM to: ';
if($date_validator->ValidateDate('09/XX/2010 0N:40 PM')){
    var_dump($date_validator->FormatDate('09/XX/2010 0N:40 PM'));
}else{
    echo 'Format not supported';
}

echo '<br>';
echo 'Bad Date->09--09--2010 20%40 to: ';
if($date_validator->ValidateDate('09--09--2010 20%40')){
    var_dump($date_validator->FormatDate('09--09--2010 20%40'));
}else{
    echo 'Format not supported';
}

//Inserting a different format to the analysis to support it in the validation:
echo '<br>';
echo 'Date new format d--m--Y H%i -> : ';
var_dump($date_validator->addFormat('d--m--Y H%i')->ValidateDate('09--09--2010 20%40'));

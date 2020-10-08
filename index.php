<?php

require_once 'NumberGenerator.php';
require_once 'Functions.php';

$generator = new NumberGenerator();
$newNumber = $generator->getNumber();


$numberFile = new Functions('file.txt');
$numberFile->addNumber($newNumber);

echo "Number: " . $newNumber . PHP_EOL;
echo "Average: " . $numberFile->getAverage() . PHP_EOL;
<?php

declare(strict_types=1);

$lines = file('data/input_1.txt');
$count = 0;

$dataArr = [];
$i = 0;
foreach ($lines as $line) {
    if ( strlen($line) > 1 ) {
        $dataArr[$i][] = $line;
    } else {
        $i++;
    }
}

$elfsData = [];

foreach ($dataArr as $k =>  $elf) {
    $elfsData[$k] = array_sum($elf);
}

$elfsDataKeys = $elfsData;

sort($elfsData, SORT_NUMERIC );

$mostProductively = array_slice($elfsData, -3, 3);

echo 'Three elfs get : '. array_sum($mostProductively);

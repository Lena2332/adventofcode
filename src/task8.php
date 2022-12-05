<?php

declare(strict_types=1);

$lines = file('data/input_4.txt');

$dataArr = [];
$score = 0;

foreach ($lines as $line) {
    $dataRange = explode(',', trim($line));
    $fElf = $dataRange[0];
    $sElf = $dataRange[1];
    // echo  $line. " --- " . isContain($fElf, $sElf) . "<br>";
    if (isContain($fElf, $sElf)) {
        $dataArr[] = $line;
    }
}

function isContain(string $fElf, string $sElf) {
    if ($fElf === $sElf) {
        return true;
        //return 'equal';
    }

    $fElfData = explode('-', $fElf);
    $fElfArr = makeArr((integer) $fElfData[0], (integer) $fElfData[1]);

    $sElfData = explode('-', $sElf);
    $sElfArr = makeArr((integer) $sElfData[0], (integer) $sElfData[1]);

    $result=array_intersect($fElfArr, $sElfArr);

    if ( !empty($result) ) {
        return true;
    }

    return false;
}

function makeArr(int $first, int $last) {
    $arr = [];

    while($first <= $last) {
        $arr[] = $first;
        $first++;
    }

    return $arr;
}

echo 'Contain range: ' . count($dataArr);




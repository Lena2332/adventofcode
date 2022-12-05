<?php

declare(strict_types=1);

$lines = file('data/input_4.txt');

$dataArr = [];
$score = 0;

foreach ($lines as $line) {
    $dataRange = explode(',', trim($line));
    $fElf = $dataRange[0];
    $sElf = $dataRange[1];
    echo  $line. " --- " . isContain($fElf, $sElf) . "<br>";
    if (isContain($fElf, $sElf)) {
        $dataArr[] = $line;
    }
}

function isContain($fElf, $sElf) {
    if ($fElf === $sElf) {
        return true;
        //return 'equal';
    }

    $fElfData = explode('-', $fElf);
    $fCountRange = $fElfData[1] - $fElfData[0];

    $sElfData = explode('-', $sElf);
    $sCountRange = $sElfData[1] - $sElfData[0];

    // if first contain the second
    if (
        $fElfData[0] <= $sElfData[0] &&
        $fElfData[1] >= $sElfData[1] &&
        $fCountRange >= $sCountRange
    ) {
        return true;
        //return 'first contain the second';
    }

    // if contain second the first
    if (
        $sElfData[0] <= $fElfData[0] &&
        $sElfData[1] >= $fElfData[1] &&
        $sCountRange >= $fCountRange
    ) {
        return true;
        //return 'second contain the first';
    }

    return false;
}

echo 'Contain range: ' . count($dataArr);
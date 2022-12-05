<?php

declare(strict_types=1);

$lines = file('data/input_2.txt');

$dataArr = [];
$score = 0;

foreach ($lines as $line) {
    echo $line[0] . ' ' . $line[2] . ' ---' . getScore($line[0], $line[2])."<br>";
    $score += getScore($line[0], $line[2]);
}

echo 'My total score: ' . $score;

function getScore($first, $second) {
    $counts = 0;

    $letterScore = [
        'X' => 1,
        'Y' => 2,
        'Z' => 3
    ];

    $drawGame = [
        'A' => 'X',
        'B' => 'Y',
        'C' => 'Z',
    ];

    $looseGame = [
        'A' => 'Z',
        'B' => 'X',
        'C' => 'Y',
    ];

    $winGame = [
        'A' => 'Y',
        'B' => 'Z',
        'C' => 'X',
    ];

    switch ($second) {
        case 'X': $counts = 0; $newSecond = $looseGame[$first]; break;
        case 'Y': $counts = 3; $newSecond = $drawGame[$first]; break;
        case 'Z': $counts = 6; $newSecond = $winGame[$first]; break;
    }

    $counts += $letterScore[$newSecond];

    return $counts;
}
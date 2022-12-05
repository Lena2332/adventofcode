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

    switch ($second) {
        case 'X': $counts = 1; break;
        case 'Y': $counts = 2; break;
        case 'Z': $counts = 3; break;
    }

    if (
        ( $second === 'X' && $first === 'A' ) ||
        ( $second === 'Y' && $first === 'B' ) ||
        ( $second === 'Z' && $first === 'C' )
    ) {
        $counts += 3;
    } elseif (
        ( $second === 'X' && $first === 'C' ) ||
        ( $second === 'Z' && $first === 'B' ) ||
        ( $second === 'Y' && $first === 'A' )
    ) {
        $counts += 6;
    }

    return $counts;
}


<?php

declare(strict_types=1);

$lines = file('data/input_3.txt');

$dataArr = [];
$score = 0;

foreach ($lines as $line) {
    $length = strlen(trim($line))/2;
    $parts = str_split($line, $length);
    $result = array_intersect(str_split($parts[0]), str_split($parts[1]));
    if (!empty($result)) {
        $score += getNumberOfLetter(array_shift($result));
    }
}

echo 'My total score: ' . $score;

function getNumberOfLetter(string $letter) {
    $number = ord(strtoupper($letter)) - ord('A') + 1;
    if (ctype_upper($letter)) {
        return $number + 26;
    }
    return $number;
}

<?php

declare(strict_types=1);

$lines = file('data/input_3.txt');

$dataArr = [];
$score = 0;
$i = 1;

foreach ($lines as $line) {
    $dataArr[] = trim($line);
    if ($i % 3 == 0) {
        $result = array_intersect(str_split($dataArr[0]), str_split($dataArr[1]), str_split($dataArr[2]));
        if (!empty($result)) {
            $score += getNumberOfLetter(array_shift($result));
        }

        $dataArr = [];
    }

    $i++;
}

echo 'My total score: ' . $score;

function getNumberOfLetter(string $letter) {
    $number = ord(strtoupper($letter)) - ord('A') + 1;
    if (ctype_upper($letter)) {
        return $number + 26;
    }
    return $number;
}

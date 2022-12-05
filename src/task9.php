<?php

declare(strict_types=1);

$arr_1 = ['N','D','M','Q','B','P','Z'];
$arr_2 = ['C','L','Z','Q','M','D','H','V'];
$arr_3 = ['Q','H','R','D','V','F','Z','G'];
$arr_4 = ['H','G','D','F','N'];
$arr_5 = ['N','F','Q'];
$arr_6 = ['D','Q','V','Z','F','B','T'];
$arr_7 = ['Q','M','T','Z','D','V','S','H'];
$arr_8 = ['M','G','F','P','N','Q'];
$arr_9 = ['B','W','R','M'];

$lines = file('data/input_5.txt');

foreach ($lines as $line) {
    $lineArr = explode(' ', trim($line));
    movement((int) $lineArr[1], (int) $lineArr[3], (int) $lineArr[5]);
}

echo end($arr_1).end($arr_2).end($arr_3).end($arr_4).end($arr_5).end($arr_6).end($arr_7).end($arr_8).end($arr_9);

function movement(int $times, int $arr_num, int $to_arr_num) {
    $i = 0;

    global $arr_1, $arr_2, $arr_3, $arr_4, $arr_5, $arr_6, $arr_7, $arr_8, $arr_9;

    while ($i < $times) {
        $movement_item = array_pop(${'arr_'.$arr_num});
        if ($movement_item) {
            array_push(${'arr_'.$to_arr_num}, $movement_item);
        }
        $i++;
    }
}

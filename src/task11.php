<?php

declare(strict_types=1);

$line = trim(file_get_contents('data/input_6.txt'));

$charactersArr = str_split($line);
$startArr = array_slice($charactersArr, 0, 4);

foreach ( $charactersArr as $k => $simbol ) {

   if (find( $startArr, $simbol)) {
       echo 'Answer is: ' . $k;
       break;
   }
}

function find( array &$startArr, string $simbol ) {
    if ( count(array_unique($startArr)) === 4) {
        return true;
    } else {
        array_push($startArr, $simbol);
        $startArr  = array_slice($startArr, -4);
        return false;
    }
}
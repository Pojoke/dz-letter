<?php
/*Бібліотека */

/**
 * Summary of reverseString
 * @param mixed $str
 * @return string
 */
function reverseString($str) {
    return strrev($str);
}

function removeEverySecondWord($text) {
    $words = explode(" ", $text);
    $result = [];

    foreach ($words as $index => $word) {
        if ($index % 2 == 0) {
            $result[] = $word;
        }
    }

    return implode(" ", $result);
}
// echo $str_reversed;
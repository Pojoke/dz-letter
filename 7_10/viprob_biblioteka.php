<?php
require_once "biblioteka.php";
$str  = "Goodmorning";
$str_reversed = reverseString($str);
echo $str_reversed;

$text = "dad and mom and sister";
$result_text = removeEverySecondWord($text);

echo $result_text;
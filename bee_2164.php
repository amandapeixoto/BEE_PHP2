<?php
$n = readline();

$fib = ((pow(((1 + sqrt(5)) / 2),$n)) - (pow(((1 - sqrt(5)) / 2), $n))) / sqrt(5);

$var = number_format($fib, 1, '.', '');

echo $var;
?>
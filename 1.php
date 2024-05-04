<?php
function NOD($a, $b)
{
    while ($b != 0) {
        $res = $a % $b;
        $a = $b;
        $b = $res;
    }
    return $a;
}
function NOK($a, $b)
{
    return ($a * $b) / NOD($a, $b);
}
$a = readline("Введите число a: ");
$b = readline("Введите число b: ");
echo "НОК $a и $b = " . NOK($a, $b);

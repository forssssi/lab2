<?php
$N = readline("Введите число: ");
function isprime($num)
{
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}
function is2prime($num)
{
    $digits = str_split((string)$num);
    $ascending = $digits;
    sort($ascending);
    $descending = array_reverse(($ascending));
    return $digits == $ascending || $digits === $descending;
}

if (isprime($N) && is2prime($N)) {
    echo "Yes";
} else {
    echo "No";
}

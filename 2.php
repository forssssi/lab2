<?php
$k = readline("Введите кол-во дней: ");

if ($k % 3 == 0) {
    echo ("GCV");
} else if ($k % 3 == 1) {
    echo ("VGC");
} else if ($k % 3 == 2) {
    echo ("CVG");
}

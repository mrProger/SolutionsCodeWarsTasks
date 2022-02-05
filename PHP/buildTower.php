<?php

function buildTower($n): array {
    $tower = array();

    for ($i = 0, $j = 0; $i, $j < $n; $i++, $j++) {
        $tower[$i] = str_repeat(' ', $n - $i - 1).''.str_repeat("*", $i + 1 + $j).''.str_repeat(' ', $n - $i - 1);
    }

    return $tower;
}
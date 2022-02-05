<?php

function alphabet_position($str) {
    $str = strtolower($str);
    $alphabet = range('a', 'z');

    $result = "";

    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $alphabet)) {

            $result .= $result == "" ? array_search($str[$i], $alphabet) + 1 : " ".array_search($str[$i], $alphabet) + 1;
        }
    }

    return $result;
}
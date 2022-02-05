<?php

function splitString($str) {
    $arr = array();

    if (strlen($str) % 2 != 0) {
        $str .= '_';
    }

    for ($i = 0; $i < strlen($str); $i += 2) {
        array_push($arr, $str[$i]."".$str[$i + 1]);
    }

    return $arr;
}
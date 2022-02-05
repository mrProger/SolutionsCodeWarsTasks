<?php

function wave($people) {
    $result = array();
    $arr_split = str_split($people);

    for ($i = 0; $i < strlen($people); $i++) {
        if (trim($people[$i]) != '') {
            $arr_split[$i] = ucfirst($arr_split[$i]);
            array_push($result, implode('', $arr_split));
            $arr_split[$i] = lcfirst($arr_split[$i]);
        }
    }

    return $result;
}

var_dump(wave("hello"));
var_dump(wave(" gap "));
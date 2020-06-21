<?php

function delArray($arr, $a)
{
    $arrLength = count($arr);

    for ($i = $arrLength; $i >= 0; $i--) {
        if ($arr[$i] === $a) {
            array_splice($arr,$i,1);
        }
    }
return $arr;
}

print_r(delArray([2,2,2,4,6,8,5,2,2],2));
<?php

function countNumber($arr1,$a) {
    $count = 0;
    $arr = str_split($arr1);
    $arrLength = count($arr);

    for ($i=0;$i<$arrLength;$i++) {
        if ($arr[$i] === $a) {
            $count++;
        }
    }

    return $count;
}

echo countNumber("thgfttab","t");
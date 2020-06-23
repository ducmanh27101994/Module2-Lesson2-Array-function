<?php

function totalArray($arr) {

    $total1 = 0;
    $total2 = 0;
    $arrLength = count($arr[0]);

    for ($i=0;$i<$arrLength;$i++) {
        $total1 += $arr[$i][$i];
    }

    for ($j = $arrLength-1,$i=0; $i<$arrLength, $j>=0;$i++,$j--) {
        $total2 += $arr[$i][$j];
    }
    $total = $total1 + $total2;
return $total;
}

echo totalArray([
    [4,6,3],
    [4,0,2],
    [10,6,1]]);
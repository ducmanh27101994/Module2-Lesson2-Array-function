<?php

function minArray($arr)
{
    $arrLength = count($arr);
    $min = $arr[0];

    for ($i = 0; $i < $arrLength; $i++) {
        if ($min > $arr[$i]) {
            $min = $arr[$i];
            $index = $i;
        }
    }
    echo "Giá trị nhỏ nhất là $min tại vị trí $index";
}

minArray([4,2,1,-9,4,2,7,0]);
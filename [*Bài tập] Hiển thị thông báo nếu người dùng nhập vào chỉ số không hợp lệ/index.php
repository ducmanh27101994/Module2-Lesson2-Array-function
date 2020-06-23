<?php

function checkIndex($a)
{
    for ($i = 0; $i < 100; $i++) {
        $arr[$i] = rand(0, 99);
    }
    if ($a < 100 && $a >= 0) {
        echo "Giá trị của phần tử có chỉ số $a là $arr[$a]";
    } else {
        throw new Exception("Chỉ số vượt quá giới hạn của mang");
    }

}


try {
    checkIndex(100);
    checkIndex(-100);
} catch (Exception $e) {
    echo $e ->getMessage();
}

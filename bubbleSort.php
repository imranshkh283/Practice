<?php
$arr = [3, 4, 1, 2];
function bubbleSort($arr)
{
    $len = count($arr);
    $temp = '';
    for ($i = 0; $i < $len; $i++) {
        for ($j = 0; $j < $len - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}

print_r(bubbleSort($arr));

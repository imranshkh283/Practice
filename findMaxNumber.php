<?php
$arr = [12, 5, 20, 6, 45];
function findMaxNumber($arr)
{
    $len = count($arr);
    $max = $arr[0];
    for ($i = 0; $i < $len; $i++) {

        if ($arr[$i] > $max) {
            $max = $arr[$i];
        }
    }

    return $max;
}

print_r(findMaxNumber($arr));

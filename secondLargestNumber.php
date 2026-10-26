<?php
// $arr = [12, 5, 20, 8, 15];
$arr = [45, 75, 13, 90, 23];

$large = $arr[0];
$secondLarge = 0;

$count = count($arr);

for ($i = 1; $i < $count; $i++) {

    if ($arr[$i] > $large) {
        $secondLarge = $large;
        $large = $arr[$i];
    } elseif ($arr[$i] > $secondLarge && $arr[$i] < $large) {
        $secondLarge = $arr[$i];
    }
}

echo $large;
echo '<br>';
echo $secondLarge;

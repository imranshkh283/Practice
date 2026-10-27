<?php
$arr = [4, 7, 2, 7, 9, 4, 1];

$duplicate = [];
$findDup = [];
$cnt = count($arr);

for ($i = 0; $i < $cnt; $i++) {
    if (isset($duplicate[$arr[$i]])) {
        $duplicate[$arr[$i]]++;
    } else {
        $duplicate[$arr[$i]] = 1;
    }
}

foreach ($duplicate as $number => $count) {
    if ($count > 1) {
        $findDup[] = $number;
    }
}

/*

*/
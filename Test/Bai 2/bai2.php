<?php

$a = [10,3,21,8,9,8,12,70,8,9,33];

$dem = 0;
$vitri = [];

foreach($a as $index => $value)
{
    if($value == 8)
    {
        $dem++;
        $vitri[] = $index + 1;
    }
}

echo "Số lần xuất hiện của số 8 trong mảng là: ".$dem."<br>";

echo "Các vị trí xuất hiện: " . implode(", ", $vitri);
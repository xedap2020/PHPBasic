<?php

$a = [10,3,21,8,9];

$n = count($a);

for($i = 0; $i < $n; $i++)
{
    for($j = 0; $j < $n - $i - 1; $j++)
    {
        if($a[$j] > $a[$j + 1])
        {
            $tmp = $a[$j];
            $a[$j] = $a[$j+1];
            $a[$j + 1] = $tmp;
        }
    }
}

echo "Mảng sau khi sắp xếp là: ".implode(", ", $a);

// 10 3 21 8 9
// Vòng lặp 1
// j = 0 <= 3 
// 3 10 21 8 9
// 3 10 21 8 9
// 3 10 8 21 9
// 3 10 8 9 21
// Vòng lặp 2
// j = 1 <= 3
// 3 8 10 9 21
// 3 8 9 10 21
// 3 8 9 10 21


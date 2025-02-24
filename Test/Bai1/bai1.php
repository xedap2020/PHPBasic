<?php

function checkSNT($n)
{
    if($n < 2)
    {
        return false;
    }
    for($i = 2; $i <= sqrt($n); $i++)
    {
        if($n % $i == 0)
        {
            return false;
        }
    }
    return true;
}

// Cách 2: có thể sử dụng sàng số nguyên tố


$dem = 0;
$demSNT = [];
$tmp = 31;

while($dem < 20)
{
    if(checkSNT($tmp))
    {
        $demSNT[] = $tmp;
        $dem++;
    }
    $tmp++;
}

echo "20 số nguyên tố đầu tiên lớn hơn 30 là: ".implode(", ", $demSNT);

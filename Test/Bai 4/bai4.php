<form method="POST">
    <input type="number" name = "n" placeholder="Nhập số n" required> 
    <button type="submit">Tính Giai Thừa</button>
</form>

<?php


if($_SERVER["REQUEST_METHOD"] == 'POST')
{
    $n = $_POST["n"];

    if($n < 0)
    {
        echo "Số nhập vào không được âm.";
        exit;
    }

    function giaiThua($n)
    {
        if($n == 0 || $n == 1)
            {
                return 1;
            }

            $giaiThua = 1;
            for($i = 2; $i <= $n; $i++)
            {
                $giaiThua *= $i;
            }
            return $giaiThua;
    }
    // function giaiThua($n)
    // {
    //     if($n == 0 || $n ==1)
    //     {
    //         return 1;
    //     }
    //     else
    //     {
    //         return $n * giaiThua($n -1);
    //     }
    // }
    
    echo "Giai thừa của $n là: " . giaiThua($n);
}

?>

<form method="POST">
    <input type="number" name = "a" placeholder="Nhập số a" required>
    <input type="number" name = "b" placeholder="Nhập số b" required>
    <input type="number" name = "c" placeholder="Nhập số c" required>
    <button type="submit">Kết quả</button>
</form>

<?php
if($_SERVER["REQUEST_METHOD"] == 'POST')
{
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];

    if($a < 0 || $b < 0 || $c < 0)
    {   
        echo "Các số nhập vào không được âm.";
        exit;
    }

    $delta = $b * $b - 4 * $a * $c;

    if($delta > 0)
    {
        $x1 = (-$b - sqrt($delta)) / (2 * $a);
        $x2 = (-$b + sqrt($delta)) / (2 * $a);
        echo "Nghiệm thứ nhất x1 = $x1 <br>";
        echo "Nghiệm thứ hai x2 = $x2";
    } 
    elseif($delta == 0)
    {
        echo "Nghiệm kép x = ". (-$b / (2 * $a));
    }
    else
    {
        echo "Phương trình vô nghiệm";
    }
}
?>
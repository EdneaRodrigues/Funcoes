
<?php
function subtracao1($s, $v) 
{

    return $s - $v;
}

echo subtracao1(5, 10) . "<br>";
echo subtracao1(2.4, 3.6) . "<br>";

echo "<br>";

function subtracao2(int $s, int $v)
{
    return $s - $v;
}

echo subtracao2(8, 12) . "<br>";
echo subtracao2(9.5, 3.6) . "<br>";

echo "<br>";


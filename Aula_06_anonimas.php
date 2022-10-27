
<?php

$soma = function ($z, $x) 
{
    return $z + $x;
};

echo $soma(4, 3) . "<br>";


echo "<br>";


function fazer ($z, $x, $al, $funcao) 
{
    $valor = $funcao($a, $b);
    echo "$a $op $b = $valor <br>";
}

fazer(12, 21, '+', $soma);


echo "<br>";


$divisao = function($z, $x )
{
    return $z / $x;
};

executar(8, 2, '/', $divisao);


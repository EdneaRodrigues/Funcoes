
<?php
function soma($d, $f) 
{
    return $d + $f;
}

echo soma(19, 63) . "<br>";
echo soma(8, 3, 9) . "<br>";

echo "<br>";

/*function somaCompleta(...$valor) 
{
    $soma = 0;
    foreach($valor as $val) 
    {
        $soma += $valor;
    }
    return $soma;
}

echo somaCompleta(4, 8, 5, 9, 7);*/

echo "<br>";

/*function membros($tema, ...$fantasia) 
{
    echo "tema: $tema <br>";
    if($fantasia) 
    {
        foreach($Fantasia as $fant) 
        {
            echo "Fantasia: $fant<br>";
        }
    }
}

echo "<br>";
membros("Amigo", "companheiro", "amiga", "Mariana");

echo '<br>';
membros("Marcos", "Silva");*/
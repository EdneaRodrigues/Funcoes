
<?php
function ContarHistoria() 
{
    return "Ola Mundo(a)!";
}

ContarHistoria();
$m = ContarHistoria();
echo $m;
echo "<br>", ContarHistoria();
echo "<br>";

echo "<br>";

function ContarHistoriaComTitulo($nome) 
{
    return "Ola Mundo, {$nome}!";
}

echo "<br>", ContarHistoriaComTitulo("Sitio");
echo "<br>", obterMensagemComNome("Pica-pau");

echo "<br>";

function soma($c, $d) 
{
    return $c + $d;
    
}

$x = 8;
$y = 7;
echo "<br>", soma(32, 80);
echo "<br>", soma($x, $y);



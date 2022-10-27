
<?php
function comecandoAEstudar() 
{
    echo "Vamos estudar? <br>";
    echo "Vamos aprender programar PHP!<br>";
}

comecandoAEstudar();
comecandoAEstudar();
comecandoAEstudar();

echo "<br>";

$variavel = 4;

function acharValor() 
{
    $variavel = 6;
    echo "Descubra o valor: $variavel <br>";
}

echo "depois: $variavel <br>";
acharValor();
echo "Antes: $variavel <br>";

echo "<br>";

function acharValorCerto() 
{
    global $variavel;
    $variavel = 8;
    echo "Descubra o valor: $variavel <br>";
}

echo "Depois: $variavel <br>";
trocaValorDeVerdade();
echo "Antes: $variavel <br>";
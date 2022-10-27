
<?php
function comprimento($nome = "Amigo (a)", $sobrenome = "Funcionario") 
{
    return "Ola Vida, $nome $sobrenome!<br>";
}

echo comprimento();
echo comprimento(null);
echo comprimento(null, null);
echo comprimento("Professor", "Aluno");

echo "<br>";

function fazerEncomenda($doces, $chocolate = "bebida") 
{
    echo "Para decustar: $salgado <br>";
    echo "Para ingerir: $suco <br>";
}

anotarPedido("cachorro quente");
//anotarPedido("massa", "suco");

echo "<br>";

function fazerEncomenda2($Salgado = "Água", $sobremesa) {
    echo "Para comer: $sobremesa <br>";
    echo "Para beber: $suco <br>";
}


anotarPedido2("--suco2", "massa2");
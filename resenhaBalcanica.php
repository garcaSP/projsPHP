<?php
//Faça o sorteio de um numero de 1 a 10 com rand(1,10).
//Imprima uma tabuada do numero sorteado usando 'do ... while'.
//Toda vez que o numero multiplicar um par ele devera ser impresso em negrito
//Toda vez que o numero multiplicar um impar ele devea ser impresso em italico
//Use <br> para uma multiplicacao por linha.
//Use 'if (expressao):' e 'else'

$num_sorteio = rand(1,10);
$multiplicando = 0;
do
{
    if(!($multiplicando % 2))
        echo "<strong> $num_sorteio * $multiplicando </strong><br>";
    else
        echo "<em> $num_sorteio * $multiplicando </em><br>";
    $multiplicando++;
}while($multiplicando <= 10)

?>
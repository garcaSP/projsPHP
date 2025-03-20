<?php
    $proprietario = "Marcelo Cabello Peres";
    $locador = "Edigio Balcânico";
    $valor = 15800;
    $porcent_reajuste = 10;
    $novo_valor = $valor * ($porcent_reajuste / 100 + 1);

    echo "<h1>Proprietário:</h1> <big><mark>$proprietario</mark></big>";
    echo "<h1>Locador:</h1> <big><mark>$locador</mark></big>";
    echo "<p>Valor reajustado: \n<mark>$novo_valor reais</mark></p>";
    echo "<p>Porcentagem de reajuste: \n<mark>$porcent_reajuste%</mark></p>";

?>
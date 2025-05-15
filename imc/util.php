<?php 
    function imc($paramPeso, $paramAltura)
    {
        $imc = $paramPeso / ($paramAltura * $paramAltura);
        return $imc;
    }

    function resultado($paramImc)
    {
        if ($paramImc < 18.5)
        {
            return "Abaixo do peso";
        } elseif ($paramImc >= 18.5 && $paramImc < 25) {
            return "Peso normal";
        } elseif ($paramImc >= 25 && $paramImc < 30) {
            return "Sobrepeso";
        } elseif ($paramImc >= 30 && $paramImc < 35) {
            return "Obesidade grau I";
        } elseif ($paramImc >= 35 && $paramImc < 40) {
            return "Obesidade grau II";
        } else {
            return "Obesidade grau III (Mórbida)";
        }
    }
?>
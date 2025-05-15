<style>
    table, th, td {
        
        text-align:center;
        border:1px solid black;
    }
    th{
        width: 160px;
    }
</style>

<?php

    include 'util.php';

    $altura = $_POST['idAltura'];
    $peso = $_POST['idPeso'];

    $imc = imc($peso, $altura);
    $resultado = resultado($imc);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resulatdo IMC</title>
</head>
<body>
    <h1>Resultado do IMC</h1>
    <table>
        <tr>
            <th>Altura</th>
            <th>Peso</th>
            <th>IMC</th>
            <th>Resultado</th>
        </tr>
        <tr>
            <td><?php echo $altura; ?></td>
            <td><?php echo $peso; ?></td>
            <td><?php echo number_format($imc, 2); ?></td>
            <td><?php echo $resultado; ?></td>
        </tr>
</body>
</html>
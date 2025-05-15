
<style>
    table, th, td {
        border:1px solid black;
    }
</style>

<?php
    include("util.php");

    $conn = conecta();
    $valor = $_POST['valor'];
    $varSQL = "SELECT * FROM cursos WHERE (valor < :valor)";
    
    $select = $conn->prepare($varSQL);
    $select->bindValue(':valor', $valor);

    $select->execute();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
            border:1px solid black;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Titulo</th>
            <th>Descricao</th>
            <th>Valor</th>
        </tr>
        <?php
            while($linha = $select->fetch())
            {
                echo "<tr>";
                    echo "<td>" . $linha['titulo'] . "</td>";
                    echo "<td>" . $linha['descricao'] . "</td>";
                    echo "<td>" . $linha['valor'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
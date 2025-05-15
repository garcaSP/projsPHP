
<?php
    include("util.php");

    $conn = conecta();

    $varSQL = "SELECT id, nome, celular, email, ehresenha, ehlegal FROM alunos;";
    $select = $conn->query($varSQL);

    function eh($param)
    {
        if ($param == 1)
        {
            return "Sim";
        }
        else
        {
            return "Não";
        }
    }
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
            <th>ID</th>
            <th>Nome</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Eh Resenha</th>
            <th>Eh Legal</th>
        </tr>
        <?php
            while($linha = $select->fetch())
            {
                echo "<tr>";
                    echo "<td>" . $linha['id'] . "</td>";
                    echo "<td>" . $linha['nome'] . "</td>";
                    echo "<td>" . $linha['celular'] . "</td>";
                    echo "<td>" . $linha['email'] . "</td>";
                    echo "<td>" . eh($linha['ehresenha']). "</td>";
                    echo "<td>" . eh($linha['ehresenha']). "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
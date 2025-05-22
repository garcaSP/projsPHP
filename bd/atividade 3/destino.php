<?php
    include("util.php");

    $conn = conecta();

    $varSQL = "SELECT * FROM alunos";
    if ($_POST['sexo'] == 'M') {
        $varSQL .= " WHERE sexo = 'M'";
    }
    if ($_POST['sexo'] == 'F') {
        $varSQL .= " WHERE sexo = 'F'";
    }
    
    $varSQL .= " ORDER BY nome ASC";
    $select = $conn->prepare($varSQL);
    $select->execute();

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Celular</th>
            <th>Email</th>
            <th>Resenha</th>
            <th>Engraçado</th>
            <th>Sexo</th>
        </tr>
        <?php
            while($linha = $select->fetch())
            {
                echo "<tr>";
                    echo "<td>" . $linha['id'] . "</td>";
                    echo "<td>" . $linha['nome'] . "</td>";
                    echo "<td>" . $linha['celular'] . "</td>";
                    
                    echo "<td>" . $linha['email'] . "</td>";
                    echo "<td>" . eh($linha['resenha']) . "</td>";
                    echo "<td>" . eh($linha['engracado']) . "</td>";
                    
                    echo "<td>" . $linha['sexo'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>
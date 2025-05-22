<?php
    include("util.php");

    $conn = conecta();

    $varSQL = "SELECT * FROM alunos";
    /*if ($_POST['sexo'] == 'M') {
        $varSQL .= " WHERE sexo = 'M'";
    }
    if ($_POST['sexo'] == 'F') {
        $varSQL .= " WHERE sexo = 'F'";
    }*/
    
    $varSQL .= " ORDER BY id ASC";
    $select = $conn->prepare($varSQL);
    $select->execute();

    function eh($params)
    {
        if($params == 1)
        {
            return "Sim";
        }
        return "Não";
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
            border: 1px solid black;
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
            <th>Resenha</th>
            <th>Engraçado</th>
            <th>Sexo</th>
            <th>Adicionar</th>
            <th>Excluir</th>
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
                    echo "<td><a href='alterarAluno.php?id=" . $linha['id'] . "'>Alterar</a></td>";
                    echo "<td><a href='excluirAluno.php?id=" . $linha['id'] . "'>Excluir</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <a href='adicionarAluno.php'>Adicionar</a>
</body>
</html>
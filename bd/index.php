<?php
    $string_conexao = "pgsql:host=localhost;port=5432;dbname=postgres;user=postgres;password=postgres";
    $conn = new PDO($string_conexao);

    if(!$conn)
    {
        echo "Nao conectado";
    }

    $varSQL = "SELECT titulo, descricao, valor FROM cursos;";
    $select = $conn->query($varSQL);

    while($linha = $select->fetch())
    {
        echo $linha['titulo']."/".$linha['descricao']."<br>";
    }
?>
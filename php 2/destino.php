<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta Bacharelado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
    </style>
</head>
<body>
    <?php
        $dscA = $_POST['idA'];
        $dscB = $_POST['idB'];
        $dscC = $_POST['idC'];
        
        function tint($var)
        {
            if($var < 6)
            {
                echo "<p style='color: red;'>".$var."</p>";
            }
            else
            {
                echo "<p>".$var."</p>";
            }
        }
    ?>

    <table border = 1px>
        <thead>
            <th> Boletim </th>
            <th> Notas </th>
        </thead>
        <tbody>
            <tr>
                <td> Disciplina A: </td>
                <td><?php tint($dscA);?></td>
            </tr>
            <tr>
                <td> Disciplina B: </td>
                <td><?php tint($dscB);?></td>
            </tr>
            <tr>
                <td> Disciplina C: </td>
                <td><?php tint($dscC);?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
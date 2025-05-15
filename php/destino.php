
<style>
    table, th, td {
        border:1px solid black;
    }
</style>

<?php
// Imprime os valores de cada campo na página
    echo '<table>                   
        <tr>
            <th>Nome: </th>
            <td>'.$_POST["idnome"].'</td>
        </tr>
        <tr>
            <th>Celular: </th>
            <td>'.$_POST["idcelular"].'</td>
        </tr>
        <tr>
            <th>Cidade: </th>
            <td>'.$_POST["idcidade"].'</td>
        </tr>
    </table>';
?>
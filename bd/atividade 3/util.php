<?php
    function conecta($params = "")
    {
        if ($params == "")
        {
            $params = "pgsql:host=localhost;port=5432;dbname=postgres;user=postgres;password=postgres";
        }
        try
        {
            $varConn = new PDO($params);
            return $varConn;
        }
        catch (PDOException $e)
        {
            echo "Nao posso continuar cara...";
            exit;
        }
    }

    function eh($params)
    {
        if($params == 1)
        {
            return "Sim";
        }
        return "Não";
    }
?>


<?php
    $dbHost = 'containers-us-west-201.railway.app';
    $dbUsername = 'root';
    $dbPassword = '0hHgePORBzg35OYzi3Z3';
    $dbName = 'railway';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /*
    if($conexao->connect_errno)
    {
        echo "Erro";
    }
    else
    {
        echo "Deu bom pai.";
    }
    */
?>
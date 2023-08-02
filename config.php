<?php
    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'form-usuarios';

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
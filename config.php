<?php
    $dbHost = 'containers-us-west-201.railway.app';
    $dbUsername = 'root';
    $dbPassword = '0hHgePORBzg35OYzi3Z3';
    $dbName = 'railway';
    $dbPort = '5647';
    $dbSocket = 'mysql://root:0hHgePORBzg35OYzi3Z3@containers-us-west-201.railway.app:5647/railway';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName, $dbPort, $dbSocket);

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
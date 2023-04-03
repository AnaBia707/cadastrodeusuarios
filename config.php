<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '123456';
    $dbName = 'cadastro-usuarios';
    
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// teste de conexão com o bando    
//    if($conexao->connect_errno)
//   {
//        echo "Erro";
//    }
//    else
//    {
//        echo "Conexão efetuada com sucesso!";
//    }

?>
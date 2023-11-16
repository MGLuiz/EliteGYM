<?php

    $host = "127.0.0.1";
    $username = "admin";
    $password = "admin";
    $tableName = 'elitegym';

    $conn = mysqli_connect($host, $username, $password, $tableName);
    if($conn == false){
        die('Erro ao conectar com o banco de dados: '.mysqli_connect_error());
    }else{
        echo 'Conectado com sucesso';
    }


?>
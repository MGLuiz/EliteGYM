<?php

    include('..\..\assets\php\conexao.php');

    $name = $_POST['username'];
    $cpf = $_POST['cpf'];
    $birthdate = $_POST['dt_nasc'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cep = $_POST['cep'];
    $nivel = 'Iniciante';

    $sql = "INSERT INTO clientes(nome, cpf, dt_nascimento, sexo, email, senha, cep, nivel) VALUES ('$name','$cpf', '$birthdate', '$sexo', '$email', '$password', '$cep', '$nivel')";

    if(mysqli_query($conn, $sql)){
        echo "Cliente cadastrado com sucesso!";
    }else{
        echo "Cliente cadastrado com sucesso!";
    }
    mysqli_close($conn);
?>
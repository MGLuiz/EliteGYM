<?php

    include('..\..\assets\php\conexao.php');

    if(isset($_POST['gymSubmit'])){

        $gymName = $_POST['gymName'];
        $gymCpf = $_POST['gymCnpj'];
        $gymEmail = $_POST['gymEmail'];
        $gymPassword = $_POST['gymPassword'];
        $gymCep = $_POST['gymCep'];

    }else if(isset($_POST['submit'])){    
        
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
            echo "Erro ao cadastrar cliente!";
        }
    }

    mysqli_close($conn);

    function gymSignIn()
?>
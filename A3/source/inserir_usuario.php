<?php

    include_once("conexao.php");

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = $conn->prepare("Insert into usuario (email_usuario, senha_usuario) value(?,?)"); 

    $sql->execute([$email,$senha]);

    unset($sql);
    unset($conn);


    header("location:../pages/cadastrar.php");


?>
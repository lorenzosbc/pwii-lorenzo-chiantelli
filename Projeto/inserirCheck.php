<?php 
  
    include("conexao.php");

    $name = $_POST['name'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];

    $inserir = $pdo->prepare("insert into demo (name,idade,cpf,email, celular )
                     values ('$name', '$idade', '$cpf', '$email', '$celular')");
    $inserir->execute();

    header("location:kaline.php");


?>
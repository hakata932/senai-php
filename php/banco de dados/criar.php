<?php 
require 'banco_dados.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //como foi utilizado require, podemos chamar o $conexao e fazer código SQL dentro do query
    $conexao->query("INSERT INTO usuarios (nome, email, senha) VALUES ('$nome','$email','$senha') ");
    echo 'usuário cadastrado com sucesso';
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nome" placeholder="Digite seu nome">
        <input type="text" name="email" placeholder="Digite seu email">
        <input type="text" name="senha" placeholder="Digite sua senha">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>
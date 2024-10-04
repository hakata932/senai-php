<?php 
require "banco_empresa.php";
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $data = $_POST['data'];

    $conexao->query("INSERT INTO funcionarios (nome, cargo, salario, data_adm) VALUES ('$nome', '$cargo', '$salario', '$data');");
    echo 'Usuário cadastrado com sucesso.';
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form method="post">
        <h1>REGISTRO DE FUNCIONÁRIOS</h1>
        <input type="text" name="nome" placeholder="Digite seu nome">
        <input type="text" name="cargo" placeholder="Escreva seu cargo">
        <input type="number" name="salario" placeholder="Digite seu salário">
        <input type="number" name="data" placeholder="Digite sua data de admissão DDMMAAAA">
        <button type="submit">Enviar</button>
        <br><br>
        <p>Ao digitar a data de admissão, favor atente-se a seguir o modelo (dia/mês/ano), porém sem as "/", ou seja, a exemplo: ao invés de escrever "22/05/2005", digite "22052005".</p>
        <p>E para o salário, não use virgula ou ponto, apenas insira o valor inteiro, ou seja, a exemplo: ao invés de "1.412", digite apenas "1412".</p>
        <a href="empresa_lista.php">Veja a lista de funcionários cadastrados (apenas nomes)</a>
    </form>
</body>
</html>
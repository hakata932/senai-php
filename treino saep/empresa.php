<?php 
require 'banco.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $carro = $_POST['carro'];
    $cor = $_POST['cores'];
    $conexao->query("INSERT INTO cadastro (nome_carro, cor) VALUES ('$carro', '$cor');");
    echo "carro cadastrado com sucesso";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST">
        <h3>Cadastrar Veículo</h3>
        <input type="text" name="carro" placeholder="Digite seu carro" id="digitarCarro">
        <label>Cores disponíveis</label>
        <select name="cores">
            <option value="">Selecione uma cor</option>
            <option value="azul">Azul</option>
            <option value="rosa">Rosa</option>
            <option value="vermelho">Vermelho</option>
            <option value="preto">Preto</option>
            <option value="roxo">Roxo</option>
            <option value="outro">Outro</option>
        </select>
        <button type="submit"> Cadastrar Carro</button>
        <a href="cadastrados.php">verificar veículo</a>

        
    </form>
</body>
</html>

<style>
    form{
        display: flex;
        flex-direction: column;
        justify-content: center;
        width: 400px;
        margin-left: 750px;
        padding: 10px;
    }
</style>
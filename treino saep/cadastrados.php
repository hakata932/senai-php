<?php 
require 'banco.php';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $carro = $_POST['carro'];
    $consulta = $conexao->query("SELECT nome_carro FROM cadastro WHERE nome_carro = '$carro'");

    if($consulta->num_rows > 0){
        echo "Carro encontrado";
    } else{
        echo "Carro não encontrado";
    }
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
    <form method="POST">
        <h3>Verificar veículo</h3>
        <input name="carro" type="text" placeholder="Digite o nome do veículo para verificar">
        <button type="submit">Verificar</button>
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
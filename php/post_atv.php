<?php 
//atividade consiste em verificar se um número que foi passado via POST é igual a um gerado entre 0 e 5
$valor = rand(0,5);
//use dois "if's", um para validar o número e outra para o joguinho funcionar
if(isset($_POST['numero'])){
    if($valor == $_POST['numero']){
        echo 'A máquina chutou: '.$valor.'; você chutou: '.$_POST['numero'].'. Você conseguiu ganhar!';
    } else{
        echo 'Máquina: '.$valor.'; seu valor: '.$_POST['numero'].'. Tente novamente';
    }
} else{
    echo 'aguardando envio entre 0 e 5';
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
    <h1>Adivinhe o número da Máquina</h1>
    <form method="post">
        <input type="number" name="numero" placeholder="Digite um número">
        <button type="submit">Adivihar</button>
    </form>
</body>
</html>
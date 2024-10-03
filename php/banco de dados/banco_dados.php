<?php 
try{
    $conexao = new mysqli('localhost', 'root', '', 'senai');
}
catch(Exception $erro){ //caso dê problema ao entrar no DB, ele dirá qual é com uso do catch
    echo 'houve um erro de conexão '.$erro->getMessage();
}
//uso de operador novo
//para contexto, o código SQL pode ser visto em outro repositório
?>
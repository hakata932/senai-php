<?php 
try{
    $conexao = new mysqli('localhost', 'root', '', 'empresa');
    } catch (Exception $erro){
        echo "erro de conexão: " . $erro->getMessage();
    }
?>
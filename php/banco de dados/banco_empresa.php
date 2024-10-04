<?php 
try{
    $conexao = new mysqli('localhost', 'root', '', 'empresa');
}
catch(Exception $erro){ 
    echo 'houve um erro de conexão '.$erro->getMessage();
}

?>
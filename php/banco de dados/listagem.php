<?php 
    require "banco_dados.php";
    $usuarios = $conexao->query("SELECT * FROM usuarios")->fetch_all(MYSQLI_ASSOC); //irá armazenar os usuários na var $usuarios, buscando eles diretamente no banco

?>

<ul>
    <?php foreach($usuarios as $usuario) { ?>
        <li> <?php echo $usuario ['nome']; ?></li>
    <?php }?>
</ul>
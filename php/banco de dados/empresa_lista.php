<?php 
    require "banco_empresa.php";
    $funcionarios = $conexao->query("SELECT * FROM funcionarios")->fetch_all(MYSQLI_ASSOC); //irá armazenar os usuários na var $usuarios, buscando eles diretamente no banco

?>

<ul>
    <h1>LISTA DE FUNCIONÁRIOS:</h1>
    <table border="1">
        <tr>
            <th>nome</th>
        </tr>
    <?php foreach($funcionarios as $usuarios) { ?>
        <tr>
            <td><?php echo $usuarios ['nome']; ?></td>
        </tr>
        
    <?php }?>
    </table>
</ul>
<?php require_once "conexao.php" ?>
<?php require_once "Produto.php" ?>
<?php require_once "banco-produto.php" ?>
<?php
    if(listarProdutoNovo($conexao)){
        echo "Sucesso!";
    header("Location:editar.php");
    } else {
        echo mysqli_error($conexao);
    }

?>
<?php  require_once "conexao.php" ?>
<?php  require_once "Produto.php" ?>
<?php  require_once "banco-produto.php" ?>
<?php
   $produto=new Produto();
   
   $produto->id=$_GET["id"];
   $produto->nome=$_GET["nome"];
   $produto->modelo=$_GET["modelo"];
   $produto->ano =$_GET["ano"];

   if(alterarProduto($conexao, $produto)){
    echo "Sucesso!";
    header("Location:editar.php");
}  else {
    echo mysqli_error($conexao);
}
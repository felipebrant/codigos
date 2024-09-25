<!-- listar.php -->
<?php  require_once "conexao.php" ?>
<?php  require_once "Produto.php" ?>
<?php  require_once "banco-produto.php" ?>
<?php
   echo "<h1> LISTAR PRODUTOS </h1>";
   listarProduto($conexao);
?>
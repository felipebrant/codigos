<!--  cadastroProduto.php  -->
<?php  require_once "conexao.php" ?>
<?php  require_once "Produto.php" ?>
<?php  require_once "banco-produto.php" ?>
<?php
   $produto=new Produto();
   
   $produto->nome=$_GET["nome"];
   $produto->modelo=$_GET["modelo"];
   $produto->ano =$_GET["ano"];
 
     if (insereProduto($conexao,$produto)){
		echo "cadastrado com sucesso! <br>";
		echo "<a href='listar.php'>LISTAR</a><br>";
    echo "<a href='editar.php'>EDITAR</a>";
	 }else{
		$erro=mysqli_error($conexao); 
	 }

?>
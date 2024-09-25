<!-- banco-produto.php -->
<?php  require_once "Produto.php" ?>
<?php  require_once "conexao.php" ?>
<?php
  function insereProduto($conexao,$produto){
	$sql="insert into produtos(nome,modelo,ano) 
	     values('$produto->nome',
		        '$produto->modelo',
				 $produto->ano)"; 	
	$resultado=mysqli_query($conexao,$sql);
	return $resultado;
  }
  function listarProduto($conexao){
	$sql="select * from produtos";  
	$resultado=mysqli_query($conexao,$sql);
	while($array=mysqli_fetch_assoc($resultado)){
		echo "<h1> DADOS DOS PRODUTOS </h1>";
		echo "ID:"      .$array['id']    ."<br>";
		echo "NOME:"    .$array['nome']  ."<br>";
		echo "MODELO:"  .$array['modelo']."<br>";
		echo "ANO   :"  .$array['ano']   ."<br>";
        echo "<br>";
        echo "<hr>";		
	}//fim do while	
  }//fim lo listar

  function listarProdutoNovo($conexao){
	$sql="select * from produtos";  
	$resultado=mysqli_query($conexao,$sql);
	while($array=mysqli_fetch_assoc($resultado)){
?>
		<center>
			<form action=alterarProdutos.php  method=get>						 
				<table >
					<tr>
						<td><input type=hidden value= <?php echo htmlspecialchars($array['id']);?> name=id> </td> 
					</tr>
					<tr>
						<td>NOME </td>
						<td> <input type=text value= <?php echo htmlspecialchars($array['nome']);?> name=nome> </td>
					</tr>
					<tr>
						<td>MODELO</td>
						<td> <input type=text value= <?php echo $array['modelo'];?>  name=modelo> </td>
					</tr>
					<tr>
						<td>ANO</td>
						<td> <input type=text value= <?php echo $array['ano'];?>  name=ano> </td>
					</tr>		
					<tr> 
						<td colspan =2><center><input type=submit value=Alterar></center> </td>
					</tr>
				</table >
			</form>
        </center>
<?php
	} //fim do while
  } //fim do método listarProdutoNovo

  function alterarProduto($conexao,$produto){
	$sql="update produtos set nome='$produto->nome',
		  					  modelo='$produto->modelo',
		  					  ano='$produto->ano'
		  				  where id='$produto->id'";
	    	
	$resultado=mysqli_query($conexao,$sql);
	return $resultado;
  } // fim do método alterarProduto





?>
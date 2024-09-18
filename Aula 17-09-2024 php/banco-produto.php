<?php require_once "Produto.php" ?>
<?php require_once "conexao.php" ?>
<?php
    function insereProduto($conexao, $produto){
        $sql="insert into produtos(nome, modelo, ano) values ('$produto->nome',
                                                              '$produto->modelo',
                                                              '$produto->ano)";
        $resultado=mysqli_query($conexao, $sql);
        return $resultado;
    }
function listarProduto($conexao, $produto) {
    $sql="select * from produtos";
    $resultado=mysqli_query($conexao, $sql);
    while($array=mysqli_fetch_assoc($resultado)){
        echo "<h1> DADOS DOS PRODUTOS </h1>";
        echo "ID: " .$array['id'] ."<br>";
        echo "NOME: " .$array['nome'] ."<br>";
        echo "MODELO: " .$array['modelo'] ."<br>";
        echo "ANO: " .$array['ano'] ."<br>";
        echo "<br>";
        echo "<hr>";

    }
}

?>

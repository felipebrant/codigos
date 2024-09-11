<!-- contato.php -->

<?php require_once "conexao.php" ?>

<?php
    $nome=$_POST["nome"];
    $telefone=$_POST["telefone"];
    $endereco=$_POST["endereco"];

    function inserir($conexao, $nome, $telefone, $endereco) {
        $sql="insert into contato(nome, telefone, endereco)
        values ('$nome', '$telefone', '$endereco')";
        $resultado=mysqli_query ($conexao, $sql);
        return $resultado;
    } //fim da função

    if (inserir($conexao, $nome, $telefone, $endereco)) {
        echo "<h3> Adicionado com sucesso! </h3>";
        echo "<a href='formdeletar.php'> Deseja deletar </a>";
    } else {
        echo "Erro";
        echo mysqli_error($conexao);
}
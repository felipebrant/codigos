<?php require_once "conexao.php" ?>
<?php
    $id=$_GET["id"];
    function deletar($conexao, $id) {
        $sql="delete from contato where id='$id'";
        $resultado=mysqli_query($conexao, $sql);
        return $resultado;
    } //fim da função

    if(deletar($conexao,$id)) {
        echo "<h3> Deletado com sucesso! </h3>";
    } else {
        echo "Erro";
        echo mysqli_error($conexao);
    }
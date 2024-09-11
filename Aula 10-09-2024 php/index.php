<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="css/bootstrap.css" rel="stylesheet" >
    <title>Formulário de Contato</title>
</head>
<body>
    <h1>Formulário de Contato</h1>
    <form action="contato.php" method="post">
       
        <label for="nome">Nome:</label><br>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="telefone">Telefone:</label><br>
        <input type="text" id="telefone" name="telefone"><br><br>

        <label for="endereco">Endereço:</label><br>
        <input type="text" id="endereco" name="endereco"><br><br>

        <input type="submit" value="Salvar"  class="btn btn-info">
           
    </form>

</body>
</html>
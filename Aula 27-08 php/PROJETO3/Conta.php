<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agência Bancária</title>
    <style>
        * { 
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background-color: #f4f4f9;
            color: #333;
        }

        header {
            background-color: #004080;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        h1, h2 {
            margin-bottom: 20px;
            color: #004080;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
        }

        input {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #004080;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        button:hover {
            background-color: #003366;
        }

        footer {
            background-color: #004080;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
        <h1><font color=yellow> Banco Exemplo</font></h1>
        </div>
    </header>

<?php
class conta{
    public $nome,$conta,$saldo,$saque;
    function sacar($saldo, $saque) {
        $total = $saldo - $saque;
        return $total;
    } //fim do método sacar
    function imprimir($nome, $conta, $saldo, $saque, $total) {
        echo "<h3> DADOS BANCÁRIOS</h3>";
        echo "NOME: $nome <br>";
        echo "CONTA: $conta <br>";
        echo "SALDO: $saldo <br>";
        echo "SAQUE: $saque <br>";
        echo "TOTAL: $total <br>";
    } //fim do método imprimir
} //fim da classe
$cliente=new Conta;
$total=$cliente->sacar($_POST["saldo"], $_POST["saque"]);
$cliente->imprimir($_POST["nome"], $_POST["conta"], $_POST["saldo"], $_POST["saque"], $total);
?>
<br>
<footer>
        <div class="container">
            <p>&copy; 2024 Banco Exemplo. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Passagem de Ônibus</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <div class="container">
            <h1><font color=yellow> Sistema de Passagem de Ônibus</font></h1>
        </div>
    </header>

<div style="text-align: center;">

<?php
    class Passagem{
        public $rota, $valorp, $integracao, $qtd;
        function comprar($valorp, $qtd, $integracao){
          if($integracao=="Sim"){
            $total=($valorp*$qtd)+1.00;
            return $total;
          } else if($integracao=="Não"){
            $total=($valorp*$qtd);
            return $total;
          }
        } //fim do método
        function mostrar($rota, $valorp, $integracao, $qtd, $total){
            echo "Rota: $rota <br>";
            echo "Valor da passagem: $valorp <br>";
            echo "Integração: $integracao <br>";
            echo "Quantidade de passagens: $qtd <br>";
            echo "Total de passagens: $total <br>";
        } //fim do método mostrar
    } //fim da classe
$passageiro=new Passagem;
$total=$passageiro->comprar($_GET["valorpassagem"], $_GET["qtd"], $_GET["integracao"]);
$passageiro->mostrar($_GET["rota"],
                     $_GET["valorpassagem"],
                     $_GET["integracao"],
                     $_GET["qtd"],
                     $total);
?>

</div>

<footer>
        <div class="container">
            <p>&copy; 2024 Sistema de Passagem de Ônibus. Todos os direitos reservados.</p>
        </div>
    </footer>
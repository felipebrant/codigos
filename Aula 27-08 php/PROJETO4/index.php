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

    <section id="formulario">
        <div class="container">
            <h2>Compra de Passagem</h2>
            <form action="Passagem.php" method="get">
                <label for="rota">Rota (nº ônibus)</label>
                <input type="text" id="rota" name="rota" placeholder="Digite a rota" required>

                <label for="valor-passagem">Valor da Passagem:</label>
                <input type="number" step="0.01"  name="valorpassagem" placeholder="Digite o valor da passagem" required>

                <label for="integracao">Integração (acrescentar 1,00):</label>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="integracao" value="Sim" required> Sim
                    </label>
                    <label>
                        <input type="radio" name="integracao" value="Não" required> Não
                    </label>
                </div>
                <label for="quantidade-mensal">Quantidade de Passagens Pagas por Mês:</label>
                <input type="number" name="qtd" placeholder="Digite a quantidade mensal" required>

                <button type="submit">Comprar Passagem</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Sistema de Passagem de Ônibus. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>

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

    <section id="conta">
        <div class="container">
            <h2>Operação Bancária</h2>
            <form action="Conta.php" method="post">
                
                <label for="nome">Nome:</label>
                <input type="text"   name="nome" placeholder="Digite seu nome">

                <label for="numero-conta">Número da Conta:</label>
                <input type="text"   name="conta" placeholder="Digite o número da conta">

                <label for="saldo">Saldo:</label>
                <input type="text"   name="saldo" placeholder="Digite o saldo"> 
               
                <label for="saldo">Saque:</label>
                <input type="text"   name="saque" placeholder="Digite o saldo"> 

                <button type="submit">Sacar</button>
            </form>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2024 Banco Exemplo. Todos os direitos reservados.</p>
        </div>
    </footer>
</body>
</html>

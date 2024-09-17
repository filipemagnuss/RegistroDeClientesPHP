<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost:8081/Aula04/controller/clienteController.php?metodo=salvarCliente" method="post">
    
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome"><br>

    <label for="cpf">CPF</label>
    <input type="text" name="cpf" id="cpf"><br>

    <label for="nomeDaMae">Nome da Mãe</label>
    <input type="text" name="nomeDaMae" id="nomeDaMae"><br>

    <label for="nomeDoPai">Nome do Pai</label>
    <input type="text" name="nomeDoPai" id="nomeDoPai"><br>

    <label for="saldoDevedor">Saldo Devedor</label>
    <input type="number" name="saldoDevedor" id="saldoDevedor"><br>

    <button type="Submit">Enviar</button>

    </form>
</body>
</html>
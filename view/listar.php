<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Listagem de Clientes
    <table>
        <tr>
            <td>Nome</td>
            <td>CPF</td>
            <td>Nome do Pai</td>
            <td>Nome da Mãe</td>
            <td>Saldo Devedor</td>
        </tr>

        <?php
            foreach($listaDeClientes as $cliente):
        ?>

        <tr>
            <td><?php echo $cliente["nome"]; ?></td>
            <td><?php echo $cliente["cpf"]; ?></td>
            <td><?php echo $cliente["nomeDoPai"]; ?></td>
            <td><?php echo $cliente["nomeDaMae"]; ?></td>
            <td><?php echo $cliente["saldoDevedor"]; ?></td>
            
        </tr>

        <?php
            endforeach
        ?>

    </table>
</body>
</html>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Informações</title>
</head>

<body>

    <h1>Cadastro de informações</h1>

    <?php if (isset($_GET['erro'])): ?>

        <p style="color: red;"><?php echo htmlspecialchars($_GET['erro']); ?> </p>

    <?php endif; ?>


    <form action="Processa.php" method="post">

        <label for="nome">Nome: <br>
            <input type="text" id="nome" name="nome" required>
        </label><br><br>

        <label for="idade">Idade: <br>
            <input type="number" id="idade" name="idade" required>
        </label><br><br>

        <label for="cpf">CPF: <br>
            <input type="text" id="cpf" name="cpf" required>
        </label><br><br>

        <label for="rg">RG: <br>
            <input type="text" id="rg" name="rg" required>
        </label><br><br>

        <button type="submit">Enviar</button>

    </form>

</body>

</html>
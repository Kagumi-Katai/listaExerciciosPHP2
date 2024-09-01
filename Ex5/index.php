<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
</head>
<body>

    <form action="post.php" method="post">

        <p>Informe seu nome:</p>
        <input type="text" name="nome"><br/>

        <p>Faça a sua jogada:</p>
        <select name="jogada">
            <option value="1">Pedra</option>
            <option value="2">Papel</option>
            <option value="3">Tesoura</option>
        </select><br/>

        <input type="submit" value="Enviar">

    </form>

</body>
</html>
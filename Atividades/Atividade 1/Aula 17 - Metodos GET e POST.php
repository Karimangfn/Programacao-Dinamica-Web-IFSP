<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Formulario com Metodo GET</h1>
    <form action="" method="GET">
        <input type="login" name="login" placeholder="login">
        <input type="password" name="password" placeholder="senha">
        <input type="submit" value="enviar">
    </form>

    <h1>Formulario com Metodo POST</h1>
    <form action="" method="POST">
        <input type="login" name="login" placeholder="login">
        <input type="password" name="password" placeholder="senha">
        <input type="submit" value="enviar">
    </form>
    <br />

    <!-- Confirmando Metodo GET -->
    <?php
    if ($_GET) {
        $login = $_GET['login'];
        $senha = $_GET['password'];

        echo "Login_GET:" . $login . "<br />";
        echo "Senha_GET:" . $senha . "<br />" . "<br />";
    }

    if ($_POST) {
        $login = $_POST['login'];
        $senha = $_POST['password'];

        echo "Login_POST:" . $login . "<br />";
        echo "Senha_POST:" . $senha . "<br />";
        echo "<br />";
    }
    ?>
</body>

</html>
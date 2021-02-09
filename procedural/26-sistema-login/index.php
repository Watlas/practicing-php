<?php
// Botao enviar
if(isset($_POST['btn-entrar'])):
endif;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>LOGIN</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    LOGIN: <input type="text" name="login"><br>
    SENHA: <input type="password" name="senha"><br>
    <button type="submit" name="btn-entrar">ENTRAR</button>
</form>
</body>
</html>
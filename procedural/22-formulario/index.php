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

<form ACTION="dados.php" method="POST">
    nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    <button type="submit"> Enviar</button>
</form>

<hr>

<form ACTION="dados.php" method="GET">
    nome: <input type="text" name="nome"><br>
    Email: <input type="email" name="email"><br>
    <button type="submit"> Enviar</button>
</form>
<hr>
<br><br><br>


<?php
if (isset($_POST['enviar-formulario'])):
    //array de erros
    $erros = array();

    if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
        $erros[] ="Idade precisa ser um inteiro";
    endif;
    if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
        $erros[] ="Email invalido";
    endif;
    if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
        $erros[] ="peso invalido";
    endif;
    if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
        $erros[] ="IP invalido";
    endif;
    if(!$iurl = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
        $erros[] ="URL invalido";
    endif;
    if(!empty($erros)):
        foreach ($erros as $erro) {
            echo "<li> $erro </li>";
        }
        else:
        echo "Dados corretos";
        endif;


endif;
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    nome: <input type="text" name="nome"><br>
    Email: <input type="text" name="email"><br>

    URL: <input type="text" name="url"><br>
    <button type="submit" name="enviar-formulario"> Enviar</button>
</form>


<!--//<-.<a href="dados.php?idade=33&sobrenome=Satos">Enviar Dados</a> .->-->
</body>
</html>
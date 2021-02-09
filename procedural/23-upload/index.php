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

<?php
if (isset($_POST['enviar-formulario'])):
$formatosPermitidos = array("png");
$extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);
if (in_array($extensao, $formatosPermitidos)):
    $pasta = "arquivos/";
    $temporario = $_FILES['arquivo']['tmp_name'];
    $novoNome = uniqid() . $extensao;

    if (move_uploaded_file($temporario, $pasta . $novoNome)):
        $mensagem[] = "Upload feito com sucesso!";
    else:
        $mesangem[] = "nao foi possivel fazer o upload";
    endif;
    else:
        $mensagem[] = "Formato invalido";

    endif;

    echo $mensagem;
endif;

?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <input type="submit" name="enviar-formulario">
</form>
</body>
</html>
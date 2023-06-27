<?php
if($_GET['erro'] == 1)
{
    $erroMessage = "Acesso negado";
}else{
    $erroMessage = "";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <input type="text" name="login">
        <input type="text" name="password">
        <button type="submit">Entrar</button>
        <button></button>
        <span><?= $erro; ?></span>
    </form>
</body>
</html>
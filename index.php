<?php
if ($_GET['erro']) {
    if ($_GET['erro'] == 1) {
        $erroMessage = "Acesso negado";
    } else {
        $erroMessage = "";
    }
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
    <form action="db/verifica_login.php" method="post">
        <input type="text" name="login">
        <input type="text" name="password">
        <button type="submit">Entrar</button>
        <button><a href="cadastro_page.php">Cadastrar</a></button>
        <span><?php if($erro){
            echo $erro;
            } ?></span>
    </form>
</body>

</html>
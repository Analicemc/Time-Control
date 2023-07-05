<?php
if (isset($_GET['erro'])) {
    if ($_GET['erro'] == 1) {
        $errorMessage = "Acesso negado";
    } else if($_GET['erro'] == 2){
        $errorMessage = 'E-mail ou senha inválidos';
    }
     else {
        $errorMessage = "";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <form action="db/verifica_login.php" method="post">
        <input type="text" name="login">
        <input type="text" name="password">
        <button type="submit">Entrar</button>
        <button><a href="cadastro_page.php">Cadastrar</a></button>
        <span class="errorMessage"><?php if(isset($_GET['erro'])){
            echo $errorMessage;
        } ?></span>
    </form>
</body>

</html>
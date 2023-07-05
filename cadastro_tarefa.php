<?php
#require_once 'card_tarefa';
session_start();
if (!isset($_SESSION['email']) && !isset($_SESSION['perfil_id'])){
    header("Location:index.php?erro=1");
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarefas - Time Control</title>
</head>
<body>
    <a href="cadastro_tarefa.php">Cadastrar tarefa</a>
    <a href="home.php">Listar tarefas</a>
    <a href="db/sair.php">Sair</a>

    <main>
        <h2>Cadastro de tarefas</h2>
        <form action="" method="post">
            <label>Título
                <input type="text">
            </label>
            <label>Descrição
                <input type="text">
            </label>
            <label for="0">Data início
                <input type="date" name="" id="">
            </label>
            <label for="">Hora início
                <input type="time" name="" id="">
            </label>
        </form>
    </main>

</body>
</html>
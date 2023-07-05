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
        <section id="pendentes">
        <?php buildTaskCard($t, $d) ?>
        </section>
        <section id="processo">

        </section>
        <section id="finalizadas">

        </section>
    </main>

</body>
</html>
<?php
require_once 'bloqueio.php';
#require_once 'card_tarefa';
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
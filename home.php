<?php
#require_once 'card_tarefa';
if (!isset($_SESSION['login']) && !isset($_SESSION['password'])){
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
    <a href="">Cadastrar tarefa</a>
    <a href="">Listar tarefas</a>
    <a href="">Sair</a>

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
<?php
require_once 'db/connection.php';
require_once 'bloqueio.php';
#require_once 'card_tarefa';

if ($_SESSION['perfil_id'] == 1){
    $sql = "SELECT * FROM tarefa";
}else if ($_SESSION['perfil_id'] == 2){
    $sessionUser = $_SESSION['userid'];
    $sql = "SELECT * FROM tarefa WHERE usuario_id = $sessionUser";
}

$tarefas = mysqli_query($con, $sql);

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
        <?php
        foreach($tarefas as $taf){
            echo $taf['titulo'];
        }
        #buildTaskCard($t, $d) ?>
        </section>
        <section id="processo">

        </section>
        <section id="finalizadas">

        </section>
    </main>

</body>
</html>
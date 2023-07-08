<?php
require_once 'db/connection.php';
require_once 'db/bloqueio.php';
require_once 'card_tarefa.php';

if ($_SESSION['perfil_id'] == 1){
    $sql = "SELECT * FROM tarefa t, usuario u WHERE t.usuario_id = u.id ORDER BY data_inicio";
}else if ($_SESSION['perfil_id'] == 2){
    $sessionUser = $_SESSION['userid'];
    $sql = "SELECT * FROM tarefa WHERE usuario_id = $sessionUser ORDER BY data_inicio ASC";
}

$tarefas = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Tarefas - Time Control</title>
</head>
<body>
    <a href="cadastro_tarefa.php">Cadastrar tarefa</a>
    <a href="home.php">Listar tarefas</a>
    <a href="db/sair.php">Sair</a>

    <main>
        <section id="pendentes">
        <?php
        foreach($tarefas as $tar){
            if (key_exists('nome', $tar)) {
                echo buildTaskCard($tar, $tar['nome']);
            }else{
                echo buildTaskCard($tar);
            }
        }
        ?>
        </section>
        <section id="processo">

        </section>
        <section id="finalizadas">

        </section>
    </main>

</body>
</html>
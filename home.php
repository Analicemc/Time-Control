<?php
require_once 'db/connection.php';
require_once 'db/bloqueio.php';
require_once 'card_tarefa.php';

$busca = $_POST['busca'] ?? '';

if ($_SESSION['perfil_id'] == 1){
    $sql = "SELECT tarefa.*, usuario.nome from tarefa JOIN usuario ON
    tarefa.usuario_id = usuario.id
    WHERE tarefa.titulo LIKE '%$busca%' ORDER BY data_inicio, hora_inicio ASC";
}else if ($_SESSION['perfil_id'] == 2){
    $sessionUser = $_SESSION['userid'];
    $sql = "SELECT * FROM tarefa WHERE usuario_id = $sessionUser AND tarefa.titulo LIKE '%$busca%' ORDER BY data_inicio, hora_inicio ASC";
}

$tarefas = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<?php require_once 'head.php' ?>
<body>
    <a href="cadastro_tarefa.php">Cadastrar tarefa</a>
    <a href="home.php">Listar tarefas</a>
    <a href="db/sair.php">Sair</a>

    <main>
        <h2>Olá <?= $_SESSION['nome'] ?></h2>
        <form action="home.php" method="post">
            <input name='busca' type="text" placeholder="Digite para buscar">
            <button type="submit" class='btn btn-success'>Buscar</button>
        </form>
        <section id="pendentes">
        <?php
        $sql_cores = "SELECT id, cor from categoria_tarefa";
        $query = mysqli_query($con, $sql_cores);
        $cores = mysqli_fetch_all($query, MYSQLI_ASSOC);
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
<?php

require_once 'db/bloqueio.php';
require_once 'db/connection.php';

$tarefa_id = $_GET['id'];

$sessionUser = $_SESSION['userid'];
if($_SESSION['perfil_id'] == "1"){
    $sql_tarefa = "SELECT * from tarefa where id = $tarefa_id";
}else{
    $sql_tarefa = "SELECT * from tarefa where id = $tarefa_id and usuario_id = $sessionUser";
}

$query = mysqli_query($con, $sql_tarefa);
$tarefa = mysqli_fetch_array($query);

$sql_categoria = "SELECT * FROM categoria_tarefa";
$categorias = mysqli_query($con, $sql_categoria);

$sql_status = "SELECT * FROM status_tarefa";
$status = mysqli_query($con, $sql_status);

$sql_prioridades = "SELECT * FROM prioridade_tarefa";
$prioridades = mysqli_query($con, $sql_prioridades);

?>

<!DOCTYPE html>
<html lang="pt-br">
<?php require_once 'head.php' ?>
<body>
<?php require_once 'header.php' ?>

    <main>
        <h2>Editar tarefa</h2>
        <form action="db/update_tarefa.php?id=<?= $tarefa_id ?>" method="post">
            <label>Título
                <input type="text" value="<?= $tarefa['titulo'] ?>" name="titulo" required>
            </label>
            <label>Descrição
                <textarea name="descricao" cols="30" rows="10"><?= $tarefa['descricao'] ?></textarea>
            </label>
            <label>Data início
                <input type="date" value="<?= $tarefa['data_inicio'] ?>" name="data_inicio" required>
            </label>
            <label>Hora início
                <input type="time" value="<?= $tarefa['hora_inicio'] ?>" name="hora_inicio">
            </label>
            <label>Data fim
                <input type="date" value="<?= $tarefa['data_fim'] ?>" name="data_fim" required>
            </label>
            <label>Hora fim
                <input type="time" value="<?= $tarefa['hora_fim'] ?>" name="hora_fim">
            </label>
            <label>Categorias
                <select data-live-search='true'
                name="categoria" id="">
                    <?php
                        foreach ($categorias as $cat) {
                            echo "<option value='${cat['id']}'>
                                    ${cat['nome']}
                            </option>";
                        }
                    ?>
                </select>
            </label>
            <label>
                <?php
                    foreach ($status as $sta){
                        echo "<input type='radio' name='status_tarefa' value='${sta['id']}'>
                            ${sta['nome']}
                        </input>";
                    }
                ?>
            </label>
            <label>
                <select name="prioridade">
                    <?php
                        foreach ($prioridades as $pri){
                            echo "<option value='${pri['id']}' $selected>
                                ${pri['nome']}
                            </option>";
                        }
                    ?>
                </select>
            </label>
            <button type="submit">Salvar</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
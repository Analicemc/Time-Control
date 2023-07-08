<?php

require_once 'db/bloqueio.php';
require_once 'db/connection.php';

$tarefa_id = $_GET['id'];

$sessionUser = $_SESSION['userid'];
$sql_tarefa = "SELECT * from tarefa where id = $tarefa_id and usuario_id = $sessionUser";

$tarefa = mysqli_fetch_assoc(mysqli_query($con, $sql_tarefa));

$sql_categoria = "SELECT * FROM categoria_tarefa";
$categorias = mysqli_query($con, $sql_categoria);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar tarefa</title>
</head>
<body>

    <main>
        <h2>Editar tarefa</h2>
        <form action="db/update_tarefa.php?id=<?= $tarefa_id ?>" method="post">
            <label>Título
                <input type="text" value="<?= $tarefa['titulo'] ?>" name="titulo">
            </label>
            <label>Descrição
                <textarea name="descricao" cols="30" rows="10"><?= $tarefa['descricao'] ?></textarea>
            </label>
            <label>Data início
                <input type="date" value="<?= $tarefa['data_inicio'] ?>" name="data_inicio">
            </label>
            <label>Hora início
                <input type="time" value="<?= $tarefa['hora_inicio'] ?>" name="hora_inicio">
            </label>
            <label>Data fim
                <input type="date" value="<?= $tarefa['data_fim'] ?>" name="data_fim">
            </label>
            <label>Hora fim
                <input type="time" value="<?= $tarefa['hora_fim'] ?>" name="hora_fim">
            </label>
            <label>Categorias
                <select data-live-search='true'
                name="categorias[]" id="" multiple>
                    <?php
                        foreach ($categorias as $cat) {
                            echo '<option value='. $cat['id'] .'>'.$cat['nome'].'<option>';
                        }
                    ?>
                </select>
            </label>
            <label>
                <input required type="radio" name="status_tarefa" value="1">Pendente
                <input required type="radio" name="status_tarefa" value="2">Em andamento
                <input required type="radio" name="status_tarefa" value="3">Finalizada
            </label>
            <label>
                <select name="prioridade">
                    <option value="1">Baixa</option>
                    <option selected value="2">Média</option>
                    <option value="3">Alta</option>
                </select>
            </label>
            <button type="submit">Salvar</button>
        </form>
    </main>

</body>
</html>
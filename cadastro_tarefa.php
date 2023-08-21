<?php

require_once 'db/bloqueio.php';
require_once 'db/connection.php';

$sql = "SELECT * FROM categoria_tarefa";
$categorias = mysqli_query($con, $sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<?php require_once 'head.php' ?>
<body>
<?php require_once 'header.php' ?>

    <main>
        <h2>Cadastro de tarefas</h2>
        <form action="db/cad_tarefa.php" method="post">
            <label>Título
                <input required type="text" name="titulo">
            </label>
            <label>Descrição
                <textarea name="descricao" cols="30" rows="10"></textarea>
            </label>
            <label>Data início
                <input required type="date" name="data_inicio">
            </label>
            <label>Hora início
                <input type="time" name="hora_inicio">
            </label>
            <label>Data fim
                <input required type="date" name="data_fim">
            </label>
            <label>Hora fim
                <input type="time" name="hora_fim">
            </label>
            <label>Categorias
                <select name="categoria" id="">
                    <?php
                        foreach ($categorias as $cat) {
                            echo "<option value='${cat['id']}'>
                                    ${cat['nome']}
                            </option>";
                        }
                    ?>
                </select>
            </label>
            <select name="prioridade" required>
                <option value="1">Baixa</option>
                <option value="2">Média</option>
                <option value="3">Alta</option>
            </select>
            <button type="submit">Salvar</button>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
<?php
#require_once 'card_tarefa';

require_once 'db/bloqueio.php';
require_once 'db/connection.php';

$sql = "SELECT * FROM categoria_tarefa";
$categorias = mysqli_query($con, $sql);

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
                <input type="date" name="data_fim">
            </label>
            <label>Hora fim
                <input type="time" name="hora_fim">
            </label>
            <label>Categorias
                <select name="categoria" id="" multiple>
                    <?php
                        foreach ($categorias as $cat) {
                            echo '<option value='. $cat['id'] .'>'.$cat['nome'].'<option>';
                        }
                    ?>
                </select>
            </label>
            <select name="prioridade">
                <option value="1">Baixa</option>
                <option value="2">Média</option>
                <option value="3">Alta</option>
            </select>
            <button type="submit">Salvar</button>
        </form>
    </main>

</body>
</html>
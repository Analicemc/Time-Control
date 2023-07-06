<?php
#require_once 'card_tarefa';
session_start();

require_once 'bloqueio.php';
require_once 'db/connection.php';

$sql = "SELECT * FROM categoria_tarefa";
$result = mysqli_query($con, $sql);
$categorias = mysqli_fetch_array($result); #todas as categorias estarão nesse array

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
                <input type="text" name="">
            </label>
            <label>Descrição
                <textarea name="" cols="30" rows="10"></textarea>
            </label>
            <label>Data início
                <input type="date" name="">
            </label>
            <label>Hora início
                <input type="time" name="">
            </label>
            <label>Data fim
                <input type="date" name="">
            </label>
            <label>Hora fim
                <input type="time" name="">
            </label>
            <label>Categorias
                <select name="" id="">
                    <?php
                        for($i; $i <= count($categorias); $i++){
                            echo '<option value="$i">$categorias[$i]</option>';
                        }
                    ?>
                </select>
            </label>
            <select name="">
                <option value="1">Baixa</option>
                <option value="2">Média</option>
                <option value="3">Alta</option>
            </select>
        </form>
    </main>

</body>
</html>
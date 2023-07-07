<?php
# cadastra tarefas
require_once('connection.php');

require_once './bloqueio.php';

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data_inicio = $_POST['data_inicio'];
$hora_inicio = $_POST['hora_inicio'];
$data_fim = $_POST['data_fim'];
$hora_fim = $_POST['hora_fim'];
$usuario_id = $_SESSION['userid'];
$status = 1;
$prioridade = $_POST['prioridade'];

$sql = "INSERT INTO tarefa(titulo, descricao, data_inicio, hora_inicio, data_fim, hora_fim, usuario_id, status_tarefa_id, prioridade_tarefa_id) VALUES('$titulo', '$descricao', '$data_inicio', '$hora_inicio', '$data_fim', '$hora_fim', $usuario_id, $status, $prioridade)";

$result = mysqli_query($con, $sql);

if($result == true){
    header("Location:../home.php");
}
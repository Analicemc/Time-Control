<?php
# cadastra tarefas
require_once('connection.php');
require_once 'bloqueio.php';

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data_inicio = $_POST['data_inicio'];
$hora_inicio = $_POST['hora_inicio'];
$data_fim = $_POST['data_fim'];
$hora_fim = $_POST['hora_fim'];
$usuario_id = $_SESSION['userid'];
$status = 1;
$categoria = $_POST['categoria'];
$prioridade = $_POST['prioridade'];

$sql_tar = "INSERT INTO tarefa(titulo, descricao, data_inicio, hora_inicio, data_fim, hora_fim, usuario_id, status_tarefa_id, prioridade_tarefa_id, categoria_tarefa_id) VALUES('$titulo', '$descricao', '$data_inicio', '$hora_inicio', '$data_fim', '$hora_fim', $usuario_id, $status, $prioridade, $categoria)";

$result_tar = mysqli_query($con, $sql_tar);

if($result_tar == true /*&& $result_cat == true*/){
    header("Location:../home.php");
}
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
$categorias = $_POST['categorias'];
$prioridade = $_POST['prioridade'];

$sql_tar = "INSERT INTO tarefa(titulo, descricao, data_inicio, hora_inicio, data_fim, hora_fim, usuario_id, status_tarefa_id, prioridade_tarefa_id) VALUES('$titulo', '$descricao', '$data_inicio', '$hora_inicio', '$data_fim', '$hora_fim', $usuario_id, $status, $prioridade)";

$result_tar = mysqli_query($con, $sql_tar);

$sql_id_tar = "SELECT LAST_INSERT_ID()";
$id_tar = mysqli_fetch_assoc(mysqli_query($con, $sql_id_tar));
$id_tar = $id_tar['LAST_INSERT_ID()'];

foreach($categorias as $cat){
    $sql_categoria_tarefa = "INSERT INTO tarefa_categoria_tarefa(tarefa_id, categoria_tarefa_id) VALUES($id_tar, $cat)";
    $result_cat = mysqli_query($con, $sql_categoria_tarefa);
}

if($result_tar == true /*&& $result_cat == true*/){
    header("Location:../home.php");
}
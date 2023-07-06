<?php
# cadastra tarefas
require_once('connection.php');

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data_inicio = $_POST['data_inicio'];
$hora_inicio = $_POST['hora_inicio'];
$data_fim = $_POST['data_fim'];
$hora_fim = $_POST['hora_fim'];
$usuario_id = $_SESSION['usuario']

$sql = "INSERT INTO tarefa(titulo, descricao, data_inicio, hora_inicio, data_fim, hora_fim, usuario_id, status_tarefa_id, prioridade_tarefa_id) VALUES('$nome', '$email', '$senha', $perfil)";

$result = mysqli_query($con, $sql);

var_dump($result);

if($result == true){
    header("Location:../index.php");
}
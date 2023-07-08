<?php
# cadastra tarefas
require_once('connection.php');
require_once 'bloqueio.php';

$id = $_GET['id'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$data_inicio = $_POST['data_inicio'];
$hora_inicio = $_POST['hora_inicio'];
$data_fim = $_POST['data_fim'];
$hora_fim = $_POST['hora_fim'];
$usuario_id = $_SESSION['userid'];
$status = $_POST['status_tarefa'];
$categorias = $_SESSION['categorias'];
$prioridade = $_POST['prioridade'];

$sql = "UPDATE tarefa SET 
titulo = '$titulo', 
descricao = '$descricao', 
data_inicio = '$data_inicio', 
hora_inicio = '$hora_inicio', 
data_fim = '$hora_inicio', 
hora_fim = '$hora_fim', 
status_tarefa_id = $status, 
prioridade_tarefa_id = $prioridade WHERE id = $id";

$result = mysqli_query($con, $sql);

if($result == true){
    header('location:../home.php');
}
<?php
# responsável para verificar se login existe
require_once 'connection.php';

session_start();

$login = $_POST['login'];
$senha = md5($_POST['password']);

# cria query
$query = "select * from $db.usuario where login =" . $login . "and senha = " . $senha;

# verifica se query deu certo
$result = mysqli_query($con, $query);

$dados = mysqli_fetch_array($result);

if (mysqli_num_rows($result) > 0){
    $_SESSION['login'] = $login;
    $_SESSION['password'] = $password;
    header("Location:http://" .. );
}


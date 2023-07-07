<?php
# responsável por verificar se login existe
require_once 'connection.php';

session_start();

$login = $_POST['login'];
$senha = md5($_POST['password']);

# cria query
$query = "select * from $db.usuario where usuario.email = '$login' and usuario.senha = '$senha'";

# verifica se query deu certo
$result = mysqli_query($con, $query);

if (mysqli_num_rows($result) > 0){
    $dados = mysqli_fetch_array($result);
    $_SESSION['nome']      = $dados['nome'];
    $_SESSION['email']     = $dados['email'];
    $_SESSION['userid']    = $dados['id'];
    $_SESSION['perfil_id'] = $dados['perfil_id'];

    header("Location:http://" . $site . '/home.php');
}else{
    echo "<script>alert('Login ou senha inválido, tente novamente')";
    unset($_SESSION['nome']);
    unset($_SESSION['email']);
    echo $login;
    echo $senha;
    header("Location:http://" . $site . '/index.php?erro=2');;
}


<?php
# para fazer a conexão preciso do servidor, nome do banco, senha e usuário

$server = '127.0.0.1';
$db = 'TimeControl';
$user = 'root';
$password = '';

$con = mysqli_connect($server, $user, $password, $db);

if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_select_db($con, $db);
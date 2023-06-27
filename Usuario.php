<?php
$nome = $_POST['name'];
$email = $_POST['email'];
$senha = md5($_POST['password']);
$perfil = 2;

$sql = "INSERT INTO usuario(nome, email, senha, perfil_id) VALUES($nome, $email, $senha, $perfil)";
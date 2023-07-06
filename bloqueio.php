<?php
session_start();

if (!isset($_SESSION['email']) && !isset($_SESSION['perfil_id'])){
    header("Location:index.php?erro=1");
}

?>
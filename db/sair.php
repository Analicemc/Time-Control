<?php

session_start();

unset($_SESSION['nome']);
unset($_SESSION['email']);
unset($_SESSION['perfil_id']);

session_destroy();

header('location:http://localhost/timecontrol/index.php?msg=1');
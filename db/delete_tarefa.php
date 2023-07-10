<?php

require_once 'bloqueio.php';
require_once 'connection.php';

echo "<script>
    confirm('Deseja mesmo excluir?');
</script>";

$id = $_GET['id'];

$deleteSQL = "DELETE from tarefa WHERE id = $id";

$result = mysqli_query($con, $deleteSQL);

if ($result) {
    echo "<script>
        window.alert('tarefa excluída');
    </script>";
    header('Location:../home.php');
}
?>
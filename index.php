<?php
# Define mensagens de erro
if (isset($_GET['erro'])) {
    if ($_GET['erro'] == 1) {
        $errorMessage = "Acesso negado";
    } else if ($_GET['erro'] == 2) {
        $errorMessage = 'E-mail ou senha inválidos';
    } else {
        $errorMessage = "";
    }
}

# Define mensagens de alerta
if (isset($_GET['msg'])) {
    if ($_GET['msg'] == 1) {
        # logout realizado
        echo "<script>
            window.alert('Você saiu da sua conta');
        </script>";
    } else if ($_GET['msg'] == 2) {
        # cadastro realizado
        echo "<script>
            window.alert('Cadastro realizado com sucesso!');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<?php require_once 'head.php' ?>

<body>
    <main>
        <div class="col-5" id="login_form">
            <form action="db/verifica_login.php" method="post">

                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="login" placeholder="nome@email.com">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="text" class="form-control" id="password" name="password">
                </div>
                <button class="btn btn-primary mb-3" type="submit">Entrar</button>
                <button class="btn btn-success mb-3"><a href="cadastro_page.php">Cadastrar</a></button>
                <span class="errorMessage"><?php if (isset($_GET['erro'])) {
                                                echo $errorMessage;
                                            } ?></span>
            </form>
        </div>
    </main>
</body>

</html>
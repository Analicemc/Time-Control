<!DOCTYPE html>
<html lang="en">
<?php require_once 'head.php' ?>
<body>
    <form action="db/cad_usuario.php" method="post"> <!-- por padrão o cadastro é como usuário padrão -->
        <label>Nome
            <input required type="text" name="name">
        </label>
        <label>E-mail
            <input required type="email" name="email">
        </label>
        <label>Senha
            <input required type="password" name="password">
        </label>
        <label>Confirme sua senha
            <input required type="password" name="password2" id="password2">
        </label>
        <button type="submit">Cadastrar</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
<script>
    $('#password').on("keyup", function(){
        returnIfPasswordsAreEqual();
    });
    
    $('#password2').on("keyup", function(){
        returnIfPasswordsAreEqual();
    });

    function returnIfPasswordsAreEqual(){
        if ($('#password2').length >= $('#password').length){
            if($('#password2').val != $('#password').val){
                $('#password2').css('border', 'solid 1px red');
            }else{
                $('#password2').css('border', 'solid 1px green');
            }
        } 
    }
</script>
</html>
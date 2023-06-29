<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title>Cadastro - Time Control</title>
</head>
<body>
    <form action="Usuario.php" method="post"> <!-- por padrão o cadastro é como usuário padrão -->
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
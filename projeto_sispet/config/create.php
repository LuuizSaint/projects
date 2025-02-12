<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../public/src/css/style.css">
    <title>Login</title>
</head>

<body>
    <h1>Registrar-se!</h1>
    <div class="container-fluid">
        <form action="validate.php" method="post" class="">
            <div class="col-4 mb-3">
                <label for="userName">Nome Completo:</label>
                <input type="text" name="userName" class="form-control" placeholder="Seu nome completo:">

            </div>
            <div class="col-4 mb-3">
                <label for="userMail">E-Mail:</label>
                <input type="email" name="userMail" class="form-control" placeholder="Seu e-mail: ">
            </div>
            <div class="col-4 mb-3 divTelDate">
                <div class="me-5">
                    <label for="userTel">Telefone: </label>
                    <input type="tel" name="userTel" class="form-control" placeholder="Telefone para Contato: ">
                </div>
                <div>
                    <label for="userDate">Data de Nascimento:</label>
                    <input type="date" name="userDate" class="form-control">
                </div>
            </div>

            <div class="col-4 mb-3">
                <label for="password">Senha:</label>
                <input type="password" name="password" class="form-control" placeholder="Sua senha: ">
            </div>
            <div class="col-4">
                <label for="password2">Confirmar Senha:</label>
                <input type="password" name="password2" class="form-control" placeholder="Confirmar senha: ">
            </div>
            <div class="col-4 mt-4 divBtn">
                <button type="submit" name="submitType" value="register" class="btn btn-primary">Registrar</button>
                <a href="../public/index.php" class="">Sair</a>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
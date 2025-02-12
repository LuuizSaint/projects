<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="src/css/style.css">
    <title>Login</title>
</head>

<body>
    <h1>Seja Bem Vindo(a)!</h1>
    <div class="container-fluid">
        <form action="../config/validate.php" method="post" class="">
            <div class="col-4 mb-3">
                <label for="email">E-Mail:</label>
                <input type="email" name="email" class="form-control" placeholder="Seu e-mail: ">
            </div>
            <div class="col-4">
                <label for="password">Senha:</label>
                <input type="password" name="password" class="form-control" placeholder="Sua senha: ">
            </div>
            <div class="col-4 mt-4 divBtn">
                <button type="submit" name="submitType" value="login" class="btn btn-primary ">Entrar</button>
                <a href="../config/create.php" class="">Registrar-se!</a>
            </div>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
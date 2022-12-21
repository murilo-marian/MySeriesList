<!DOCTYPE html>
<?php
session_start();
session_destroy();
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Adicionar Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="../styles/loginStyles.css" />
    <link rel="stylesheet" href="../styles/globalStyles.css" />
    <link rel="icon" type="image/x-icon" href="../images/fast-forward-btn-svg.svg" />
</head>

<body>
    <?= include_once '../navbar.php' ?>
    <div>
        <div class="container login-form">
            <div class="title-login mt-5 mb-4">
                <h1>Login</h1>
            </div>

            <form action="../connection/login.php" method="POST">
                <div class="form-floating mb-3">
                    <input required type="email" class="form-control id" name="email" id="email" placeholder="email">
                    <label for="email" class="">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input required type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                    <label for="senha" class="">Senha</label>
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                <a type="button" href="register.php" class="btn btn-primary">Registrar-se</a>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </div>
</body>

</html>
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
    <div>
        <?= include_once '../navbar.php' ?>
        <div class="container login-form">
            <div class="title-login mt-5 mb-4">
                <h1>Registrar</h1>
            </div>
            <form action="../connection/register.php" method="POST">
                <div class="form-floating mb-3">
                    <input type="nome" class="form-control nome" name="nome" id="nome" placeholder="nome">
                    <label for="nome" class="">Nome</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="email" class="form-control id" name="email" id="email" placeholder="email">
                    <label for="email" class="">Email</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                    <label for="senha" class="">Senha</label>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" id="isAdmin" name="isAdmin" type="checkbox" />
                    <label style="color: white;" class="form-check-label" for="isAdmin">isAdmin</label>
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>
                <a type="button" href="login.php" class="btn btn-primary">Login</a>
            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </div>

</body>

</html>
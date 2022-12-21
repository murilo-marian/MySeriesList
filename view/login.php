<!DOCTYPE html>
<?php
session_destroy();
session_start();
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Adicionar Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="../styles/indexStyles.css" />
    <link rel="stylesheet" href="../styles/globalStyles.css" />
    <link rel="icon" type="image/x-icon" href="../images/fast-forward-btn-svg.svg" />
</head>

<body>
    <container>
        <form action="../connection/login.php" method="POST">
            <div class="form-floating">
                <input type="email" class="form-control id" name="email" id="email" placeholder="email">
                <label for="email" class="">Email</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
                <label for="senha" class="">Senha</label>
            </div>
            <button type="submit" class="button-primary">Login</button>
            <a type="button" href="register.php" class="button-primary">Registrar-se</a>
        </form>
    </container>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>
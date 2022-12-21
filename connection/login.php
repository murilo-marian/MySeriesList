<?php
session_start();
include_once "./bd_funcs.php";

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $result = pesquisaPorEmail($email);

    if (is_countable($result) && count($result) > 0) {

        //compare password and username
        if ($result['email'] === $email && $senha === $result['senha']) {

            echo "Logged in!";

            $_SESSION['login'] = true;
            $_SESSION['id'] = $result['id'];
            $_SESSION['nome'] = $result['nome'];
            $_SESSION['email'] = $result['email'];
            $_SESSION['isAdmin'] = $result['isAdmin'];

            header("Location: ../view/index.php");

            exit();
        } else {
            header("Location: ../view/login.php");
            exit();
        }
    } else {
        header("Location: ../view/login.php");
        exit();
    }
} else {

    header("Location: ../view/login.php");

    exit();
}

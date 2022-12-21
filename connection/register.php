<?php
session_start();
include_once "./bd_funcs.php";

if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['senha'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $isAdmin = isset($_POST['isAdmin']) ? true : false;
    $result = pesquisaPorEmail($email);

    if ($result == null) {

        //compare password and username
        try {
            $conexao = new PDO(MYSQL_DSN, DB_USER, DB_PASSWORD);

            $query = 'INSERT INTO usuario (nome, email, senha, isAdmin) values (:nome, :email, :senha, :isAdmin)';

            //preparar consulta
            $stmt = $conexao->prepare($query);
            //vincular variaveis de consulta
            $stmt->bindValue(':nome', $nome);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':senha', $senha);
            $stmt->bindValue(':isAdmin', $isAdmin);
            //executar
            $stmt->execute();

            header('location: ../view/index.php');
        } catch (PDOException $e) {
            print('Erro  ao conectar como banco  de dados... <br>' . $e->getMessage());
            die();
        }


        header("Location: ../view/login.php");

        exit();
    }
} else {
    exit();
}

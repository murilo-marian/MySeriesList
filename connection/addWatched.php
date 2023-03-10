<?php
session_start();
$id = $_SESSION['id'];
$serieId = $_GET['serieId'];

include_once "conf.inc.php";

try {
    $conexao = new PDO(MYSQL_DSN, DB_USER, DB_PASSWORD);

    $query = 'INSERT INTO usuario_topseries(id, serieId) values (:id, :serieId)';

    //preparar consulta
    $stmt = $conexao->prepare($query);
    //vincular variaveis de consulta
    $stmt->bindValue(':id', $id);
    $stmt->bindValue(':serieId', $serieId);
    //executar
    $stmt->execute();
    header('location: ../view/watching.php');
} catch (PDOException $e) {
    print('Erro  ao conectar como banco  de dados... <br>' . $e->getMessage());
    die();
}

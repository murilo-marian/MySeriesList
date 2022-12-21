<?php
$id = $_POST['id'];
$serieId = $_POST['serieId'];

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
} catch (PDOException $e) {
    print('Erro  ao conectar como banco  de dados... <br>' . $e->getMessage());
    die();
}

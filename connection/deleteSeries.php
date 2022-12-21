<?php
if ($_POST['id'] != null) {
    $id = $_POST['id'];
}

include_once "conf.inc.php";
try {
    $conexao = new PDO(MYSQL_DSN, DB_USER, DB_PASSWORD);

    //query
    $query = 'DELETE FROM topseries WHERE serieId = :id';

    //preparar consulta
    $stmt = $conexao->prepare($query);
    //vincular variaveis de consulta
    $stmt->bindValue(':id', $id);

    //executar
    $stmt->execute();
} catch (PDOException $e) {
    print('Erro  ao conectar como banco  de dados... <br>' . $e->getMessage());
    die();
}

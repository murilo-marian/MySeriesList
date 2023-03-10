<?php

include_once "conf.inc.php";

try {
    $conexao = new PDO(MYSQL_DSN, DB_USER, DB_PASSWORD);

    //query
    $query = 'SELECT serieId, nomeSerie, dataLancamento, numTemporadas, numEpisodios, descricao, imagePath FROM topseries INNER JOIN usuario_topseries USING (serieId) INNER JOIN usuario USING (id) WHERE id = :id ORDER BY popularidade DESC';

    /* if (isset($_GET['pesquisa'])) {
        if ($_GET['pesquisa'] != '') {
            $query .= ' WHERE nome LIKE :pesquisa OR sobrenome LIKE :pesquisa';
        }
    } */
    //preparar consulta
    $stmt = $conexao->prepare($query);
    $stmt->bindValue(':id', $_SESSION['id']);
    /* if (isset($_GET['pesquisa'])) {
        if ($_GET['pesquisa'] != '') {
            $stmt->bindValue(':pesquisa', $_GET['pesquisa'] . "%", PDO::PARAM_STR);
        }
    } */
    //executar
    $stmt->execute();
    $result = $stmt->fetchAll();
} catch (PDOException $e) {
    print('Erro  ao conectar como banco  de dados... <br>' . $e->getMessage());
    die();
}

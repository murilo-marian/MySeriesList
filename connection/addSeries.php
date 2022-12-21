<?php
if ($_POST['id'] != null) {
    $id = $_POST['id'];
}
$nome = $_POST['nome'];
$tempo = $_POST['temporadas'];
$ep = $_POST['episodios'];
$data = $_POST['lancamento'];
$pop = $_POST['pop'];
$desc = $_POST['descricao'];
$imgPath = $_POST['imagePath'];
$update = false;

if ($nome != "") {
    include_once "conf.inc.php";
    try {
        $conexao = new PDO(MYSQL_DSN, DB_USER, DB_PASSWORD);

        //query
        if (isset($id)) {
            $update = true;
            $query = 'UPDATE topseries SET nomeSerie = :nomeSerie, numTemporadas = :numTemporadas, numEpisodios = :numEpisodios, dataLancamento = :dataLancamento, popularidade = :popularidade,
            descricao = :descricao, imagePath = :imagePath WHERE serieId = :id';
        } else {
            $query = 'INSERT INTO topseries(nomeSerie, numTemporadas, numEpisodios, dataLancamento, popularidade, descricao, imagePath) values (:nomeSerie, :numTemporadas, :numEpisodios, :dataLancamento, :popularidade, :descricao, :imagePath)';
        }
        //preparar consulta
        $stmt = $conexao->prepare($query);
        //vincular variaveis de consulta
        $stmt->bindValue(':nomeSerie', $nome);
        $stmt->bindValue(':numTemporadas', $tempo);
        $stmt->bindValue(':numEpisodios', $ep);
        $stmt->bindValue(':dataLancamento', $data);
        $stmt->bindValue(':popularidade', $pop);
        $stmt->bindValue(':descricao', $desc);
        $stmt->bindValue(':imagePath', $imgPath);

        if ($update) {
            $stmt->bindValue(':id', $id);
        }
        //executar
        $stmt->execute();

        header('location: ../view/topSeries.php');
    } catch (PDOException $e) {
        print('Erro  ao conectar como banco  de dados... <br>' . $e->getMessage());
        die();
    }
}

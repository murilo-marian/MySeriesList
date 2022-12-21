<!DOCTYPE html>
<?php
session_start();
include '../connection/getWatching.php';
if ($_SESSION['login'] == false) {
    header("location: login.php");
}

?>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Assistindo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="../styles/watchingStyles.css" />
    <link rel="stylesheet" href="../styles/globalStyles.css" />
    <link rel="icon" type="image/x-icon" href="../images/fast-forward-btn-svg.svg" />
</head>

<body>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <div class="bg">
        <?= include_once '../navbar.php'; ?>;
        <div class="title mt-5 mb-4">
            <h1>Top Series</h1>
        </div>
        <div>
            <div class="container">
                <div class="accordion" id="accordionExample">
                    <?php
                    foreach ($result as $series) { ?>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading<?= $series['serieId'] ?>">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $series['serieId'] ?>" aria-expanded="false" aria-controls="collapse<?= $series['serieId'] ?>">
                                    <?= $series['nomeSerie'] ?>
                                </button>
                            </h2>
                            <div id="collapse<?= $series['serieId'] ?>" class="accordion-collapse collapse collapsed" aria-labelledby="heading<?= $series['serieId'] ?>" data-bs-parent="#accordionExample">
                                <div style="display: inline-block;">
                                    <img style="width: 100px; margin:8px;" src="../images/TopSeries/<?= $series['imagePath'] ?>.png">
                                </div>
                                <div style="display: inline-block;" class="accordion-body">
                                    <strong><?= $series['descricao'] ?></strong>
                                </div>
                                <div style="display: inline-block;" class="accordion-body">
                                    <strong>Temporadas: <?= $series['numTemporadas'] ?></strong>
                                </div>
                                <div style="display: inline-block;" class="accordion-body">
                                    <strong>Episódios: <?= $series['numEpisodios'] ?></strong>
                                </div>
                                <div style="display: inline-block;" class="accordion-body">
                                    <strong>Lançamento: <?= $series['dataLancamento'] ?></strong>
                                </div>
                                <div class="accordion-body">
                                    <a href="../connection/removeWatched.php?serieId=<?= $series['serieId']; ?>" id=" remove" class="btn btn-danger">Remover</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>
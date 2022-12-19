<!DOCTYPE html>
<?php
include "../connection/getTopSeries.php";
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Adicionar Contatos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="../styles/topSeriesStyles.css" />
    <link rel="stylesheet" href="../styles/globalStyles.css" />
    <link rel="icon" type="image/x-icon" href="../images/fast-forward-btn-svg.svg" />
</head>

<body>
    <div>
        <?= include_once '../navbar.php' ?>
        <div class="title mt-5">
            <h1>Top Series</h1>
        </div>
        <div class="container">
            <div class="row row-cols-auto">
                <?php
                foreach ($result as $series) { ?>
                    <div class="col gy-4" style="margin-left:auto;margin-right:auto;">
                        <div class="card text-bg-dark" style="width: 14rem;">
                            <img src="../images/1407004761-i633888.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $series['nomeSerie']; ?></h5>
                                <a href="#" class="btn btn-primary">Adicionar</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <footer class="footer">

        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </div>
</body>

</html>
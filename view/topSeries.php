<!DOCTYPE html>
<?php
include "../connection/getTopSeries.php";
session_start();
if ($_SESSION['login'] == false) {
    $_SESSION['isAdmin'] = false;
    $_SESSION['login'] = false;
} else {
    $id = $_SESSION['id'];
}
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Melhores Séries</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="../styles/topSeriesStyles.css" />
    <link rel="stylesheet" href="../styles/globalStyles.css" />
    <link rel="icon" type="image/x-icon" href="../images/fast-forward-btn-svg.svg" />
</head>

<body>
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <div>
        <?= include_once '../navbar.php' ?>
        <div class="title mt-5">
            <h1>Top Series</h1>
        </div>
        <?php if ($_SESSION['isAdmin'] == true) { ?>
            <div>
                <div class="title">
                    <container>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Cadastro de Série
                        </button>
                    </container>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastro de Série</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="container-fluid">
                                    <div class="row g-3">
                                        <form action="../connection/addSeries.php" class="series" id="modalSeries" method="POST">
                                            <div class="mb-3 form-floating">
                                                <input type="text" readonly class="form-control id" name="id" id="id" placeholder="id">
                                                <label for="id" class="">ID</label>
                                            </div>
                                            <div class="mb-3 form-floating">
                                                <input required type="text" class="form-control nome" name="nome" id="nome" placeholder="Nome da Série">
                                                <label for="nome" class="">Nome da Série</label>
                                            </div>
                                            <div class="mb-3 form-floating">
                                                <input required type="number" class="form-control temporadas" name="temporadas" id="temporadas" placeholder="Nº de Temporadas">
                                                <label for="temporadas" class="">Nº de Temporadas</label>
                                            </div>
                                            <div class="mb-3 form-floating">
                                                <input required type="number" class="form-control episodios" name="episodios" id="episodios" placeholder="Nº de Episodios">
                                                <label for="episodios" class="">Nº de Temporadas</label>
                                            </div>
                                            <div class="mb-3 form-floating">
                                                <input required type="date" class="form-control lancamento" name="lancamento" id="lancamento" placeholder="Data de Lançamento">
                                                <label for="lancamento" class="">Data de Lançamento</label>
                                            </div>
                                            <div class="mb-3 form-floating">
                                                <input required type="number" class="form-control pop" name="pop" id="pop" placeholder="Valor de Popularidade">
                                                <label for="pop" class="">Valor de Popularidade</label>
                                            </div>
                                            <div class="mb-3 form-floating">
                                                <input required type="text" class="form-control desc" name="descricao" id="descricao" placeholder="Descrição">
                                                <label for="descricao" class="">Descrição</label>
                                            </div>
                                            <div class="mb-3 form-floating">
                                                <input required type="text" class="form-control imagePath" name="imagePath" id="imagePath" placeholder="Nome da Imagem no Diretório">
                                                <label for="imagePath" class="">Nome da Imagem no Diretório</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class=" modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <button type="button" id="submit" class="btn btn-primary" data-bs-dismiss="modal">Salvar</button>
                                <button type="button" id="delete" class="btn btn-danger" data-bs-dismiss="modal">Excluir</button>
                            </div>
                            <script>
                                $(function() {
                                    $("button#submit").click(function() {
                                        $.ajax({
                                            type: "POST",
                                            url: "../connection/addSeries.php",
                                            data: $('form.series').serialize(),
                                            error: function() {
                                                alert("error");

                                            },
                                            success: function(data) {
                                                console.log(data);
                                            }
                                        });
                                    });
                                    $("button#delete").click(function() {
                                        $.ajax({
                                            type: "POST",
                                            url: "../connection/deleteSeries.php",
                                            data: $('form.series').serialize(),
                                            error: function() {
                                                alert("error");

                                            },
                                            success: function(data) {
                                                console.log(data);
                                            }
                                        });
                                    });
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="container">
            <div class="row row-cols-auto">
                <?php
                foreach ($result as $series) { ?>
                    <div class="col gy-4" style="margin-left:auto;margin-right:auto;">
                        <div class="card text-bg-dark" style="width: 14rem; height: 28rem;">
                            <img src="../images/TopSeries/<?= $series['imagePath'] ?>.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $series['nomeSerie']; ?></h5>
                                <?php if ($_SESSION['isAdmin'] == true) { ?>
                                    <a type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-id="<?php echo $series['serieId']; ?>" data-bs-nome="<?php echo $series['nomeSerie']; ?>" data-bs-t="<?php echo $series['numTemporadas']; ?>" data-bs-ep="<?php echo $series['numEpisodios']; ?>" data-bs-data="<?php echo $series['dataLancamento']; ?>" data-bs-pop="<?php echo $series['popularidade']; ?>" data-bs-desc=" <?php echo $series['descricao']; ?>" data-bs-imgPath="<?php echo $series['imagePath']; ?>" data-bs-target="#exampleModal">
                                        Alterar
                                    </a>
                                <?php } ?>
                                <?php if ($_SESSION['login'] == true) { ?>
                                    <a href="../connection/addWatched.php?serieId=<?= $series['serieId']; ?>" class="btn btn-outline-primary">Adicionar</a>
                                <?php } ?>

                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
        <footer>

        </footer>
        <script src="../script/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    </div>
</body>

</html>
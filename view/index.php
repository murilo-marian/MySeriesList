<!DOCTYPE html>
<?php
session_start();
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>MySeriesList</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
    <link rel="stylesheet" href="../styles/globalStyles.css" />
    <link rel="stylesheet" href="../styles/indexStyles.css" />
    <link rel="icon" type="image/x-icon" href="../images/fast-forward-btn-svg.svg" />
</head>

<body>
    <div>
        <?= include_once '../navbar.php' ?>;
        <div class="carousel-bg">
            <div class="container carousel-container mt-5">
                <div id="carouselExampleDark" class="carousel-content carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="../images/carousel/Wandinha.png" class="d-block w-100 carousel-img" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Wandinha</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac velit arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;.</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="../images/carousel/Jojo.png" class="d-block w-100 carousel-img" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Jojo's Bizarre Adventure</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac velit arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../images/carousel/Chiquititas.png" class="d-block w-100 carousel-img" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Chiquititas</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac velit arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="container mt-5">
            <div class="accordion" id="accordionFlushExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Notícia genérica 1
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt dui at ex tincidunt vehicula. Pellentesque vulputate nunc ut metus venenatis, nec euismod libero facilisis. In sodales porttitor pulvinar. Maecenas vel eros quis dolor eleifend dictum. Vivamus egestas tristique mauris, vitae suscipit nunc aliquet in. Praesent ut mauris aliquam, euismod elit at, aliquet nibh. Suspendisse lobortis tincidunt efficitur. Phasellus ut consectetur magna.

                            In vitae ex ac ligula accumsan sollicitudin a ut eros. Nulla sollicitudin nec nisl nec facilisis. Praesent vitae rhoncus justo, quis ornare metus. Cras ornare tellus viverra tempor molestie. Mauris fermentum arcu purus. Donec pretium tortor mi, et dapibus enim vehicula at. Donec faucibus augue tellus. Morbi in nibh est. Curabitur et ex nec nisl aliquet mattis.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Notícia genérica 2
                        </button>
                    </h2>
                    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt dui at ex tincidunt vehicula. Pellentesque vulputate nunc ut metus venenatis, nec euismod libero facilisis. In sodales porttitor pulvinar. Maecenas vel eros quis dolor eleifend dictum. Vivamus egestas tristique mauris, vitae suscipit nunc aliquet in. Praesent ut mauris aliquam, euismod elit at, aliquet nibh. Suspendisse lobortis tincidunt efficitur. Phasellus ut consectetur magna.

                            In vitae ex ac ligula accumsan sollicitudin a ut eros. Nulla sollicitudin nec nisl nec facilisis. Praesent vitae rhoncus justo, quis ornare metus. Cras ornare tellus viverra tempor molestie. Mauris fermentum arcu purus. Donec pretium tortor mi, et dapibus enim vehicula at. Donec faucibus augue tellus. Morbi in nibh est. Curabitur et ex nec nisl aliquet mattis.</div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                            Notícia genérica 3
                        </button>
                    </h2>
                    <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin tincidunt dui at ex tincidunt vehicula. Pellentesque vulputate nunc ut metus venenatis, nec euismod libero facilisis. In sodales porttitor pulvinar. Maecenas vel eros quis dolor eleifend dictum. Vivamus egestas tristique mauris, vitae suscipit nunc aliquet in. Praesent ut mauris aliquam, euismod elit at, aliquet nibh. Suspendisse lobortis tincidunt efficitur. Phasellus ut consectetur magna.

                            In vitae ex ac ligula accumsan sollicitudin a ut eros. Nulla sollicitudin nec nisl nec facilisis. Praesent vitae rhoncus justo, quis ornare metus. Cras ornare tellus viverra tempor molestie. Mauris fermentum arcu purus. Donec pretium tortor mi, et dapibus enim vehicula at. Donec faucibus augue tellus. Morbi in nibh est. Curabitur et ex nec nisl aliquet mattis.</div>
                    </div>
                </div>
            </div>
        </div>

        <footer>

        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>
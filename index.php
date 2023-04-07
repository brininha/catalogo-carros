<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        include('menu.php');
    ?>
    <div class="container">
        <div class="card-group">
            <div class="card">
                <a href="carros.php?id=0">
                    <img src="./images/c1.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Carro</h5>
                        <p class="card-text">Preço</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="carros.php?id=1">
                    <img src="./images/c2.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Carro</h5>
                        <p class="card-text">Preço</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="carros.php?id=2">
                    <img src="./images/c3.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Carro</h5>
                        <p class="card-text">Preço</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="carros.php?id=3">
                    <img src="./images/c4.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Carro</h5>
                        <p class="card-text">Preço</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="carros.php?id=4">
                    <img src="./images/c5.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Carro</h5>
                        <p class="card-text">Preço</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="card-group">
            <div class="card">
                <a href="carros.php?id=5">
                    <img src="./images/c6.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Carro</h5>
                        <p class="card-text">Preço</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="carros.php?id=6">
                    <img src="./images/c7.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Carro</h5>
                        <p class="card-text">Preço</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="carros.php?id=7">
                    <img src="./images/c8.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Carro</h5>
                        <p class="card-text">Preço</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="carros.php?id=8">
                    <img src="./images/c9.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Carro</h5>
                        <p class="card-text">Preço</p>
                    </div>
                </a>
            </div>
            <div class="card">
                <a href="carros.php?id=9">
                    <img src="./images/c10.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Nome do Carro</h5>
                        <p class="card-text">Preço</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php
        include('rodape.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
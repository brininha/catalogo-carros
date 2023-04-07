<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <?php
                $i = $_GET['id'];
                $modelo = ['Fusca', 'Ferrari', 'Camaro'];
                $valor = [100, 200, 300];
                $img = ['c1.jpg', 'c2.jpg', 'c3.jpg', 'c4.jpg', 'c5.jpg', 'c6.jpg', 'c7.jpg', 'c8.jpg', 'c9.jpg', 'c10.jpg'];
                $carro = '<h1 class="modelo">' . $modelo[$i] . '</h1><p class="valor">' . $valor[$i] . '</p><img class="imagem" src="./images/' . $img[$i] . '">';
                echo $carro;
            ?>
        </div>
    </div>
</body>
</html>
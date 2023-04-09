<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações do carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        include('conexao.php');
        include('menu.php');
    ?>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
                if (isset($_GET['clicked'])) {
                    $busca = $_GET['busca'];
                }
                $comando = "SELECT id, modelo, valor, imagem, ano, cor, km FROM carro WHERE modelo LIKE '%$busca%'";
                $enviar = mysqli_query($conexao, $comando);
                $resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
                if (sizeof($resultado) == 0) {
                    echo "<div class='box'>Nenhum veículo encontrado!</div>";
                } else {
                    foreach ($resultado as $produto) {
                        $id = $produto['id'];
                        $modelo = $produto['modelo'];
                        $valor = $produto['valor'];
                        $img = $produto['imagem'];
                        $ano = $produto['ano'];
                        $cor = $produto['cor'];
                        $km = $produto['km'];
            ?>
            <div class="col">
                <a href="carros.php?id=<?=$id?>">
                    <div class="card h-100">
                        <img src="<?=$img?>" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title"><?=$modelo?></h5>
                            <p class="card-text"><b>R$ <?=$valor?></b></p>
                            <p class="card-text">Ano: <?=$ano?></p>
                            <p class="card-text">Cor: <?=$cor?></p>
                            <p class="card-text">ID: <?=$id?></p>
                        </div>
                    </div>
                </a>
            </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>
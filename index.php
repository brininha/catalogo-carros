<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        include('conexao.php');
        include('menu.php');
        if (isset($_GET['alterar'])) {
            $id = $_GET['id-alt'];
            $campo = $_GET['alterar'];
            $alteracao = $_GET['campo-alt'];

            $comando = "UPDATE carro SET $campo = '$alteracao' WHERE id = $id";
            $enviar = mysqli_query($conexao, $comando);
        }

        if (isset($_GET['excluir'])) {
            $id = $_GET['id-del'];

            $comando = "DELETE FROM carro WHERE id = $id";
            $enviar = mysqli_query($conexao, $comando);
        }

        if (isset($_GET['enviar'])) {
            if (!empty($_GET['modelo']) || !empty($_GET['valor']) || !empty($_GET['img']) || !empty($_GET['ano']) || !empty($_GET['cor']) || !empty($_GET['km'])) {
                $modelo = $_GET['modelo'];
                $valor = $_GET['valor'];
                $img = $_GET['img'];
                $ano = $_GET['ano'];
                $cor = $_GET['cor'];
                $km = $_GET['km'];

                $comando = "INSERT INTO carro(modelo, valor, imagem, ano, cor, km) VALUES ('$modelo', '$valor', '$img', '$ano', '$cor', '$km')";
                $enviar = mysqli_query($conexao, $comando);
            }
        }
        $comando = "SELECT * FROM carro ORDER BY id DESC";
        $enviar = mysqli_query($conexao, $comando);
        $resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
    ?>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
    <?php 
        foreach($resultado as $produto) {
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
                        <img src="<?=$img?>" class="card-img-top" alt=" Falha no carregamento">
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
    ?>  
        </div>
    </div>
    <?php
        include('rodape.php');
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
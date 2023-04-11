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
        <div class="box">
            <?php
                $id = $_GET['id'];
                $comando = "SELECT modelo, valor, imagem, ano, cor, km FROM carro WHERE id = $id";
                $enviar = mysqli_query($conexao, $comando);
                $resultado = mysqli_fetch_all($enviar, MYSQLI_ASSOC);
                foreach ($resultado as $produto) {
                    $modelo = $produto['modelo'];
                    $valor = $produto['valor'];
                    $img = $produto['imagem'];
                    $ano = $produto['ano'];
                    $cor = $produto['cor'];
                    $km = $produto['km'];
                }
                
            ?>
            <h2 style="font-size: 25px"><?=$modelo?> <a class="config-icon" href="alterar.php?id=<?=$id?>&campo=modelo">⚙️</a></h2>
            <figure>
                <img src="<?=$img?>" class="imagem" alt=" Falha no carregamento">
                <figcaption><a class="config-icon" href="alterar.php?id=<?=$id?>&campo=imagem">⚙️</a></figcaption>
            </figure>
            <p class="car-text">Preço: <b class="car-price">R$ <?=$valor?></b> <a class="config-icon" href="alterar.php?id=<?=$id?>&campo=valor">⚙️</a></p>
            <p class="car-text">Ano: <?=$ano?> <a class="config-icon" href="alterar.php?id=<?=$id?>&campo=ano">⚙️</a></p>
            <p class="car-text">Cor: <?=$cor?> <a class="config-icon" href="alterar.php?id=<?=$id?>&campo=cor">⚙️</a></p>
            <p class="car-text">Quilometragem total: <?=$km?> km <a class="config-icon" href="alterar.php?id=<?=$id?>&campo=km">⚙️</a></p>
            <p class="car-text">ID: <?=$id?></p>
            <form style="display: inline" action="deletar.php" method="post">
                <button type="submit" class="btn btn-outline-danger" value="<?=$id?>" name="deletar">Excluir</button>
            </form>
            <?php
                if ($modelo == 'Chevrolet Camaro SS') {
            ?>
                    <audio id="musica" autoplay>
                        <source src="./audios/camaro-amarelo.mp3" type="audio/mp3">
                    </audio>
            <?php
                } else if ($modelo == 'Volkswagen New Beetle') {
            ?>
                    <audio id="musica" autoplay>
                        <source src="./audios/barbie.mp3" type="audio/mp3">
                    </audio>
            <?php
                } else if ($modelo == 'Nôitibus Andante') {
            ?>
                    <audio id="musica" autoplay>
                        <source src="./audios/hp.mp3" type="audio/mp3">
                    </audio>
            <?php
                } else if ($modelo == 'Máquina de Mistério') {
            ?>
                    <audio id="musica" autoplay>
                        <source src="./audios/scooby.mp3" type="audio/mp3">
                    </audio>
            <?php
                } else if ($modelo == 'Volkswagen Brasília') {
            ?>
                    <audio id="musica" autoplay>
                        <source src="./audios/mamonas.mp3" type="audio/mp3">
                    </audio>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>
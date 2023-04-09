<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        include('conexao.php');
        include('menu.php');
    ?>
        <div class="box">
            <form action="index.php" method="get">
                <h3 class="form-title">Cadastrar novo carro</h3>
                <label>Modelo/marca:</label><br>
                <input type="text" name="modelo" required><br>
                <label>Valor:</label><br>
                <input type="text" name="valor" step="0.1" required><br>
                <label>URL da imagem:</label><br>
                <input type="text" name="img" required><br>
                <label>Ano:</label><br>
                <input type="text" name="ano" required><br>
                <label>Cor:</label><br>
                <input type="text" name="cor" required><br>
                <label>Quilometragem total:</label><br>
                <input type="text" name="km" required><br><br>
                <button type="submit" class="btn btn-dark" name="enviar" >Enviar</button>
            </form>
        </div>
        <img src="images/carro.gif" class="car-gif">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
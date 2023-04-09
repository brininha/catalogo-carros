<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>
    <?php
        include('conexao.php');
        include('menu.php');
        $id = $_GET['id'];
        $campo = $_GET['campo'];
    ?>
        <div class="box">
            <form action="index.php" method="get">
                <h3 class="form-title">Editar informação</h3>
                <label>Confirme o ID:</label><br>
                <input type="text" value="<?=$id?>" name="id-alt" readonly="readonly" required><br>
                <label class="label-name"><?=$campo?>:</label><br>
                <input type="text" name="campo-alt" required><br><br>
                <button type="submit" class="btn btn-dark" name="alterar" value="<?=$campo?>">Alterar</button>
            </form>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
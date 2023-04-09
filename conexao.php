<?php
    $hostname = 'localhost';
    $database = 'carros';
    $user = 'root';
    $password = "";

    $conexao = new mysqli($hostname, $user, $password, $database);

    if ($conexao->connect_errno) {
        echo 'Falha ao conectar';
    }
?>
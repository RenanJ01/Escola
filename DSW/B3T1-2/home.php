<?php
session_start();
if (!isset($_SESSION['Usuario'])) {
    header('Location: ./index.html');
} else {
    $usuario = $_SESSION['Usuario'];
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <link rel="stylesheet" href="main.css">
    <title>White Seda</title>
</head>

<body>

    <!-- Menu Suspenso -->
    <nav class="nav_bar" id="nav_bar">
        <div class="bar">
            <span>White SEDA</span>
            <a href="./logout.php?nivel=0" class="bar_item button">Logout</a>
            <a href="./index.html" class="bar_item button">Início</a>
        </div>
    </nav>

    <!-- Integrantes -->
    <div id="aba">
        <h1>Integrantes do Grupo:</h1>
        <p>
            David Gregorio - CB3008681<br>
            Juan Oliveira - CB3009921<br>
            Nicolas dos Santos - CB3008932<br>
            Wictor Eduardo -CB3008622<br>
        </p>
        <hr style="border: 1px solid var(--color-3);">
    </div>

    <!-- Empresa -->
    <main>
        <?php

        echo ("<h1>Bem-Vindo usuario: CTII448</h1> 
        <p>Nesse trabalho de DSW com o seguinte email.<br>E-mail:" . $_SESSION['Usuario'] . "</p>");

        ?>
    </main>

</body>

</html>
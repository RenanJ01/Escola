<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
    <!-- Cabeçalho -->

    <!-- Menu Suspenso -->
    <nav class="nav_bar" id="nav_bar">
        <div class="bar">
            <a href="home" class="bar_item button">Início</a>
            <a href="produto" class="bar_item button">Produtos</a>
            <a href="sobre" class="bar_item button">Sobre Nós</a>
        </div>
    </nav>

    <div id="article">
        <!-- Integrantes -->
        <div id="grupo">
            <h1>Integrantes do Grupo:</h1>
            <p>
                Eriel de Jesus - CB1990543 </br>
                Jonatas Renan - CB3008606 </br>
            </p>
            <hr style="border: 1px solid var(--color-3);">
        </div>

        <!-- ----------------------------------------------------------------- -->

        <!-- Contéudo -->
        <main>
            <?php
            // Função definida em Controller.php
            $this->carregarViewNoTemplate($nomeView, $dadosModel);
            ?>
        </main>

    </div>
    <!-- ----------------------------------------------------------------- -->

    <!-- Rodapé -->

    <!-- ----------------------------------------------------------------- -->
</body>

</html>
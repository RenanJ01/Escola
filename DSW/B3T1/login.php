<?php

session_start();

if (isset($_POST['login'])) {
    $login_db = 'trabalho@dsw.ifsp';
    $senha_db = '123456';
    $erros = array();
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    if (empty($login) || empty($senha)) {
        $erros[] = "<li>Login e/ou senha não informado(s)!</li>";
    } elseif ($login != $login_db) {
        $erros[] = "<li>Usuário não encontrado!</li>";
    } elseif ($senha != $senha_db) {
        $erros[] = "<li>Senha inválida!</li>";
    } else {
        $_SESSION['Usuario'] = $login;
        header('Location: home.php');
    }
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>BlackSeda - Login</title>
</head>

<body>

    <div class="login-container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="login-form">
            <h1>Login</h1>
            <div class="input-container">
                <input type="email" placeholder="Email" name="login" required>
            </div>
            <div class="input-container">
                <input type="password" placeholder="Senha" name="senha" required>
            </div>
            <button type="submit">Entrar</button>
            <div id="alert-container">
                <?php
                if (!empty($erros)) {
                    foreach ($erros as $erro) {
                        echo $erro;
                    }
                }
                ?>
            </div>
        </form>
    </div>

    <script>
        var i = 0, imagem = ["https://images7.alphacoders.com/132/thumbbig-1325039.webp", "https://images2.alphacoders.com/130/thumbbig-1306262.webp", "https://images7.alphacoders.com/130/thumbbig-1301850.webp", "https://images7.alphacoders.com/129/thumbbig-1298592.webp", "https://images8.alphacoders.com/132/thumbbig-1325725.webp"];

    function changeBackgroundImage() {
        document.body.style.backgroundImage = 'url('+imagem[i]+')';
        i = (i + 1) % imagem.length;
    }

    // Função para iniciar o loop a cada 2 minutos (120000 milissegundos)
    function startBackgroundLoop() {
        changeBackgroundImage();
        setInterval(changeBackgroundImage, 100000); // 2 minutos
    }

    window.addEventListener('load', startBackgroundLoop);

    </script>
</body>

</html>
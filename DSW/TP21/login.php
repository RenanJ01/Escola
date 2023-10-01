<?php
include_once("./connect.php");

session_start();

if (isset($_POST['login'])) {
    $erros = array();
    $login = filter_input(INPUT_POST, "login", FILTER_VALIDATE_EMAIL);
    $senha = MD5($_POST['senha']);
    $conex = new Conexao();
    $exec = $conex->Con_Select("SELECT * FROM Usuarios WHERE email_users = '".$login."';");
    if (empty($exec['email_users'])) {
        $erros[] = "<li>Usuário não encontrado!</li>";
    } elseif ($senha != $exec['senha_users']) {
        $erros[] = "<li>Senha inválida!</li>";
    } else {
        $_SESSION['Usuario'] = $exec['nome_users'];
        $_SESSION['Email'] = $exec['email_users'];
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
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <title>Leilão Cubatão</title>
</head>

<body>

    <div class="login-container">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="login-form">
            <h1>Login</h1>
            <div class="input-container">
                <input type="email" placeholder="Email" name="login" value="trabalho@dsw.ifsp" required>
            </div>
            <div class="input-container">
                <input type="password" placeholder="Senha" name="senha" value="123456" required>
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
</body>

</html>
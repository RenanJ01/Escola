
<?php
session_start();

if (isset($_POST['login'])) {
    $login_db = $email_login;
    $senha_db = $senha_login;
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
        header('Location: produto');
    }
}
?>
<head>
    <link rel="stylesheet" type="text/css" href="http://localhost:8080/B4T4/css/login.css">
</head>
<div class="login-container">
    <form action="http://localhost:8080/B4T4/login" method="POST" class="login-form">
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
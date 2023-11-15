<?php

//Logoff//
session_start();

//Verificar login
if (!isset($_SESSION['Usuario'])) {
    header('Location: ./home');
} else {
    $usuario = $_SESSION['Usuario'];
}

// Apaga todas as variáveis da sessão
$_SESSION = array();

// Se é preciso matar a sessão, então os cookies de sessão também devem ser apagados.
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

// Libera da memória todas as variáveis da sessão
session_unset();
// Por último, destrói a sessão
session_destroy();
$msg = "O usuario deslogou.";
?>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<div>
    <h2>Comunicado</h2>
    <p>
        <?php
        echo $msg;
        ?>
    </p>
    <i class="fa fa-spinner fa-spin" style="font-size:24px; color: var(--color-c2);"></i>
</div>

<script>
    // Redireciona o usuário para a página principal - painel
    setTimeout(function () {
        window.location.href = "./home";
    }, 5000);
</script>
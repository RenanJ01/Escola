<?php

//Logoff//
session_start();

//Verificar login
if (!isset($_SESSION['Usuario'])) {
    header('Location: ./index.html');
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

//Redirecionar para o index
header("Location: ./index.html");

exit;
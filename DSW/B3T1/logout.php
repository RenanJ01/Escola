<?php

//Logoff//
session_start();

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
switch ($nivel) {
    case 0:
        header("Location: ");
        break;
}
exit;
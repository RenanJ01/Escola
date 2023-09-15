<?php

session_start(); // Inicialização de sessão

if (isset($_POST['login'])) { // Já passou pelo HTML antes
    #$login_db = 'Luizinho';
    #$senha_db = '123456';
    #$login = $_POST['login'];
    #$senha = $_POST['senha'];
    $erros = array();
    
    include_once('DB.php');

    if (!empty($_POST['login']) && !empty($_POST['senha'])) {

        $login = filter_input(INPUT_POST, "login", FILTER_VALIDATE_EMAIL);

        $senha = MD5($POST['senha']); // Senha é criptografada aqui

        $query = "SELECT * FROM usuarios WHERE email = '$login' ";
        $executar = mysqli_query($conexao, $query);
        $retorno = mysqli_fetch_assoc($executar);

        if (empty($retorno['email'])) {
            echo 'Usuário não encontrado!';
        } else if ($senha != $retorno['senha']) {
            $erros[] = "<li>Senha inválida!</li>";
        } else {
            $_SESSION['Usuario'] = $retorno['nome'];
            header('Location: index.php');
        }
    }
}

?>
<?php

$host = "localhost";
$db_usuario = "root";
$db_senha = "";
$db_nome = "Usuarios";
$db_porta = "3306";

$connection = mysqli_connect($host, $db_usuario, $db_senha, $db_nome);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
#echo "Conexão bem sucedida";

?>
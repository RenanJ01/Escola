<?php

// A função spl_autoload_register() é automaticamente acionada quando da instanciação
// de um novo objeto (de qualquer classe) no arquivo onde esta função for especificada.
spl_autoload_register(function($nomeArquivo)
{
 if (file_exists('Controllers/'.$nomeArquivo.'.php'))
 {
 require 'Controllers/'.$nomeArquivo.'.php';
 } elseif (file_exists('Core/'.$nomeArquivo.'.php'))
 {
 require 'Core/'.$nomeArquivo.'.php';
 } elseif (file_exists('Models/'.$nomeArquivo.'.php'))
 {
 require 'Models/'.$nomeArquivo.'.php';
 }
});

?>
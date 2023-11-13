<?php
class Controller
{
    public $dados;
    public function __construct()
    {
        $this->dados = array();
    }

    // Chamado por todos os CONTROLLERS
    public function carregarTemplate($nomeView, $dadosModel = array())
    {
        $this->dados = $dadosModel;
        require 'Views/template.php';
    }

    // Chamado no arquivo template.php
    public function carregarViewNoTemplate($nomeView, $dadosModel = array())
    {
        extract($dadosModel); // Transforma índices do array associativo em nomes de variáveis, atribuindo os respectivos valores
        require 'Views/' . $nomeView . '.php';
    }
}
?>
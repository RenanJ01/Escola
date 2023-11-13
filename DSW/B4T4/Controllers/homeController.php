<?php
Class homeController extends Controller
{
    public function index() // Método default (opcional)
    {
        // 1) Chamar um Model (opcional)
        $home = new Home();
        $dados = $home->getDadosHome();
        // 2) Chamar a View (obrigatório)
        $this->carregarTemplate('home', $dados);
    }    
}

?>
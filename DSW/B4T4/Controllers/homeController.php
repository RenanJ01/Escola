<?php
Class homeController extends Controller
{
    public function index() // Método default (opcional)
    {
        // 1) Chamar o Model
        $home = new Home();
        $dados = $home->getDadosHome();
        // 2) Chamar a View
        $this->carregarTemplate('home', $dados);
    }    
}

?>
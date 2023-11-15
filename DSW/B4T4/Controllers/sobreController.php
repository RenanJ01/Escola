<?php
Class sobreController extends Controller
{
    public function index() // Método default (opcional)
    {
        // 1) Chamar o Model
        $sobre = new Sobre();
        $dados = $sobre->getDadosSobre();
        // 2) Chamar a View
        $this->carregarTemplate('sobre', $dados);
    }    
}

?>
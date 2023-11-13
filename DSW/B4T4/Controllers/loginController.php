<?php
class loginController extends Controller
{
    public function index() // Método default (opcional)
    {
        // 1) Chamar um Model (opcional)
        $login = new Login();
        $dados = $login->getDadosLogin();
        // 2) Chamar a View (obrigatório)
        $this->carregarTemplate('login', $dados);
    }

}

?>
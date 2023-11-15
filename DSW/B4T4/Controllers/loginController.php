<?php
class loginController extends Controller
{
    public function index() // Método default (opcional)
    {
        // 1) Chamar o Model
        $login = new Login();
        $dados = $login->getDadosLogin();
        // 2) Chamar a View
        $this->carregarTemplate('login', $dados);
    }

}

?>
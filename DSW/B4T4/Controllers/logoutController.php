<?php
class logoutController extends Controller
{
    public function index() // Método default (opcional)
    {
        // 1) Chamar o Model
        $log = new Logout();
        $dados = $log->getDadosLogout();
        // 2) Chamar a View
        $this->carregarTemplate('logout', $dados);
    }

}

?>
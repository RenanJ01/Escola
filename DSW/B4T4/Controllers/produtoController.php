<?php
Class produtoController extends Controller {
public function index() // Método default (opcional)
{
// 1) Chamar um Model (opcional)
$prod = new Produto();
$dados = $prod->getDadosProduto();
// 2) Chamar a View (obrigatório)
$this->carregarTemplate('produto', $dados);
}
public function produtoPreco()
{
// 1) Chamar um Model (opcional)
$prod = new Produto();
$dados = $prod->getDadosProduto();
// 2) Chamar a View (obrigatório)
$this->carregarTemplate('produtoPreco', $dados);
}
}

?>
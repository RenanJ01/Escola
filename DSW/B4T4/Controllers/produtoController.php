<?php
class produtoController extends Controller
{
    public function index()
    {
        // 1) Chamar o Model
        $prod = new Produto();
        $dados = $prod->getDadosProduto();
        // 2) Chamar a View
        $this->carregarTemplate('produto', $dados);
    }

    public function detalhe()
    {
        // 1) Chamar o Model
        $prod = new Produto();

        //Processo para ter o codígo do produto
        $url_array = explode('/', htmlentities(addslashes($_GET['pag'])));
        $dados = $prod->getDadosProdutoItem($url_array[2]);

        // 2) Chamar o View
        $this->carregarTemplate('produtoDetalhe', $dados);
    }
}

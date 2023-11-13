<?php
class Core
{
    public function __construct()
    {
        $this->run();
    }

    // A função run() é chamada por todos os CONTROLLERS
    public function run()
    {
        // $classe....: Contém a classe cujo Controller será chamado
        // $controller: Contém a classe-Controller
        // $metodo....: Contém o método/função da classe a ser executado
        // $parametros: Contém o(s) parâmetro(s) do método/função (opcional)

        $classe = '';
        $controller = '';
        $metodo = '';
        $parametros = array();
        
        if (isset($_GET['pag'])) {
            $url = htmlentities(addslashes($_GET['pag']));
        }

        // Verifica se possui informação após domínio
        if (!empty($url))
        {
            // Separa os elementos da URL delimitados por '/' em um array
            $url_array = explode('/', $url);

            // Captura a classe constante na URL (1o elemento após o domínio)
            $classe = $url_array[0];
            $controller = $classe . 'Controller';

            // Retira o 1o valor do array
            array_shift($url_array);

            // Captura o método/função constante na URL (2o elemento do array) ou,
            // se não especificado, considera o método default ('index').
            if (isset($url_array[0]) && !empty($url_array[0])) {
                $metodo = $url_array[0];
                
                // Retira o 2o valor do array
                array_shift($url_array);
            } else {
                // Método default = 'index'
                $metodo = 'index'; 
            }

            // Captura os parâmetros constantes na URL (demais elementos do array),se houver.
            if (count($url_array) > 0) {
                $parametros = $url_array;
            }
        } else {
            // Controller default = 'homeController'
            $controller = 'homeController';
            // Método default = 'index'
            $metodo = 'index'; 
        }

        $caminho = 'Controllers/' . $controller . '.php';

        if (!file_exists($caminho) && !method_exists($controller, $metodo)) {
            // Controller default = 'homeController'
            $controller = 'homeController'; 
            // Método default = 'index'
            $metodo = 'index';
        }

        $c = new $controller;
        
        // Não é possível chamar $c->$metodo() dessa forma.
        // Isso deve ser feito por meio da função abaixo.
        call_user_func_array(array($c, $metodo), $parametros);
    }
}
?>
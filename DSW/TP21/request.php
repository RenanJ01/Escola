<?php
include_once("./connect.php");

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (empty($_GET["id"])) {
        $verf = false;
    } else {
        $verf = true;
    }
}

if($verf){
    $id = $_GET["id"];
    if(isset($_GET["v"])){
        $v = $_GET["v"];
    }else{
        $v = 1;
    }
    $con = new Conexao();
    $res;

    switch ($id) {
        case '1':
            $exec = $con->Con_MultSelect("SELECT * FROM categorias");
            $res = json_encode($exec);
            break;
        case '2':
            $exec = $con->Con_MultSelect("SELECT * FROM produtos as P INNER JOIN descproduto as D ON P.ID = D.ProdutoID INNER JOIN cor as CO ON D.Cor = CO.CorID INNER JOIN categorias as C ON C.ID = P.CategoriaID WHERE C.ID =".$v);
            $res = json_encode($exec);
            break;
    }

    echo $res;
}

?>
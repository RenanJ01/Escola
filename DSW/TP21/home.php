<?php
include_once('./connect.php');

session_start();
if (!isset($_SESSION['Usuario'])) {
    header('Location: ./index.html');
} else {
    $usuario = $_SESSION['Usuario'];
    $email = $_SESSION['Email'];
}
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./icon.png" type="image/x-icon">
    <link rel="stylesheet" href="main.css">
    <title>Leilão Cubatão</title>
</head>

<body onload="LoadSelect();">

    <!-- Menu Suspenso -->
    <nav class="nav_bar" id="nav_bar">
        <div class="bar">
            <span>Leilão Cubatão</span>
            <a href="./logout.php" class="bar_item button">Logout</a>
            <a href="./index.html" class="bar_item button">Início</a>
        </div>
    </nav>

    <!-- Integrantes -->
    <div id="aba">
        <h1>Integrantes do Grupo:</h1>
        <p>
            Nicolas dos Santos Lima - CB3008932 </br>
            Jonatas Renan - CB3008606 </br>
            Eriel de Jesus - CB1990543
            <br>
        </p>
        <hr style="border: 1px solid var(--color-2);">
    </div>

    <!-- Empresa -->
    <main>
        <?php
        echo ("<h1>Bem-Vindo usuario: $usuario</h1> 
        <p>Nesse trabalho de DSW com o seguinte email.<br>E-mail:$email</p>");
        ?>

        <h2>Categorias</h2><br />

        <select id='slc_categ' size='3'>
            <option value="" disabled="" selected="">Escolha uma categoria?</option>
        </select><br><br>
        <hr style='border: 1px solid #000; width:90%;'><br>


        <select id='slc_prod' style='display: none'></select>

        <section id="tab">
            <label>Categoria:</label>
            <span id="tab_categ"></span><br><br>
            <img id="tab_img" style="width: 50%;"></img><br>
            <label>Preço:</label><br>
            <span id="tab_preco"></span><br>
            <div id="tab_descr">
                <hr style="border: 1px solid var(--color-1);">
            <label>Cor:</label>
            <span id="tab_cor"></span><br>
            <label>Lote:</label>
            <span id="tab_lote"></span><br>
            <label>Data:</label>
            <span id="tab_date"></span><br>
            </div>
        </section>

        <script>
            var Produtos = []; // Declare a variável Produtos em um escopo global para que possa ser acessada em todas as funções.

            function LoadSelect() {
                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }

                xmlhttp.open("GET", "http://localhost:8080/Escola/DSW/TP21/request.php?id=1");
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                // Manipule o JSON somente após o carregamento completo dos dados.
                xmlhttp.onload = function () {
                    var dados = JSON.parse(this.responseText);
                    var slc_c = document.getElementById("slc_categ");
                    dados.forEach(id => {
                        var opt = document.createElement("OPTION");
                        opt.setAttribute("value", id["ID"]);
                        opt.text = id["NomeCategoria"];
                        slc_c.appendChild(opt);
                    });
                };

                xmlhttp.send();
            }

            function criaConteudo(categoria) {
                var indCateg = categoria.selectedIndex;
                var categ = categoria.options[indCateg].value;
                var text = categoria.options[indCateg].text;

                // Limpe a variável Produtos antes de preenchê-la com novos dados.
                Produtos = [];

                if (window.XMLHttpRequest) {
                    xmlhttp = new XMLHttpRequest();
                } else {
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }

                xmlhttp.open("GET", "http://localhost:8080/Escola/DSW/TP21/request.php?id=2&v=" + categ);
                xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

                xmlhttp.onload = function () {
                    var dados = JSON.parse(this.responseText);
                    dados.forEach(id => {
                        Produtos.push([id["ProdutoID"], id["NomeProduto"], id["NomeCategoria"], id["Preco"], id["CorNome"], id["Lote"], id["Date"], id["Image"]]);
                    });
                    console.log(dados);

                    var slc_dados = document.getElementById("slc_prod");
                    while (slc_dados.options.length > 0) {
                        slc_dados.remove(0);
                    }
                    slc_dados.style.display = "none";

                    slc_dados.setAttribute("size", Produtos.length + 1);
                    var option = document.createElement("OPTION");
                    option.setAttribute("value", "");
                    option.setAttribute("disabled", "");
                    option.setAttribute("selected", "");
                    option.text = "Escolha um produto?";
                    slc_dados.appendChild(option);

                    Produtos.forEach(item => {
                        var opt = document.createElement("OPTION");
                        opt.setAttribute("value", item[0]);
                        opt.text = item[1];
                        slc_dados.appendChild(opt);
                    });
                    slc_dados.style.display = "block";
                };

                xmlhttp.send();
            }

            function DetalhesProd(slc_pord) {
                var tab = document.getElementById("tab");
                var indProd = slc_pord.selectedIndex;
                var detalheI = indProd - 1;
                var spans = tab.querySelectorAll("span");

                //ProdutoID, NomeProduto, NomeCategoria, Preco, CorNome, Lote, Date, Imagem
                spans[0].innerText = Produtos[detalheI][2];//Categoria
                spans[1].innerText = Produtos[detalheI][3];//Preço
                spans[2].innerText = Produtos[detalheI][4];//Cor
                spans[3].innerText = Produtos[detalheI][5];//Lote
                spans[4].innerText = Produtos[detalheI][6];//Data
                document.getElementById("tab_img").setAttribute("src", Produtos[detalheI][7]);//Imagem
                tab.style.display = "block";
            }

            var slc_categ = document.getElementById("slc_categ");
            slc_categ.addEventListener("change", function () {
                criaConteudo(this);
            });

            var slc_prod = document.getElementById("slc_prod");
            slc_prod.addEventListener("change", function () {
                DetalhesProd(this);
            });
        </script>
    </main>

</body>

</html>
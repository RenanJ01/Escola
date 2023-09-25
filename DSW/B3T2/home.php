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
    <link rel="shortcut icon" href="icon.png" type="image/x-icon">
    <link rel="stylesheet" href="main.css">
    <title>Black Seda</title>
</head>

<body>

    <!-- Menu Suspenso -->
    <nav class="nav_bar" id="nav_bar">
        <div class="bar">
            <span>Black SEDA</span>
            <a href="./logout.php?nivel=0" class="bar_item button">Logout</a>
            <a href="./index.html" class="bar_item button">Início</a>
        </div>
    </nav>

    <!-- Integrantes -->
    <div id="aba">
        <h1>Integrantes do Grupo:</h1>
        <p>
            Eriel de Jesus - CB1990543 </br>
            Jonatas Renan - CB3008606 </br>
            Lucas Henrique - CB3008665 </br>
            Matheus Mesquita - CB3009114 </br>
        </p>
        <hr style="border: 1px solid var(--color-3);">
    </div>

    <!-- Empresa -->
    <main>
        <?php
        echo ("<h1>Bem-Vindo usuario: $usuario</h1> 
        <p>Nesse trabalho de DSW com o seguinte email.<br>E-mail:$email</p>");
        ?>

        <h2>Categorias</h2><br />

        <?php
        echo ("<select id='slc_categ'  size='4'>");
        echo ('<option value="" disabled="" selected="">Escolha uma categoria?</option>');

        $con = new Conexao();
        $exec = $con->Con_MultSelect("SELECT * FROM categorias");

        if ($exec) { // Verifique se a consulta foi bem-sucedida
            foreach ($exec as $row) {
                echo ("<option value='" . $row['ID'] . "'>" . $row['NomeCategoria'] . "</option>");
            }
        } else {
            echo "Ocorreu um erro na consulta.";
        }
        echo ("
            </select><br><br>
            <hr style='border: 1px solid #000; width:90%;'><br>");
        ?>

        <select id='slc_prod' style='display: none'></select>

        <section id="tab">
            <label>Categoria:</label>
            <span id="tab_categ"></span><br>
            <label>Preço:</label>
            <span id="tab_preco"></span><br>
            <label>Tamanho:</label>
            <span id="tab_tam"></span><br>
            <label>Disponibilidade:</label>
            <span id="tab_disp"></span><br>
        </section>

        <script type="module">
            var Produtos = [];

            <?php
            for ($i = 1; $i < 11; $i++) {
                $exec = $con->Con_MultSelect("SELECT * FROM produtos as P INNER JOIN descproduto as D ON P.ID = D.ProdutoID INNER JOIN tamanhos as T ON D.TamanhoID = T.ID INNER JOIN categorias as C ON C.ID = P.CategoriaID WHERE P.ID = $i");
                foreach ($exec as $row) {
                    echo ("Produtos.push([" . $i . ",'" . $row['NomeProduto'] . "', '" . $row['CategoriaID'] . "', " . $row['Preco'] . ", '" . $row['Tamanho'] . "', '" . $row['Disponibilidade'] . "', '" . $row['NomeCategoria']. "']);");
                }
            }
            ?>

            function criaConteudo(categoria) {
                // Seleção da categoria:
                var indCateg = categoria.selectedIndex;
                var categ = categoria.options[indCateg].value;
                var text = categoria.options[indCateg].text;
                var prod = [];

                switch (categ) {
                    case "1":
                        for (var i = 0; i < Produtos.length; i++) {
                            if (Produtos[i][2] == '1') {
                                prod.push([Produtos[i][0], Produtos[i][1]]);
                            }
                        }
                        break;
                    case "2":
                        for (var i = 0; i < Produtos.length; i++) {
                            if (Produtos[i][2] == '2') {
                                prod.push([Produtos[i][0], Produtos[i][1]]);
                            }
                        }
                        break;
                    case "3":
                        for (var i = 0; i < Produtos.length; i++) {
                            if (Produtos[i][2] == '3') {
                                prod.push([Produtos[i][0], Produtos[i][1]]);
                            }
                        }
                        break;
                    case "4":
                        for (var i = 0; i < Produtos.length; i++) {
                            if (Produtos[i][2] == '4') {
                                prod.push([Produtos[i][0], Produtos[i][1]]);
                            }
                        }
                        break;
                }

                var slc_dados = document.getElementById("slc_prod");

                // Apaga dados do select dados:
                while (slc_dados.options.length > 0) {
                    slc_dados.remove(0);
                }
                slc_dados.style.display = "none";

                // Cria options do select dados:
                slc_dados.setAttribute("size", prod.length + 1);

                //Option
                var option = document.createElement("OPTION");
                option.setAttribute("value", "");
                option.setAttribute("disabled", "");
                option.setAttribute("selected", "");
                option.text = "Escolha um produto?";
                slc_dados.appendChild(option);

                prod.forEach(nome => {
                    var opt = document.createElement("OPTION");
                    opt.setAttribute("value", nome[0]);
                    opt.text = nome[1];
                    slc_dados.appendChild(opt);
                });
                slc_dados.style.display = "block";
            }

            function DetalhesProd(slc_pord) {
                var tab = document.getElementById("tab");

                // Seleção do detalhes:
                var indProd = slc_pord.selectedIndex;
                var detalheI = slc_pord.options[indProd].value;

                var spans = tab.querySelectorAll("span");
                spans[0].innerText=Produtos[detalheI][6];
                spans[1].innerText=Produtos[detalheI][3];
                spans[2].innerText=Produtos[detalheI][4];
                spans[3].innerText=Produtos[detalheI][5];

                tab.style.display="block";
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
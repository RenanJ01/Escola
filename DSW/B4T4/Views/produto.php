<head>
    <link rel="stylesheet" href="http://localhost:8080/B4T4/css/produtos.css">
</head>

<div>

    <h1>Produtos</h1>
    <table>
        <tr>
            <th id="tb-l">Código</th>
            <th>Nome</th>
            <th>Marca</th>
            <th id="tb-r">Detalhe</th>
        </tr>

        <?php

        // Para acessar um produto específico, você pode usar índices:
        foreach ($dadosModel as $produto) {
            echo '<tr><td> ' . $produto['codigo'] . '</td>';
            echo '<td> ' . $produto['nome'] . '</td>';
            echo '<td> ' . $produto['marca'] . '</td>';
            echo '<td><a class="links" href="produto/detalhe/' . $produto['codigo'] . '">Preço</a><td></tr>';
            // echo 'Preço: $' . number_format($produto['preco'], 2) . '<br><br>';
        }

        ?>
    </table>

</div>


<?php

session_start();
if (!isset($_SESSION['Usuario'])) {
    header('Location: ./home');
} else {
    $usuario = $_SESSION['Usuario'];
}

?>
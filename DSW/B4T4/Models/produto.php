<?php
class produto
{

    private // Array de produtos
    $produtos = array(
        array(
            'codigo' => '124578',
            'nome' => 'Liquidificador Pro',
            'marca' => 'EletroLux',
            'preco' => 89.99
        ),
        array(
            'codigo' => '782356',
            'nome' => 'Cadeira de Jardim',
            'marca' => 'Harmonia',
            'preco' => 69.99
        ),
        array(
            'codigo' => '890123',
            'nome' => 'Rato para Jogos',
            'marca' => 'TurboDrive',
            'preco' => 49.99
        ),
        array(
            'codigo' => '147856',
            'nome' => 'Lâmpada de Mesa LED',
            'marca' => 'SolarBlast',
            'preco' => 29.99
        ),
        array(
            'codigo' => '458923',
            'nome' => 'Conjunto de Velas de Relaxamento',
            'marca' => 'ZenVibe',
            'preco' => 19.99
        ),
        array(
            'codigo' => '012569',
            'nome' => 'Conjunto de Facas',
            'marca' => 'GourmetMaster Chef',
            'preco' => 129.99
        ),
        array(
            'codigo' => '748464',
            'nome' => 'Garrafa de Água Inteligente',
            'marca' => 'AquaFresh',
            'preco' => 9.99
        ),
        array(
            'codigo' => '345719',
            'nome' => 'Grãos de Café Orgânico',
            'marca' => 'EcoHarvest',
            'preco' => 42.99
        ),
        array(
            'codigo' => '302010',
            'nome' => 'Tapete de Ioga',
            'marca' => 'FlexiFit',
            'preco' => 57.99
        ),
        array(
            'codigo' => '425314',
            'nome' => 'Carregador de Telefone sem Fio',
            'marca' => 'SwiftCharge',
            'preco' => 72.99
        ),
        array(
            'codigo' => '090817',
            'nome' => 'Kit de Telescópio',
            'marca' => 'SwiftCStellarViewharge',
            'preco' => 109.99
        ),
        array(
            'codigo' => '858280',
            'nome' => 'Conjunto de Plantas de Interior',
            'marca' => 'BioGlow',
            'preco' => 48.99
        )
    );

    public function getDadosProduto()
    {
        return $this->produtos;
    }

    public function getDadosProdutoItem($cod)
    {
        $dados = false;
        foreach($this->produtos as $produto) {
            if ($produto['codigo'] == $cod) {
                $dados = array(
                    'codigo' => $produto['codigo'],
                    'nome' => $produto['nome'],
                    'marca' => $produto['marca'],
                    'preco' => $produto['preco']
                );
            }
        }
        return $dados;
    }
}
?>
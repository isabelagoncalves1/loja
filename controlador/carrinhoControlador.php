<?php

require_once "modelo/produtoModelo.php";
require_once "servico/correiosServico.php";

function adicionar($idProduto) {
    $produtos = array();
     $produtos = $_SESSION["car"];
    if(isset($_SESSION["car"])){
        $produtos = $_SESSION["car"];
        echo "if";
    }// tem um else aqui
    
    print_r($produtos);
    $produtos[] = $idProduto;
    print_r($produtos);
//    $produtos[] = pegarProdutoId($idProduto);
    $_SESSION["car"] = $produtos;
    print_r($_SESSION["car"]);
//    redirecionar("carrinho/listar");
}

function listar() {
    print_r($_SESSION["car"]);
    $dados['produtos'] = $_SESSION["car"];
    echo "oi";
    exibir("paginas/carrinho", $dados);
}

function deletar() {
    unset($_SESSION['carrinho']);
    redirecionar("produto/listarprodutos");
}

function removerProduto($id) {
    $produtos = $_SESSION['carrinho'];
    foreach ($produtos as $key => $produto) {
        if ($produto['idProduto'] == $id) {
            unset($produtos[$key]);
        }
    }
    $_SESSION['carrinho'] = $produtos;
    redirecionar("carrinho/listar");
}


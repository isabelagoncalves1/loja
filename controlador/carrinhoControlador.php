<?php

require_once "modelo/produtoModelo.php";
require_once "servico/correiosServico.php";

function comprar($idProduto) {

    //salvar na seesao carrinho
    if (isset($_SESSION["carrinho"])) { //se existe a sessao carrinho
        $produtos = $_SESSION["carrinho"]; //peguei
    } else {
        $produtos = array();
    }

//    verficar se o produto esta no carrinho, esta? adiciona mais um. 
//    caso contrario criar um novo indice quantidade e adicionar um

    $produtos[] = $idProduto; //adiciono um elemento no vetor produtos
    $_SESSION["carrinho"] = $produtos; //salvando o vetor na sessao
    //redirect
    redirecionar("carrinho/ver");
}

function exibirSession(){
    $vetor = $_SESSION["carrinho"];
    echo "<pre>";
    var_dump($vetor);
}

function verificarProduto($vetor, $produto){
    foreach ($vetor as $produtos) {
        if($produto){}
    }
}

function ver() { # listarCarrinho
    if (isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"];

        $subtotal = 0;
        $produtosBanco = array();
        for ($i = 1; $i < sizeof($produtos); $i++) {
            $idProduto = $produtos[$i];
            $produto = pegarprodutoPorId($idProduto);
            $subtotal += $produto["preco"];
//            $subtotal += $produto["preco"] * $produto["quantidade"];
            $produtosBanco[] = $produto;
        }

        $dados["produtos"] = $produtosBanco;
        
        $valor = [];
        // 
        $dados["frete"] = calcular_frete(18214558,18208847,2,25,40010,6,20,20);
        exibir("paginas/carrinho", $dados);
    } else {
        echo "Não existe sessao carrinho!";
        echo "Carrinho vazio!";
        redirecionar("produto/listarprodutos");
    }
    //mostra na visao
    //chamar
}

function deletar() {
    unset($_SESSION["carrinho"]);
    session_destroy();
    redirecionar("carrinho/ver");
}

function removerItem() {

    $listaIds = $_SESSION["carrinho"];

    for ($i = 0; $i < count($produtos); $i++) {
        if ($idElementoDeleta == $produtos[$i]) {
            echo "achei!";
            echo "O elemento a deletar é de indice $i";
            //deletar
            unset($produtos[$i]);
        }
    }

    print_r($produtos);

    unset($produtos[1]);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    print_r($produtos);
}

?>
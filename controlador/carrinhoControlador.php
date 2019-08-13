<?php


function comprar($idProduto) {
    
    //salvar na seesao carrinho
    if(isset($_SESSION["carrinho"])) { //se existe a sessao carrinho
        $produtos = $_SESSION["carrinho"]; //peguei
    } else {
        $produtos = array();
    }
    
    $produtos[] = $idProduto; //adiciono um elemento no vetor produtos
    $_SESSION["carrinho"] = $produtos; //salvando o vetor na sessao

    //redirect
    redirecionar("carrinho/ver");
}

function ver() {
    if(isset($_SESSION["carrinho"])) {
    $produtos = $_SESSION["carrinho"];
         print_r($produtos);
    } else {
    echo "Não existe sessao carrinho!";
    echo "Carrinho vazio!";
}
    //mostra na visao
    //chamar
}
?>
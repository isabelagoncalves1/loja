<?php

require_once "modelo/produtoModelo.php";
require_once "servico/correiosServico.php";

/** anon */
function comprar($idProduto) {
    $_SESSION["carrinho"][] = $idProduto;
    redirecionar("./carrinho/exibirSession");
}

/** anon */
function exibirSession() { # listarCarrinho
    $lista = array();

    for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
        $id = $_SESSION["carrinho"][$i];
        $produto = pegarProdutoId($id);
        $lista[] = $produto;
    }
    $dados["produto"] = $lista;
    exibir("paginas/carrinho", $dados);
}

/** anon */
function deletar() {
    unset($_SESSION["carrinho"]);
    session_destroy();
    unset($_SESSION['carrinho']);
    redirecionar("produto/listarprodutos");
}

/** anon */
//*function removerItem() {
//  $listaIds = $_SESSION["carrinho"];
//for ($i = 0; $i < count($produtos); $i++) {
//  if ($idElementoDeleta == $produtos[$i]) {
//    echo "achei!";
//  echo "O elemento a deletar é de indice $i";
////deletar
//unset($produtos[$i]);
//}
//}
//}

/** anon */
function removerProduto($idProduto) {
    $listaIds = $_SESSION['carrinho'];
    foreach ($listaIds as $key => $produto) {
        if ($produto['idProduto'] == $idProduto) {
            unset($listaIds[$key]);
        }
    }
    $_SESSION['carrinho'] = $listaIds;
    redirecionar("carrinho/exibirSession");
}

?>

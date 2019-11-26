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
        $idProduto = $_SESSION["carrinho"][$i];
        $produto = pegarProdutoId($idProduto);
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
function removerProduto($id) {
    $listaIds = $_SESSION['carrinho'];
    print_r($listaIds);
    for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($id == $listaIds[$i]) {
            unset($listaIds[$i]);
        }
    }
    $_SESSION['carrinho'] = $listaIds;
    redirecionar("carrinho/exibirSession");
}
function ola() {
    
    
    $vetor = array();
    $vetor[0] = 1;
    $vetor[1] = 2;
    $vetor[2] = 3;
    
    for($i=0; $i < count($vetor); $i++) {
        echo $vetor[$i];
    }
    
    
    
}
//function removerProduto($idProduto) {
   # $listaIds = $_SESSION['carrinho'];
   # foreach ($listaIds as $key => $produto) {
      #  if ($produto['idProduto'] == $idProduto) {
      #      unset($listaIds[$key]);
       # }
    ## $_SESSION['carrinho'] = $listaIds;
   # redirecionar("carrinho/exibirSession");
?>
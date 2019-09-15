<?php
require_once "modelo/produtoModelo.php";
require_once "servico/correiosServico.php";
function comprar($idProduto) {
    $_SESSION["carrinho"][] = $idProduto;
    redirecionar("./carrinho/exibirSession");
}

function exibirSession() { # listarCarrinho
    $lista= array();
    
    for($i=0; $i<count($_SESSION["carrinho"]); $i++){
        $id=$_SESSION["carrinho"][$i];
        $produto = pegarProdutoId($id);
        $lista[]=$produto;
    }
    $dados["produto"] = $lista;
    exibir("paginas/carrinho", $dados);
    

}
function deletar() {
    unset($_SESSION["carrinho"]);
    session_destroy();
    redirecionar("produto/listarprodutos");
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

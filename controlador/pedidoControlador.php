<?php

require_once "modelo/FormaPagamentoModelo.php";
require_once "modelo/enderecoModelo.php";
require_once "modelo/produtoModelo.php";
require_once "modelo/pedidoModelo.php";
require_once "modelo/cupomModelo.php";

function salvarpedido() {
    if (acessoUsuarioEstaLogado()) {
        $dados["formas"] = listarFormaPagamento();
        $dados["enderecos"] = listarEndereco();
        $dados["cupons"] = pegarTodosCupons();
        //dados dos produtos

        //$idProduto = $_SESSION["carrinho"];
        $idsProdutos = $_SESSION["carrinho"]; //os IDS do carrinbo!
        $precototal = 0;
        $vetorProdutos = array();
        foreach ($idsProdutos as $idProduto) {
            $produto = pegarprodutoId($idProduto);
            $precoProduto = $produto['preco'];
            $precototal = $precoProduto + $precototal;
            //$vetorProdutos[] = $produto;
        }
        $dados["produtos"] = $precototal;
        $dados["total"] = 0;
        if (ehPost()) {
            $cupom = pegarCupomNome($_POST["desconto"]);

            $total = $precototal - $cupom;
            $dados["produto"] = $_SESSION["carrinho"];
            $dados["total"] = $total;
            // $dados["cupon"] = $dpsdesconto;
            
        } else {          
//           redirecionar("login/paginas");
        }
        exibir("pedido/finalizarpedido", $dados);
    }
}

/** admin */
function index(){
    $dados = array();
    $dados['enderecos'] = listarEndereco();
    $dados["pedidos"] = listarPedidos();
    exibir("pedido/pedidoIndex", $dados);
}

/** anon */
function BuscarPorMunicipio(){
    if(ehPost()){
        $cidade = $_POST['cidade'];
        $dados = array();
        $dados['pedidos'] = listarPorMunicipio($cidade);
        exibir("pedido/pedidoEndereco", $dados);
    }
}

/** admin */
function visualizar($idPedido){
    $dados = array();
    $dados['pedido'] = pegarPedidoPorID($idPedido);
    exibir("pedido/visualizar", $dados);
}
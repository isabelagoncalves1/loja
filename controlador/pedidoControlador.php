<?php

//require_once "";
require_once "modelo/FormaPagamentoModelo.php";
require_once "modelo/enderecoModelo.php";
require_once "modelo/cupomModelo.php";
require_once "modelo/produtoModelo.php";

function salvarpedido() {
    if (acessoUsuarioEstaLogado()) {

        $dados["formas"] = listarFormaPagamento();
        $dados["enderecos"] = listarEndereco();
        $dados["cupons"] = pegarTodosCupons();

        //dados dos produtos
        //
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

        if (ehPost()) {
            $nomecupom = $_POST['nomecupom'];
            $dpsdesconto = 0;
            //buscar no banco
            $cupom = pegarCupomNome($nomecupom);
                $precototal = $produto['preco'];
                $descontoproduto = $cupom['desconto'];
                $dpsdesconto = $precototal - $descontoproduto;
                print_r($dpsdesconto);
                print_r($cupom);
            }
            $dados["cupon"] = $dpsdesconto;
        exibir("pedido/finalizarpedido", $dados);
    } else {
//            redirecionar(login / paginas);
    }
}
//preciso arrumar o desconto, pq ele ta calculando errado
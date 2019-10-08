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
            $desconto = $_POST['desconto'];
            
            $totalcupom = 0;
            for ($i = 0; $nomecupom <=$i++){
                $totalcupom = $
            }
            
        }

            exibir("pedido/finalizarpedido", $dados);
        } else {
            redirecionar(login / paginas);
        }

        function teste() {

            $notas = array();
            $notas[0] = 2;
            $notas[1] = 3;
            $notas[2] = 9;
            $notas[3] = 5;

            $notasgeral = 0;
            for ($i = 0; $i <= 4; $i++) {
                $notasgeral = $notas[$i] + $notasgeral;
            }
        }

    }
    
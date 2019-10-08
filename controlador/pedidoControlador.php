<?php

//require_once "";
require_once "modelo/FormaPagamentoModelo.php";
require_once "modelo/enderecoModelo.php";
require_once "modelo/cupomModelo.php";

function salvarpedido() {
    if (acessoUsuarioEstaLogado()) {

        $dados["formas"] = listarFormaPagamento();
        $dados["enderecos"] = listarEndereco();
        $dados["cupons"] = pegarTodosCupons();
        
    

        exibir("pedido/finalizarpedido", $dados);
    } else {
        redirecionar(login / index);
    }
}

/*function listarfinalização() {
    $idFormaP = strip_tags($_POST["idFormaP"]);
    $cpf = strip_tags($_POST["cpf"]);
    $datacompra = strip_tags($_POST["datacompra"]);
    
    $msg = finalização($idFormaP, $cpf, $datacompra);
    $dados["formas"] = listarForma();
}
 */

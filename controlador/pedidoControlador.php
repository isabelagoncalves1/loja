<?php

//require_once "";
require_once "modelo/FormaPagamentoModelo.php";

function finalizarPedido() {
    if (acessoUsuarioEstaLogado()) {
        exibir("pedido/finalizarpedido");
    } else {
        redirecionar(login / index);
    }
}

function listarfinalização() {
    $idFormaP = strip_tags($_POST["idFormaP"]);
    $cpf = strip_tags($_POST["cpf"]);
    $datacompra = strip_tags($_POST["datacompra"]);
    
    $msg = finalização($idFormaP, $cpf, $datacompra);
    $dados["formas"] = listarForma();
}
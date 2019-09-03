<?php

require_once "modelo/FormaPagamentoModelo.php";

function adicionar() {
    $dados = array();
    if (ehPost()) {
        $descricao = strip_tags($_POST["descricao"]);
        
        $msg = adicionarFormadePagamento($descricao);
        
        
        redirecionar("FormaPagamento/listarForma");
        
    } else {
    }
        exibir("formapagamento/adicionarFormaPagamento");
    
}




function listarForma(){
    $dados = array();
    $dados["formas"] = listarFormaPagamento();
    exibir("formapagamento/listarFormaPagamento", $dados);
    
}

function ver($idFormaP){
    $dados["formas"] = pegarformaPorId($idFormaP);
    exibir("formapagamento/visualizarforma", $dados);
}

function deletar($idFormaP){
    $msg = deletarFormaP($idFormaP);    
    redirecionar("FormaPagamento/listarForma");
}


function editar($idFormaP){
    if (ehPost()){
        $descricao = strip_tags($_POST["descricao"]);
        
        echo $descricao;
        
        
        editarFormaP($idFormaP, $descricao);
         redirecionar("FormaPagamento/listarForma");
    }else{
        
        $dados["formas"] = pegarformaPorId($idFormaP);
        exibir("formapagamento/adicionarFormaPagamento", $dados);
    }
}


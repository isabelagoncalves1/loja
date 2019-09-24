<?php
require_once "modelo/cupomModelo.php";
/** admin */
function adicionar(){
    if (ehPost()){
        $nomecupom=$_POST['nomecupom'];
        $desconto=$_POST['desconto'];
       $msg =  adicionarcupom($nomecupom, $desconto);
       redirecionar("cupom/listarcupom");
        
    }else{
        exibir("cupom/adicionarcupom");
    }
}

/** anon */
function listarcupom(){
    $dados= array();
    $dados["cupons"]= pegarTodosCupons();
    exibir("cupom/listarcupom", $dados);
}

/** anon */  
function ver($id){
    $dados= array();
    $dados["cupom"]= pegarCupomId($id);
    exibir("cupom/visualizarcupom", $dados);
}

/** admin */
function deletar($id){
    $msg= deletarCupom($id);
    redirecionar("cupom/listarcupom");
}

/** admin */
function editar($id){
    if (ehPost()){
        $nomecupom=$_POST['nomecupom'];
        $desconto=$_POST['desconto'];
        $msg =  editarcupom($id, $nomecupom, $desconto);
        redirecionar("cupom/listarcupom");
        
    }else{
        $dados["cupom"]= pegarCupomId($id);
        exibir("cupom/adicionarcupom",  $dados);
    }
}

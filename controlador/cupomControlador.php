<?php
require_once "modelo/cupomModelo.php";
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
function listarcupom(){
    $dados= array();
    $dados["cupons"]= pegarTodosCupons();
    exibir("cupom/listarcupom", $dados);
}
function ver($id){
    $dados= array();
    $dados["cupom"]= pegarCupomId($id);
    exibir("cupom/visualizarcupom", $dados);
}
function deletar($id){
    $msg= deletarCupom($id);
    redirecionar("cupom/listarcupom");
}
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

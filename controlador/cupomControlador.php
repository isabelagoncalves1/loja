<?php

require_once "modelo/cupomModelo.php";

function adicionar() {
    $dados = array();
    if (ehPost()) {
        $nomecupom = $_POST["nomecupom"];
        $desconto = $_POST["desconto"];
        
      $msg = adicionarCupom($nomecupom, $desconto);
      redirecionar("cupom/listarcupom");
        
    } else {
    }
        exibir("cupom/adicionarcupom");
    
}

function listarCupom() {
    $dados = array();
    $dados["cupons"] = pegarTodosCupons();
    exibir("cupom/listarcupom", $dados);
}
function ver($idcupom) {
    $dados["cupons"] = pegarCupomPorId($idcupom);
    exibir("cupom/visualizarcupom", $dados);
}
function deletar($idcupom) {
    $msg = deletarCupom($idcupom);
    redirecionar("cupom/listarcupom");
}   
    
function editar($idcupom){
    if (ehPost()){

        $nomecupom = strip_tags ($_POST["nomecupom"]);
        $desconto = strip_tags ($_POST["desconto"]);
        
        echo $descricao;
        
        
        editarCupom($idcupom, $nomecupom, $desconto);
        redirecionar("cupom/listarcupom");
    }else{
        
        $dados["cupons"] = pegarCupomPorId($idcupom);
        exibir("cupom/adicionarcupom", $dados);
    }
}

?>


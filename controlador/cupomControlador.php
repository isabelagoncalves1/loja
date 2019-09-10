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
function ver($id) {
    $dados["cupom"] = pegarCupomPorId($id);
    exibir("cupom/visualizarcupom", $dados);
}
function deletar($id) {
    $msg = deletarCupom($id);
    redirecionar("cupom/listarcupom");
}   
    
function editar($idFormaP){
    if (ehPost()){

        $nomecupom = strip_tags ($_POST["nomecupom"]);
        $desconto = strip_tags ($_POST["desconto"]);
        
        echo $descricao;
        
        
        editarCupom($id, $nomecupom, $desconto);
        redirecionar("cupom/listarcupom");
    }else{
        
        $dados["cupom"] = pegarCupomPorId($id);
        exibir("cupom/adicionarcupom", $dados);
    }
}

?>


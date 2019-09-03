<?php

function listarFormaPagamento() {
    $sql = "select * from formapagamento";
    $resultado = mysqli_query(conn(), $sql);
    $formas = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $formas[] = $linha;
    }
    return $formas;
}




function adicionarFormaDePagamento($descricao){
    $sql = "INSERT INTO formapagamento (descricao) VALUES ('$descricao')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){die('Erro ao cadastrar forma de pagamento' . mysqli_error($cnx));}
    return 'forma de pagamento cadastrada com sucesso!';
}


function pegarformaPorId($idFormaP){
    $sql = "SELECT * FROM formapagamento WHERE idFormaP= $idFormaP";
    
    $resultado = mysqli_query(conn(), $sql);
    $forma = mysqli_fetch_assoc($resultado);
    return $forma;
}


function deletarFormaP($idFormaP) {
    $sql = "DELETE FROM formapagamento WHERE idFormaP = $idFormaP";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) {
        die('Erro ao deletar forma de pagamento' . mysqli_error($cnx));
    }
    return 'forma de pagamento deletada com sucesso!';
}



function editarFormaP($idFormaP, $descricao){
    $sql = "UPDATE formapagamento SET descricao = '$descricao' WHERE idFormaP = $idFormaP";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){die('Erro ao alterar forma de pagamento' . mysqli_error($cnx));}
    return 'Forma de pagamento alterada com sucesso!';
}



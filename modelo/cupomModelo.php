<?php
function adicionarcupom($nomecupom, $desconto){
    $comando= "insert into cupom (nomecupom, desconto) "
            . "values ('$nomecupom', '$desconto');";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Cupom cadastrado com sucesso!";
}
function pegarTodosCupons(){
    $comando= "select * from cupom";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    $cupons = array();
    while ($cupom = mysqli_fetch_assoc($resul)){
        $cupons[]=$cupom; 
    }
    return $cupons;
}
function pegarCupomId($id){
    $comando="select * from cupom where idcupom= $id;";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    $cupom= mysqli_fetch_assoc($resul);
    return $cupom;
}
function deletarCupom($id){
    $comando= "delete from cupom where idcupom=$id;";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Cupom deletada";
}
function editarcupom($id, $nomecupom, $desconto){
    $comando="update cupom set nomecupom='$nomecupom', desconto='$desconto' where idcupom='$id';";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    if(!$resul){
        die(mysqli_error($cnx));
    }
    return "Dados atualizados com sucesso!";
}

function pegarCupomNome($nomecupom){
    $comando="select * from cupom where nomecupom= $nomecupom;";
    $cnx= conn();
    $resul= mysqli_query($cnx, $comando);
    $cupom= mysqli_fetch_assoc($resul);
    return $cupom;
}

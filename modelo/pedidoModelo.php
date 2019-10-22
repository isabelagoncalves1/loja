<?php
function receberpedido($idCliente, $idendereco, $datacompra, $produtos){
    $sql = "INSERT INTO pedido (idCliente, idendereco, datacompra, produtos) VALUES ('$idCliente', '$idendereco', '$datacompra', '$produtos')";
    $idpedido = mysqli_insert_id($cnx);
    foreach ($idpedido as $idpedidos){
        
    }
    
    
    
    
    
    
    
    
    
    $resultado = mysqli_query($cnx = conn(), $sql);   
    if(!$resultado){die('Erro' . mysqli_error($cnx));}
    return '**** cadastrado com sucesso!';
}
?>
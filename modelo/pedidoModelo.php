<?php
function receberpedido($idCliente, $idendereco, $idFormaP, $datacompra){
    $sql = "INSERT INTO pedido (idCliente, idendereco, idFormaP, datacompra) VALUES ('$idCliente', '$idendereco', '$idFormaP', 'curdate()')";
    $idpedido = mysqli_insert_id($cnx);
    foreach ($idpedido as $idpedidos){
        
    }
    $resultado = mysqli_query($cnx = conn(), $sql);   
    if(!$resultado){die('Erro' . mysqli_error($cnx));}
    return '**** cadastrado com sucesso!';
}

    
function listarPorMunicipio($cidade){
    $sql = "SELECT p.idPedido, p.datacompra, u.nome AS 'usuario', e.cidade "
            . "FROM pedido p "
            . "INNER JOIN cadastrocliente u "
            . "ON p.idCliente = u.idCliente "
            . "INNER JOIN endereco e "
            . "ON u.idCliente = e.idCliente "
            . "WHERE e.cidade = '$cidade'";
    $resultado = mysqli_query(conn(), $sql);
    $enderecos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $enderecos[] = $linha;
    }
    return $enderecos;
}

function listarPedidos(){
    $sql = "SELECT p.idPedido, p.datacompra, u.nome AS 'usuario', e.* 
            FROM pedido p
            INNER JOIN cadastrocliente u
            ON p.idCliente = u.idCliente
            INNER JOIN endereco e
            ON u.idCliente = e.idCliente";
    $resultado = mysqli_query(conn(), $sql);
    $enderecos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $enderecos[] = $linha;
    }
    return $enderecos;
}

function pegarPedidoPorID($idPedido){
    $sql = "SELECT p.idPedido, p.datacompra, u.nome AS 'usuario', e.* 
            FROM pedido p
            INNER JOIN cadastrocliente u
            ON p.idCliente = u.idCliente
            INNER JOIN endereco e
            ON u.idCliente = e.idCliente
            WHERE p.idPedido = '$idPedido'";
    $resultado = mysqli_query(conn(), $sql);
    $pedido = mysqli_fetch_assoc($resultado);
    
    return $pedido;
}

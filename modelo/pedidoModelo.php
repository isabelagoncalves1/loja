<?php

function receberpedido($idCliente, $idendereco, $idFormaP, $idsProdutos) {
    $sql = "INSERT INTO pedido (idCliente, idendereco, idFormaP, datacompra) VALUES ('$idCliente', '$idendereco', '$idFormaP', curdate())";

    $cnx = conn();
    $retorno = mysqli_query($cnx, $sql);

    if (!$retorno) {
        echo mysqli_error($cnx);
    }

    $idpedido = mysqli_insert_id($cnx);




    foreach ($idsProdutos as $idProduto) {
        $sql = "INSERT INTO pedido_produto (idProduto, idpedido) VALUES ('$idProduto', '$idpedido')";
        $resultado = mysqli_query($cnx, $sql);
        if (!$resultado) {
            echo mysqli_error($cnx);
        }
    }
}

function listarPorMunicipio($cidade) {
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

function listarPedidos() {
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

function pegarPedidoPorID($idPedido) {
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

function pegarProdutoPorPedido() {
    $sql = "Select * from pedido_produto where idProduto = '$idsProdutos";
    $resultado = mysqli_query(conn(), $sql);
    $pedido2 = mysqli_fetch_assoc($resultado);

    return $pedido2;
}

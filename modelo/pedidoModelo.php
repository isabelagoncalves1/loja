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

function listarPorMunicipio($cidade){
    $sql = "SELECT p.* "
            . "FROM pedido p "
            . "INNER JOIN cadastrocliente cc"
            . "ON p.idCliente = cc.idCliente"
            . "INNER JOIN endereco e"
            . "ON cc.idCliente = e.idCliente"
            . "WHERE e.cidade = '$cidade'";
    $resultado = mysqli_query(conn(), $sql);
    $enderecos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $enderecos[] = $linha;
    }
    return $enderecos;
}

function listarPedidos(){
    $sql = "SELECT COUNT(p.idpedido) AS quant, e.cidade FROM pedido p INNER JOIN cadastrocliente cc ON p.idCliente = cc.idCliente INNER JOIN endereco e ON cc.idCliente = e.idCliente GROUP BY e.cidade";
    $resultado = mysqli_query(conn(), $sql);
    $enderecos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $enderecos[] = $linha;
    }
    return $enderecos;
}


# SUBSTITUIR VARIÁVEIS (TABELAS, COLUNAS
# )
$sql = "SELECT p.idpedido, p.datacompra, u.nome AS 'usuario', fp.nome AS 'pagamento'
FROM pedido p
INNER JOIN formapagamento fp
ON p.idFormaPagamento = fp.idFormaPagamento
INNER JOIN cadastrocliente u
ON p.id = u.idCliente
ORDER BY datacompra ASC";
<?php

function listarEndereco() {
    $sql = "select * from endereco";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $enderecos[] = $linha;
    }
    return $enderecos;
}

function CadastrarEndereco ($idCliente, $logradouro, $numero, $complemento, $bairro, $cidade, $cep){
    $sql = "INSERT INTO endereco (idCliente, logradouro, numero, complemento, bairro, cidade, cep) VALUES ('$cpf', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$cep')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){die('Erro ao cadastrar endereço' . mysqli_error($cnx));}
    return 'Endereço cadastrado com sucesso!';
}

function pegarenderecoPorId($idendereco){
    $sql = "SELECT * FROM endereco WHERE idendereco= $idendereco";
    
    $resultado = mysqli_query(conn(), $sql);
    $endereco = mysqli_fetch_assoc($resultado);
    return $endereco;
}


function deletarEndereco($idendereco) {
    $sql = "DELETE FROM endereco WHERE idendereco = $idendereco";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) {
        die('Erro ao deletar endereço' . mysqli_error($cnx));
    }
    return 'Endereço deletado com sucesso!';
}


function editarEndereco($idendereco, $idCliente, $logradouro, $numero, $complemento, $bairro, $cidade, $cep){
    $sql = "UPDATE endereco SET idCliente = '$idCliente', logradouro = '$logradouro', numero = '$numero', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade', cep = '$cep' WHERE idendereco = $idendereco";
    
    echo $sql;
    
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){die('Erro ao alterar endereço' . mysqli_error($cnx));}
    return 'Endereço alterado com sucesso!';
}


<?php

function listarp() {
    $sql = "select * from addproduto";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}

function adicionarProduto($idcategoria, $preco, $nome, $descricao, $imagem, $estoque_minimo, $estoque_maximo){
    $sql = "INSERT INTO addproduto (idcategoria, preco, nome, descricao, imagem, estoque_minimo, estoque_maximo) VALUES ('$idcategoria', '$preco', '$nome', '$descricao', '$imagem', '$estoque_minimo', '$estoque_maximo')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){die('Erro ao cadastrar produto' . mysqli_error($cnx));}
    return 'Produto cadastrado com sucesso!';
}

function pegarprodutoPorId($idProduto){
    $sql = "SELECT * FROM addproduto WHERE idProduto= $idProduto";
    
    $resultado = mysqli_query(conn(), $sql);
    $produto = mysqli_fetch_assoc($resultado);
    return $produto;
}

function BuscarProdutoPorNome($nome_da_busca){
    $sql = "SELECT * FROM addproduto WHERE nome LIKE '%$nome_da_busca%'";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtos[] = $linha;
    }
    return $produtos;
}

function deletarProduto($idProduto) {
    $sql = "DELETE FROM addproduto WHERE idProduto = $idProduto";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) {
        die('Erro ao deletar produto' . mysqli_error($cnx));
    }
    return 'Produto deletado com sucesso!';
}


function editarProduto($idProduto, $idcategoria, $preco, $nome, $descricao, $imagem, $estoque_minimo, $estoque_maximo){
    $sql = "UPDATE addproduto SET idcategoria = '$idcategoria', preco = '$preco', nome = '$nome', descricao = '$descricao', imagem = '$imagem', estoque_minimo = '$estoque_minimo', estoque_maximo = '$estoque_maximo' WHERE idProduto = $idProduto";
    
    echo $sql;
    
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){die('Erro ao alterar produto' . mysqli_error($cnx));}
    return 'Produto alterado com sucesso!';
}


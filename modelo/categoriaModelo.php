<?php
function listarc() {
    $sql = "select * from categoria";
    $resultado = mysqli_query(conn(), $sql);
    $categorias = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $categorias[] = $linha;
    }
    return $categorias;
}




function adicionarCategoria($descricao){
    $sql = "INSERT INTO categoria (descricao) VALUES ('$descricao')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){die('Erro ao cadastrar categoria' . mysqli_error($cnx));}
    return 'Categoria cadastrada com sucesso!';
}


function pegarcategoriaPorId($idcategoria){
    $sql = "SELECT * FROM categoria WHERE idcategoria= $idcategoria";
    
    $resultado = mysqli_query(conn(), $sql);
    $categoria = mysqli_fetch_assoc($resultado);
    return $categoria;
}


function deletarCategoria($idcategoria) {
    $sql = "DELETE FROM categoria WHERE idcategoria = $idcategoria";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) {
        die('Erro ao deletar categoria' . mysqli_error($cnx));
    }
    return 'Categoria deletada com sucesso!';
}

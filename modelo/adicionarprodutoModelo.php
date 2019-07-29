<?php


function adicionarProduto($nome, $preco, $descricao, $quantidade){
    $sql = "INSERT INTO addproduto (nome, preco, descricao, quantidade) VALUES ('$nome', '$preco', '$descricao', '$quantidade')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){die('Erro ao cadastrar produto' . mysqli_error($cnx));}
    return 'Produto cadastrado com sucesso!';
}


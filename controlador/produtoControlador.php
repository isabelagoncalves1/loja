<?php

require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";


function adicionar() {
    $dados = array();
    if (ehPost()) {
        $idcategoria = strip_tags($_POST["idcategoria"]);
        $preco = strip_tags($_POST["preco"]);
        $nome = strip_tags($_POST["nome"]);
        
        $descricao = strip_tags($_POST["descricao"]);
        $imagem = strip_tags($_POST["imagem"]);
        $estoque_minimo = strip_tags($_POST["estoque_minimo"]);
        $estoque_maximo = strip_tags($_POST["estoque_maximo"]);
        
        $msg = adicionarProduto($idcategoria, $preco, $nome, $descricao, $imagem, $estoque_minimo, $estoque_maximo, $idcategoria);
        
        
        redirecionar("produto/listarprodutos");
        
    } else {
    }
        
        $dados["categorias"] = listarc();
        exibir("paginas/adicionarproduto", $dados);
    
}



function listarprodutos(){
    $dados = array();
    $dados["produtos"] = listarp();
    exibir("paginas/adm", $dados);
    
}

function ver($idProduto){
    $dados["produtos"] = pegarprodutoPorId($idProduto);
    exibir("paginas/visualizarProduto", $dados);
}

function deletar($idProduto){
    $msg = deletarProduto($idProduto);    
    redirecionar("produto/listarprodutos");
}


function editar($idProduto){
    if (ehPost()){
        $idcategoria = strip_tags($_POST["idcategoria"]);
        $preco = strip_tags($_POST["preco"]);
        $nome = strip_tags($_POST["nome"]); 
        $descricao = strip_tags($_POST["descricao"]);
        $imagem = strip_tags($_POST["imagem"]);
        $estoque_minimo = strip_tags($_POST["estoque_minimo"]);
        $estoque_maximo = strip_tags($_POST["estoque_maximo"]);
        
        editarProduto($idProduto, $nome, $email);
        redirecionar("produto/listarprodutos");
    }else{
        
        $dados["produtos"] = pegarprodutoPorId($idProduto);
        exibir("paginas/adicionarproduto");
    }
}



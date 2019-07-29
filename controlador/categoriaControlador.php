<?php
require_once "modelo/categoriaModelo.php";

function adicionar() {
    $dados = array();
    if (ehPost()) {
        $descricao = strip_tags($_POST["descricao"]);
        
        $msg = adicionarCategoria($descricao);
        
        
        redirecionar("categoria/listarcategoria");
        
    } else {
    }
        exibir("paginas/categoria");
    
}



function listarcategoria(){
    $dados = array();
    $dados["categorias"] = listarc();
    exibir("paginas/listarcategoria", $dados);
    
}

function ver($idcategoria){
    $dados["categorias"] = pegarcategoriaPorId($idcategoria);
    exibir("paginas/visualizarCategoria", $dados);
}

function deletar($idcategoria){
    $msg = deletarCategoria($idcategoria);    
    redirecionar("categoria/listarcategoria");
}


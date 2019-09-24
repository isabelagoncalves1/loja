<?php
require_once "modelo/categoriaModelo.php";

/** admin */
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


/** anon */  
function listarcategoria(){
    $dados = array();
    $dados["categorias"] = listarc();
    exibir("paginas/listarcategoria", $dados);
    
}
/** anon */  
function ver($idcategoria){
    $dados["categorias"] = pegarcategoriaPorId($idcategoria);
    exibir("paginas/visualizarCategoria", $dados);
}
/** admin */
function deletar($idcategoria){
    $msg = deletarCategoria($idcategoria);    
    redirecionar("categoria/listarcategoria");
}
/** admin */
function editar($idcategoria){
    if (ehPost()){
        $descricao = strip_tags($_POST["descricao"]);
        
        echo $descricao;
        
        
        editarCategoria($idcategoria, $descricao);
         redirecionar("categoria/listarcategoria");
    }else{
        
        $dados["categorias"] = pegarcategoriaPorId($idcategoria);
        exibir("paginas/categoria", $dados);
    }
}


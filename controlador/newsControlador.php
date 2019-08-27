<?php

require_once "modelo/newsModelo.php";

function addnews() {
    
    $dados = array(); 
    $dados["erroEmail"] = "";
    
    if (ehPost()) {
        $nome = strip_tags ($_POST["nome"]);
        $email = strip_tags ($_POST["email"]);
        
        
        
    if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL )) ) {
	$dados["erroEmail"] = 'Envie um email válido.';
        }
         
    
    if ((($dados["erroEmail"]) != "")){
            exibir("paginas/acesso", $dados);
        }else{  
            $msg = newsletter($nome, $email);
            
        }
    }
        
     exibir("paginas/news", $dados);
}

function listarnews(){
    $dados = array();
    $dados["news"] = listarnew();
    exibir("paginas/listarnews", $dados);
    
}

function ver($idnews){
    $dados["news"] = pegarnewsPorId($idnews);
    exibir("paginas/visualizarnews", $dados);
}

function deletar($idnews){
    $msg = deletarNews($idnews);    
    redirecionar("news/listarnews");
}

function editar($idnews){
    if (ehPost()){
        $nome = strip_tags($_POST["nome"]);
        $email = strip_tags($_POST["email"]);
        
        
        
        editarNews($idnews, $nome, $email);
         redirecionar("news/listarnews");
    }else{
        
        $dados["news"] = pegarnewsPorId($idnews);
        exibir("paginas/categoria", $dados);
    }
}
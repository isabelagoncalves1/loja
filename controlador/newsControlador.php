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

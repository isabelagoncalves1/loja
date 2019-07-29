<?php

require_once "modelo/acessoModelo.php";

function loginAdm() {
    
    $dados = array(); 
    $dados["erroEmail"] = "";
    $dados["erroSenha"] = "";
    if (ehPost()) {
        $email = strip_tags ($_POST["email"]);
        $senha = strip_tags ($_POST["senha"]);
        
        
    if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL )) ) {
	$dados["erroEmail"] = 'Envie um email válido.';
        }
    if (strlen(trim($_POST['senha'])) == 0) {
        $dados["erroSenha"] = "Você deve inserir uma senha.";
    }
        
    
    if ((($dados["erroEmail"]) != "") || (($dados["erroSenha"]) != "")){
            exibir("paginas/acesso", $dados);
        }else{  
            $msg = lAdm($email, $senha);
           
        }
        redirecionar("produto/listarprodutos");
    }
        
     exibir("paginas/adm", $dados);
}

function loginCliente() {
    
    $dados = array(); 
    $dados["erroEmail"] = "";
    $dados["erroSenha"] = "";
    if (ehPost()) {
        $email = strip_tags ($_POST["email"]);
        $senha = strip_tags ($_POST["senha"]);
        
        
    if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL )) ) {
	$dados["erroEmail"] = 'Envie um email válido.';
        }
    if (strlen(trim($_POST['senha'])) == 0) {
        $dados["erroSenha"] = "Você deve inserir uma senha.";
    }
        
    
    if ((($dados["erroEmail"]) != "") || (($dados["erroSenha"]) != "")){
            exibir("paginas/acesso", $dados);
        }else{  
            $msg = lcliente($email, $senha);
           
        }
         redirecionar("cliente/listarClientes");
    }
        
     exibir("paginas/acesso", $dados);
}


       


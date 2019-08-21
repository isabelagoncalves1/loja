<?php

require_once "modelo/clienteModelo.php";
require_once "modelo/enderecoModelo.php";

function cadastrar() {
    $dados = array(); 
    $dados["erroEmail"] = "";
    $dados["erroSenha"] = "";
    $dados["erroCpf"] = "";
    if (ehPost()) {
        $email = strip_tags ($_POST["email"]);
        $senha = strip_tags ($_POST["senha"]);
        $senha_confirma  = strip_tags ($_POST["senha_confirma"]);
        $nome = strip_tags($_POST["nomec"]);
        $cpf = strip_tags ($_POST["cpf"]);
        $sexo = strip_tags ($_POST["sexo"]);
        $datan = strip_tags ($_POST["datan"]);
  
        if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL )) ) {
	$dados["erroEmail"] = 'Envie um email válido.';
        }
         if (strlen(trim($_POST['senha'])) == 0) {
             $dados["erroSenha"] = "Você deve inserir uma senha.";
        } else if ($senha != $senha_confirma) {
            $dados["erroSenha"] = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
        }
        
        if (!is_numeric($cpf)){
            $dados["erroCpf"] = "CPF incorreto, insira números.";
        }
        
        if ((($dados["erroEmail"]) != "") || (($dados["erroSenha"]) != "")  || (($dados["erroCpf"]) != "")){
            exibir("paginas/formulariocadastro", $dados);
        }else{  
            $msg = cadastrarCliente($email, $senha, $senha_confirma, $nome, $cpf, $sexo, $datan);
            //echo $msg;
        }
        redirecionar("cliente/listarClientes");
    } 
    
    
    exibir("paginas/formulariocadastro", $dados);
}

function listarClientes() {
    $dados = array();
    $dados["clientes"] = pegarTodosClientes();
    exibir("paginas/listar", $dados);
}

function ver($idClient){
    $dados["enderecos"] = pegarenderecoPorIdCliente($idClient);
    $dados["cliente"] = pegarClientePorId($idClient);
    exibir("paginas/visualizarcliente", $dados);
}


function deletar($idCliente){
    $msg = deletarCliente($idCliente);    
    redirecionar("cliente/listarClientes");
}


function editar($idCliente){
    
    $dados = array(); 
    $dados["erroEmail"] = "";
    $dados["erroSenha"] = "";
    $dados["erroCpf"] = "";
    
    if (ehPost()){
        $email = strip_tags ($_POST["email"]);
        $senha = strip_tags ($_POST["senha"]);
        $senha_confirma  = strip_tags ($_POST["senha_confirma"]);
        $nome = strip_tags($_POST["nomec"]);
        $cpf = strip_tags ($_POST["cpf"]);
        $sexo = strip_tags ($_POST["sexo"]);
        $datan = strip_tags ($_POST["datan"]);
        
        editarCliente($idCliente, $nome, $email);
        redirecionar("cliente/listarClientes");
        
         if ( ( ! isset( $email ) || ! filter_var( $email, FILTER_VALIDATE_EMAIL )) ) {
	$dados["erroEmail"] = 'Envie um email válido.';
        }
         if (strlen(trim($_POST['senha'])) == 0) {
             $dados["erroSenha"] = "Você deve inserir uma senha.";
        } else if ($senha != $senha_confirma) {
            $dados["erroSenha"] = "<span class='erro'><b>Erro</b>: As senhas não conferem!</span>";
        }
        
        if (!is_numeric($cpf)){
            $dados["erroCpf"] = "CPF incorreto, insira números.";
        }
        
        if ((($dados["erroEmail"]) != "") || (($dados["erroSenha"]) != "")  || (($dados["erroCpf"]) != "")){
            exibir("paginas/formulariocadastro", $dados);
        }else{  
            $msg = cadastrarCliente($email, $senha, $senha_confirma, $nome, $cpf, $sexo, $datan);
            //echo $msg;
        }
        redirecionar("cliente/listarClientes");
        
    }else{
        $dados["cliente"] = pegarClientePorId($idCliente);
        exibir("paginas/formulariocadastro", $dados);
    }
    
} 




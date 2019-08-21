<?php

function cadastrar() {
    $dados = array();
    if (ehPost()) {
        $cpf = strip_tags($_POST["cpf"]);
        $logradouro = strip_tags($_POST["logradouro"]);
        $numero = strip_tags($_POST["numero"]);  
        $complemento = strip_tags($_POST["complemento"]);
        $bairro = strip_tags($_POST["bairro"]);
        $cidade = strip_tags($_POST["cidade"]);
        $cep = strip_tags($_POST["cep"]);
        
        $msg = cadastrarEndereco($cpf, $logradouro, $numero, $complemento, $bairro, $cidade, $cep);
        
        
        redirecionar("endereco/");
        
    } else {
    }
        
        $dados["enderecos"] = listarEndereco();
        exibir("paginas/adicionarendereco", $dados);
    
}


function listarEndereco(){
    $dados = array();
    $dados["enderecos"] = listarenderecos();
    exibir("paginas/listarenderecos", $dados);
    
}

function ver($idendereco){
    $dados["enderecos"] = pegarenderecoPorId($idendereco);
    exibir("paginas/visualizarEndereco", $dados);
}

function deletar($idendereco){
    $msg = deletarEndereco($idendereco);    
    redirecionar("endereco/listarEndereco");
}


function editar($idendereco){
    
    
    $ola = "mensagem";
    
    if (ehPost()){
        $idCliente = strip_tags($_POST["idCliente"]);
        $logradouro = strip_tags($_POST["logradouro"]);
        $numero = strip_tags($_POST["numero"]);  
        $complemento = strip_tags($_POST["complemento"]);
        $bairro = strip_tags($_POST["bairro"]);
        $cidade = strip_tags($_POST["cidade"]);
        $cep = strip_tags($_POST["cep"]);
        
        editarEndereco($idCliente, $logradouro, $numero, $complemento, $bairro, $cidade, $cep);
        redirecionar("endereco/listarEndereco");
    }else{
        
        $dados["enderecos"] = pegarenderecoPorId($idendereco);
        $dados["clientes"] = pegarTodosClientes();
        
        exibir("paginas/adicionarendereco", $dados);
    }
}


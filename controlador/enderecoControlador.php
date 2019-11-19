<?php

require_once "modelo/enderecoModelo.php";
require_once "modelo/clienteModelo.php";
require_once "modelo/pedidoModelo.php";
/** anon */
function cadastrar($idCliente) {
    $dados = array();
    if (ehPost()) {
        $logradouro = strip_tags($_POST["logradouro"]);
        $numero = strip_tags($_POST["numero"]);
        $complemento = strip_tags($_POST["complemento"]);
        $bairro = strip_tags($_POST["bairro"]);
        $cidade = strip_tags($_POST["cidade"]);
        $cep = strip_tags($_POST["cep"]);

        $msg = cadastrarEndereco($idCliente, $logradouro, $numero, $complemento, $bairro, $cidade, $cep);


        redirecionar("cliente/ver/$idCliente");
    } else {
        $dados["enderecos"] = listarEndereco();
        exibir("paginas/adicionarendereco", $dados);
    }
}
/** anon */
function listarE() {
    $dados = array();
    $dados["enderecos"] = listarEndereco();
    exibir("paginas/listarenderecos", $dados);
}
/** anon */
function ver($idendereco) {
    $dados["enderecos"] = pegarenderecoPorId($idendereco);
    exibir("paginas/visualizarEndereco", $dados);
}
/** anon */
function deletar($idendereco, $idCliente) {
    $msg = deletarEndereco($idendereco);
    redirecionar("cliente/ver/$idCliente");
}
/** anon */
function editar($idCliente, $idendereco) {


    $dados = array();

    if (ehPost()) {

        $logradouro = strip_tags($_POST["logradouro"]);
        $numero = strip_tags($_POST["numero"]);
        $complemento = strip_tags($_POST["complemento"]);
        $bairro = strip_tags($_POST["bairro"]);
        $cidade = strip_tags($_POST["cidade"]);
        $cep = strip_tags($_POST["cep"]);

        editarEndereco($idendereco, $idCliente, $logradouro, $numero, $complemento, $bairro, $cidade, $cep);

        redirecionar("cliente/ver/$idCliente");
    } else {
        $dados["enderecos"] = pegarenderecoPorId($idendereco);
        $dados["clientes"] = pegarTodosClientes();
        exibir("paginas/adicionarendereco", $dados);
    }
}



<?php

require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";
require_once "servico/uploadServico.php";
require_once "modelo/pedidoModelo.php";
require_once "modelo/enderecoModelo.php";
require_once "modelo/clienteModelo.php";

/** admin */
function adicionar() {
    $dados = array();
    if (ehPost()) {
        $idcategoria = strip_tags($_POST["idcategoria"]);
        $preco = strip_tags($_POST["preco"]);
        $nome = strip_tags($_POST["nome"]);
        $descricao = strip_tags($_POST["descricao"]);

        $tmp_name_imagem = $_FILES["imagem"]["tmp_name"];
        $name_imagem = $_FILES["imagem"]["name"];
        $imagem = uploadImagem($tmp_name_imagem, $name_imagem);

        $estoque_minimo = strip_tags($_POST["estoque_minimo"]);
        $estoque_maximo = strip_tags($_POST["estoque_maximo"]);

        $msg = adicionarProduto($idcategoria, $preco, $nome, $descricao, $imagem, $estoque_minimo, $estoque_maximo, $idcategoria);

        redirecionar("produto/listarprodutos");
    } else {
        $dados["categorias"] = listarc();
        exibir("paginas/adicionarproduto", $dados);
    }
}
/** anon */
function buscar() {
    if (ehPost()) {
        $nome_da_busca = $_POST['busca'];

        $dados['produtos'] = BuscarProdutoPorNome($nome_da_busca);

        exibir("paginas/adm", $dados);
    }
}
/** anon */
function listarprodutos() {
    $dados = array();
    $dados["categorias"] = listarc();
    $dados["produtos"] = listarp();
    exibir("paginas/adm", $dados);
}

function listarprodutos2() {
    $dados = array();
    $dados["produtos"] = listarp();
    exibir("paginas/index", $dados);
}
/** anon */
function ver($id) {
    $dados["produtos"] = pegarprodutoId($id);
    exibir("paginas/visualizarProduto", $dados);
}
/** admin */
function deletar($idProduto) {
    $msg = deletarProduto($idProduto);
    redirecionar("produto/listarprodutos");
}
/** admin */
function editar($idProduto) {

    $ola = "mensagem";

    if (ehPost()) {
        $idcategoria = strip_tags($_POST["idcategoria"]);
        $preco = strip_tags($_POST["preco"]);
        $nome = strip_tags($_POST["nome"]);
        $descricao = strip_tags($_POST["descricao"]);
        $estoque_minimo = strip_tags($_POST["estoque_minimo"]);
        $estoque_maximo = strip_tags($_POST["estoque_maximo"]);
        $quant_estoque = strip_tags($_POST["quant_estoque"]);
        
        $tmp_name_imagem = $_FILES["imagem"]["tmp_name"];
        $name_imagem = $_FILES["imagem"]["name"];
        $imagem = uploadImagem($tmp_name_imagem, $name_imagem);

        editarProduto($idProduto, $idcategoria, $preco, $nome, $descricao, $imagem, $estoque_minimo, $estoque_maximo, $quant_estoque);
        redirecionar("produto/listarprodutos");
    } else {

        $dados["produtos"] = pegarprodutoId($idProduto);
        $dados["categorias"] = listarc();

        exibir("paginas/adicionarproduto", $dados);
    }
}

/** anon */
function BuscarPorCategoria ($id){
    $dados = array();
    $dados['produtos'] = BuscarProdutoPorCastegoria($id);
    $dados['categorias'] = listarc();
    exibir("paginas/adm", $dados);
}



/** anon */ 
function listarClientes() {
    $dados = array();
    $dados["clientes"] = pegarTodosClientes();
    exibir("paginas/listar", $dados);
}
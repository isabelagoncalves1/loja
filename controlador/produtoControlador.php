<?php

require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";
require_once "servico/uploadServico.php";

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

function buscar() {
    if (ehPost()) {
        $nome_da_busca = $_POST['busca'];

        $dados['produtos'] = BuscarProdutoPorNome($nome_da_busca);

        exibir("paginas/adm", $dados);
    }
}

function listarprodutos() {
    $dados = array();
    $dados["produtos"] = listarp();
    exibir("paginas/adm", $dados);
}

function ver($idProduto) {
    $dados["produtos"] = pegarprodutoPorId($idProduto);
    exibir("paginas/visualizarProduto", $dados);
}

function deletar($idProduto) {
    $msg = deletarProduto($idProduto);
    redirecionar("produto/listarprodutos");
}

function editar($idProduto) {


    $ola = "mensagem";

    if (ehPost()) {
        $idcategoria = strip_tags($_POST["idcategoria"]);
        $preco = strip_tags($_POST["preco"]);
        $nome = strip_tags($_POST["nome"]);
        $descricao = strip_tags($_POST["descricao"]);
        $imagem = strip_tags($_POST["imagem"]);
        $estoque_minimo = strip_tags($_POST["estoque_minimo"]);
        $estoque_maximo = strip_tags($_POST["estoque_maximo"]);

        editarProduto($idProduto, $idcategoria, $preco, $nome, $descricao, $imagem, $estoque_minimo, $estoque_maximo);
        redirecionar("produto/listarprodutos");
    } else {

        $dados["produtos"] = pegarprodutoPorId($idProduto);
        $dados["categorias"] = listarc();

        exibir("paginas/adicionarproduto", $dados);
    }
}

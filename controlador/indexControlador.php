<?php
require_once "modelo/indexModelo.php";
function listarproduto() {

    $produto = array();
    $produto["nome"] = "Calça listrada";
    $produto["preço"] = "R$ 130,00";

    exibir("paginas/index", $produto);
}

function visualizar(){
    
}

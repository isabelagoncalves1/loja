<?php
require_once "modelo/produtoModelo.php";
/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */

/** anon */
function index() {
    $dados = array();
    $dados["produtos"] = listarp();
    exibir("paginas/index", $dados);
  
}

/** admin */
function sobre() {
    echo "sou lala!";
}

/** user */
function mapa() {
    exibir("paginas/mapa");
}
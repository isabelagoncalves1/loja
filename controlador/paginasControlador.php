<?php

/* CONTROLADOR
 * funçao: controlar as páginas estáticas (páginas sem acesso ao modelo)  */

/** anon */
function index() {
    exibir("paginas/index");
}

/** admin */
function sobre() {
    echo "sou lala!";
}

/** user */
function mapa() {
    exibir("paginas/mapa");
}
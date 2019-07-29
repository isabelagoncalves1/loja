<?php

function conn() {
    $cnx = mysqli_connect("localhost", "id9920439_isabela_pw2", "02102002", "id9920439_webloja");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}
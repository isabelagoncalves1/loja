<?php

function conn() {
    //$cnx = mysqli_connect("localhost", "id10888147_isabela", "0doisdez2002@", "id10888147_webloja");
    //$cnx = mysqli_connect("ftpupload.net", "epiz_24472616", "7inGUgkBKCSvNNb", "epiz_24472616_webloja");
    $cnx = mysqli_connect("localhost", "root", "", "webloja");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}

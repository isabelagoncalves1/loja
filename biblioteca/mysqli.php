<?php

function conn() {
    $hospedado = "biblioteca/manipulacao/hospedagem.csv";
    $local = "biblioteca/manipulacao/local.csv";


    $arquivo = $local;

    $arq = fopen($arquivo, 'r');
    $linha = fgets($arq);
    $conx = explode(',', $linha);

    $serv = $conx[0];
    $usuario = $conx[1];
    $senha = $conx[2];
    $database = $conx[3];

    $cnx = mysqli_connect($serv, $usuario, $senha, $database);

    fclose($arq);

    if (!$cnx) {
        die('Deu errado a conexao!');
    }
    return $cnx;
}
//function conn() {
    //$cnx = mysqli_connect("localhost", "id10888147_isabela", "0doisdez2002@", "id10888147_webloja");
    //$cnx = mysqli_connect("ftpupload.net", "epiz_24472616", "7inGUgkBKCSvNNb", "epiz_24472616_webloja");
    //  $cnx = mysqli_connect("localhost", "root", "", "webloja");
    //if (!$cnx)
    //  die('Deu errado a conexao!');
    //return $cnx;
//}

    
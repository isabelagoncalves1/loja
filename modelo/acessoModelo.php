<?php

function lAdm($email, $senha){
    $sql = "INSERT INTO lAdm(email, senha) VALUES ('$email', '$senha')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){die('Erro ao cadastrar cliente' . mysqli_error($cnx));}
    return 'Cliente cadastrado com sucesso!';
}

function lcliente($email, $senha){
    $sql = "INSERT INTO lcliente(email, senha) VALUES ('$email', '$senha')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){die('Erro ao cadastrar cliente' . mysqli_error($cnx));}
    return 'Cliente cadastrado com sucesso!';
}



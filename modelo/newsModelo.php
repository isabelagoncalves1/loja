<?php

function newsletter($nome, $email){
    $sql = "INSERT INTO newsletter(nome, email) VALUES ('$nome', '$email')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){die('Erro ao cadastrar cliente' . mysqli_error($cnx));}
    return 'Cliente cadastrado com sucesso!';
}

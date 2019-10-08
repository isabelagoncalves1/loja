<?php

function cadastrarCliente($email, $senha, $senha_confirma, $nome, $cpf, $sexo, $datan){
    $sql = "INSERT INTO cadastrocliente (email, senha, senha_confirma, nome, cpf, sexo, datan, tipousuario) VALUES ('$email', '$senha', '$senha_confirma', '$nome', '$cpf', '$sexo', '$datan', 'user')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado){die('Erro ao cadastrar cliente' . mysqli_error($cnx));}
    return 'Cliente cadastrado com sucesso!';
}

function pegarTodosClientes(){
    $sql = "SELECT * FROM cadastrocliente";
    $resultado = mysqli_query(conn(), $sql);
    $clientes = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $clientes[] = $linha;
    }
    return $clientes;
}

function pegarClientePorId($idCliente){
    $sql = "SELECT * FROM cadastrocliente WHERE idCliente= $idCliente";
    $resultado = mysqli_query(conn(), $sql);
    $cliente = mysqli_fetch_assoc($resultado);
    return $cliente;
}

function deletarCliente($idCliente) {
    $sql = "DELETE FROM cadastrocliente WHERE idCliente = $idCliente";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) {
        die('Erro ao deletar cliente' . mysqli_error($cnx));
    }
    return 'Cliente deletado com sucesso!';
}

function editarCliente($idCliente, $nome, $email){
    $sql = "UPDATE cadastrocliente SET nome = '$nome', email = '$email' WHERE idCliente = '$idCliente'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar cliente' . mysqli_error($cnx));}
    return 'Cliente alterado com sucesso!';
}


function pegarUsuarioPorEmailSenha($email, $senha) {
    $sql = "SELECT * FROM cadastrocliente WHERE email= '$email' and senha = '$senha'";
    $resultado = mysqli_query(conn(), $sql);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}
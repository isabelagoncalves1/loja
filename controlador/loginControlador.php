<?php

require_once "modelo/clienteModelo.php";

/** anon */
function index() {
    if (ehPost()) {
        extract($_POST);
        $usuario = pegarUsuarioPorEmailSenha($email, $senha);
        
        if (acessoLogar($usuario)) {
            alert("bem vindo" . $login);
            redirecionar("paginas");
        } else {
            alert("usuario ou senha invalidos!");
        }
    }
    exibir("login/index");
}

/** anon */
function logout() {
    acessoDeslogar();
    alert("deslogado com sucesso!");
    redirecionar("paginas");
}

?>
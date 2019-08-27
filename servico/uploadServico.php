<?php

#function uploadImagem($arquivo, $caminhoImagem = "publico/upload/imagens/") {
#    $imagem_tmp = $arquivo["tmp_name"];
#    $imagem = basename($arquivo["name"]);
#    move_uploaded_file($imagem_tmp, $caminhoImagem . $imagem);
#    $diretorio_da_imagem = $caminhoImagem . $imagem;
#    return $diretorio_da_imagem;
#}

function uploadImagem($tmp_name_imagem, $name_imagem){
    # $extensao recebe os últimos 4 caracteres do nome da imagem em minusculo
    $extensao = strtolower(substr($name_imagem, -4));

    # define o destino do upload
    $diretorio = "publico/upload/img/";

    # md5() criptografa o valor dentro dos ()
    # time() retorna a hora atual
    # $novo_nome recebe a hora criptografada + a estensao do arquivo
    $novo_nome = md5(time()).$extensao;

    # pega o arquivo com o nome temporário, move e renomeia o arquivo no diretorio
    move_uploaded_file($tmp_name_imagem, $diretorio.$novo_nome);

    # retorna a url da imagem
    return $diretorio.$novo_nome;
}
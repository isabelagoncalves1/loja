<form  method="POST" action="" enctype="multipart/form-data" style="border-bottom: 1px solid #c2e3de;margin-bottom: 20px;border-top: 1px solid #c2e3de;margin-top: 20px;">


    <h1 id="h1form">Adicionar Endereço</h1>
    <div id="form">
        <div id="formao2">
            <p>Logradouro:</p> <input type="text" name="logradouro" value="<?= @$enderecos['logradouro'] ?>">
            <p>Número:</p> <input type="text" name="numero" value="<?= @$enderecos['numero'] ?>">
            <p>Complemento:</p> <input type="text" name="complemento" value="<?= @$enderecos['complemento'] ?>">
            <p>Bairro:</p> <input type="text" name="bairro" value="<?= @$enderecos['bairro'] ?>">
            <p>Cidade:</p> <input type="text" name="cidade" value="<?= @$enderecos['cidade'] ?>">
            <p>Cep:</p> <input type="text" name="cep" value="<?= @$enderecos['cep'] ?>">





            <button type="submit" class="botao05" >Entrar</button>
        </div>
    </div>
</form>



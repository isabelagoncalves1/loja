<form  method="POST" action="" enctype="multipart/form-data" style="border-bottom: 1px solid #c2e3de;margin-bottom: 20px;border-top: 1px solid #c2e3de;margin-top: 20px;">


    <h1 id="h1form">Adicionar Cupom</h1>
    <div id="form">
        <div id="formao2">

            <p>Nome:</p> <input type="text" name="nomecupom" value="<?= @$cupons['nomecupom'] ?>">
            <p>Desconto:</p> <input type="text" name="desconto" value="<?= @$cupons['desconto'] ?>">
            <button type="submit" class="botao05">Cadastrar</button>
        </div>
    </div>
</form>

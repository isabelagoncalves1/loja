<form  method="POST" action="" enctype="multipart/form-data" style="border-bottom: 1px solid #c2e3de;margin-bottom: 20px;border-top: 1px solid #c2e3de;margin-top: 20px;">
    

        <h1 id="h1form">Adicionar produtos</h1>
        <div id="form">
            <div id="formao2">
                <p>Nome:</p> <input type="text" name="nome" value="<?= @$produtos['nome'] ?>">
                <p>Preço:</p> <input type="text" name="preco" value="<?= @$produtos['preco'] ?>">
                <p>Descrição:</p> <input type="text" name="descricao" value="<?= @$produtos['descricao'] ?>">
                <p>Imagem:</p> <input type="file" name="imagem" value="<?= @$produtos['imagem'] ?>">
                <p>Estoque mínimo:</p> <input type="text" name="estoque_minimo" value="<?= @$produtos['estoque_minimo'] ?>">
                <p>Estoque máximo:</p> <input type="text" name="estoque_maximo" value="<?= @$produtos['estoque_maximo'] ?>">
                <p>Quantidade do estoque:</p> <input type="text" name="quant_estoque" value="<?= @$produtos['quant_estoque'] ?>">




                <select name="idcategoria">
                    <option value="">Descricao</option>
                    <?php foreach ($categorias as $categoria): ?>
                        <option value="<?= $categoria['idcategoria'] ?>"><?= $categoria['descricao'] ?></option>
                    <?php endforeach; ?>
                </select>
                <button type="submit" class="botao05" >Entrar</button>
            </div>
        </div>
    
</form>

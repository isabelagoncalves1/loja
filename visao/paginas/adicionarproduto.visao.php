<form  method="POST" action="" enctype="multipart/form-data">
    <div id="divaoadd">

        <h1>Adicionar produtos</h1>
        <div id="divadd">
            <p>Nome:</p> <input type="text" name="nome" value="<?= @$produtos['nome'] ?>">
            <p>Preço:</p> <input type="text" name="preco" value="<?= @$produtos['preco'] ?>">
            <p>Descrição:</p> <input type="text" name="descricao" value="<?= @$produtos['descricao'] ?>">
            <p>Imagem:</p> <input type="file" name="imagem" value="<?= @$produtos['imagem'] ?>">
            <p>Estoque mínimo:</p> <input type="text" name="estoque_minimo" value="<?= @$produtos['estoque_minimo'] ?>">
            <p>Estoque máximo:</p> <input type="text" name="estoque_maximo" value="<?= @$produtos['estoque_maximo'] ?>">


            <?php print_r($categorias); ?>

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

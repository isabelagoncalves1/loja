<form  method="POST" action="">
        <div id="divaoadd">
            
                <h1>Adicionar Endereço</h1>
            <div id="divadd">
                <p>Logradouro:</p> <input type="text" name="nome" value="<?=@$produtos['nome']?>">
                <p>Número:</p> <input type="text" name="preco" value="<?=@$produtos['preco']?>">
                <p>Complemento:</p> <input type="text" name="descricao" value="<?=@$produtos['descricao']?>">
                <p>Bairro:</p> <input type="text" name="imagem" value="<?=@$produtos['imagem']?>">
                <p>Cidade:</p> <input type="text" name="estoque_minimo" value="<?=@$produtos['estoque_minimo']?>">
                <p>Cep:</p> <input type="text" name="estoque_maximo" value="<?=@$produtos['estoque_maximo']?>">
                
                
                <?php print_r($categorias);?>
                
                <select name="idcategoria">
                    <option value="">Descricao</option>
                    <?php foreach ($categorias as $categoria): ?>
                        <option value="<?=$categoria['idcategoria']?>"><?=$categoria['descricao']?></option>
                    <?php endforeach; ?>
                    </select>
                <button type="submit" class="botao05" >Entrar</button>
            </div>
        </div>
    </form>



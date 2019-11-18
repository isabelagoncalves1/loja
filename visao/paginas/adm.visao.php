<div id="tudo2">
    <h2>Categorias</h2>
    <table class="table">
        <thead>
            <tr >
                <th class="prod">NOME</th>
            </tr>
        </thead>
        <?php foreach ($categorias as $categoria): ?>
            <tr>
                <td class="descr">
                    <a href="./produto/BuscarPorCategoria/<?= $categoria['idcategoria'] ?>" class="botao02"><?= $categoria['descricao'] ?></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <h2>Produtos</h2>
    <table class="table">
        <thead>
            <tr >
                <th class="prod">ID</th>
                <th class="prod">NOME</th>
                <th class="prod">Preço</th>
                <th class="prod">Estoque</th>
            </tr>
        </thead>
        <?php foreach ($produtos as $produto): ?>
            <tr>
                <td class="descr"><?= $produto['idProduto'] ?></td>
                <td class="descr"><?= $produto['nome'] ?></td>
                <td class="descr"><?= $produto['preco'] ?></td>
                <td class="descr"><?= $produto['quant_estoque'] ?></td>
                <td class="descr"><a href="./produto/ver/<?= $produto['idProduto'] ?>" class="botao02">Ver</a></td>
                <td class="descr"><a href="./produto/deletar/<?= $produto['idProduto'] ?>" class="botao02">Deletar</a></td>
                <td class="descr"><a href="./produto/editar/<?= $produto['idProduto'] ?>" class="botao02">Alterar</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="./produto/adicionar" class="botao05"> Novo produto</a>
</div>

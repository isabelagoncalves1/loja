<div id="tudo2">
    <h2>Seção Administrador</h2>
    <table class="table">
        <thead>

            <tr >
                <th class="prod">ID</th>
                <th class="prod">NOME</th>
                <th class="prod">Preço</th>
                <th class="prod">Descrição</th>
                

            </tr>


        </thead>
        <?php foreach ($produtos as $produto): ?>
            <tr>
 
                <td class="descr"><?= $produto['idProduto'] ?></td>
                <td class="descr"><?= $produto['nomeproduto'] ?></td>
                <td class="descr"><?= $produto['preco'] ?></td>
                <td class="descr"><?= $produto['descricao'] ?></td>
                
                <td class="descr"><a href="./produto/ver/<?= $produto['idProduto'] ?>" class="botao02">Ver</a></td>
                <td class="descr"><a href="./produto/deletar/<?= $produto['idProduto'] ?>" class="botao02">Deletar</a></td>
                <td class="descr"><a href="./produto/editar/<?= $produto['idProduto'] ?>" class="botao02">Alterar</a></td>
            </tr>

        <?php endforeach; ?>
    </table>
    <a href="./produto/adicionar" class="botao05"> Novo produto</a>
</div>

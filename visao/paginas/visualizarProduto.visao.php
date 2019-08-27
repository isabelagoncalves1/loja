<h2>Ver detalhes do Produto</h2>
<img src="<?= $produtos['imagem'] ?>">
<p>Id: <?= $produtos['idProduto'] ?></p>
<p>Nome: <?= $produtos['nome'] ?></p>
<p>Preço: <?= $produtos['preco'] ?></p>
<p>Descrição: <?= $produtos['descricao'] ?></p>
<p>Estoque mínimo: <?= $produtos['estoque_minimo'] ?></p>
<p>Estoque máximo: <?= $produtos['estoque_maximo'] ?></p>

<a href="./carrinho/comprar/<?= $produtos['idProduto'] ?>" class="botao05">Comprar</a>



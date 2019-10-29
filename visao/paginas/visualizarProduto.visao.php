<div id="paizao">
  <div id="paiproduto">
      
            <div id="paicarac">
                 <div id="caracte2">
                     <h2>Ver detalhes do Produto</h2>
                    <img class="imgf2" src="<?= $produtos['imagem'] ?>">

                    
                    <a href="./carrinho/comprar/<?= $produtos['idProduto'] ?>" class="botao05">Comprar</a>
                </div>
                <div id="filho">
                    <p class="p1">Id: <?= $produtos['idProduto'] ?></p>
                    <p class="p1">Nome: <?= $produtos['nome'] ?></p>
                    <p class="p1">Preço: <?= $produtos['preco'] ?></p>
                    <p class="p1">Descrição: <?= $produtos['descricao'] ?></p>
                    <p class="p1">Estoque mínimo: <?= $produtos['estoque_minimo'] ?></p>
                    <p class="p1">Estoque máximo: <?= $produtos['estoque_maximo'] ?></p>
                    <p class="p1">Quantidade do estoque: <?= $produtos['quant_estoque'] ?></p>

                </div>

            </div>
  </div>
</div>
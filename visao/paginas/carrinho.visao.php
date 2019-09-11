
<div id="titulo">

    <h1>Seu carrinho</h1>
</div>
<div id="blocao">
    <div id="bloco">
        <div id="pai">
            <div id="info" style="margin-top: 30px;">
                <h6 id="pe1">Produtos</h6>
                <h6 id="pe2">Quantidade</h6>
                <h6 id="pe3">Valor total</h6>
            </div>
        </div>
        <?php foreach ($produtos as $produto): ?>
            <div id="foto">
                <img src="<?= $produto['imagem'] ?>" alt="Produto 1">
                <p id="desc"><?= $produto['nome'] ?></p><br></p>

                <div id="qnt">
                    <td class="cart__update-wrapper cart-flex-item text-right">
                        <a href="/cart/change?line=1&amp;quantity=0" class="btn btn--small btn--secondary cart__remove medium-up--hide"></a>
                        <div class="cart__qty">
                            <input class="qntd" type="number" name="updates[]" id="updates_12093154230387:865704e88915d4d66224c929a9b647c0" value="1" min="0" pattern="[0-9]*">
                        </div>
                    </td>
                </div>


                <p id="tx1"><?= $produto['preco'] ?></p>

            </div>
        <?php endforeach; ?>
        <div id="pai2">
            <div id="desconto">
                <h6>CUPOM DE DESCONTO</h6>
                <p>Informe aqui seu cupom promocional.</p>
                <form>
                    <input type="text" placeholder=""/>
                </form>
            </div>
            <div id="paicep">
                <div id="cep">
                    <p>Digite o CEP</p>
                    <form method="POST" action="carrinho/ver">
                        <input name="cep" type="text" maxlength="10" value="<?= @$frete ?>">

                        <button class="botao01">OK</button>

                    </form>
                </div>
            </div>
            <div class="contentt">
                <a href="index.html" class="botao02">FINALIZAR PEDIDO</a>
                <a href="./carrinho/deletar" class="botao02">APAGAR CARRINHO</a>

            </div>

        </div>
    </div>
</div>


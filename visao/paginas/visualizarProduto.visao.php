<div id="paizao">
    <div id="paiproduto">

        <div id="paicarac">
            <div id="caracte2">
                <h2>Ver detalhes do Produto</h2>
                <img class="imgf2" src="<?= $produtos['imagem'] ?>">

                <a href="./carrinho/comprar/<?= $produtos['idProduto'] ?>" class="botao05">Comprar</a>
            </div>
            <div id="filho">
                <div id="paiprod">
                    <p id="pdodetalhes">"<?= $produtos['nome'] ?>"</p>
                    <p id="pdodetalhes">R$<?= $produtos['preco'] ?></p>
                </div>
                <div id="paiprod2">
                    <p id="pdodetalhes">Quantidade do estoque: <?= $produtos['quant_estoque'] ?></p>
                    <p id="pdodetalhes"> <?= $produtos['descricao'] ?></p>
                </div>
                <div id="paiprod3">
                    
                    <div id="filhodetalhes">
                        <p id="ppdetalhes">Tamanho</p>
                        <select class="botaodetalhes" data-option="option1" id="detalheselect"><option value="G">G</option><option value="GG">GG</option><option value="M">M</option><option value="P">P</option><option value="PP">PP</option></select>
                    </div>
                    <div id="irmaodetalhes">
                        
                        <td class="cart__update-wrapper cart-flex-item text-right">
                            <a href="/cart/change?line=1&amp;quantity=0" class="btn btn--small btn--secondary cart__remove medium-up--hide"></a>
                            <div class="cart__qty">
                                <input class="qntd" type="number" name="updates[]" id="updates_12093154230387:865704e88915d4d66224c929a9b647c0" value="1" min="0" pattern="[0-9]*">
                            </div>
                        </td>
                    </div>
                    </div>
                </div>
            </div>



        </div>
    </div>




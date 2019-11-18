<form  method="POST" action="" enctype="multipart/form-data" style="border-bottom: 1px solid #c2e3de;margin-bottom: 20px;border-top: 1px solid #c2e3de;margin-top: 20px;">

    <h1 id="h1form">Finalizar pedido</h1>
    <div id="formfinalizar">
        <div id="fpagamento">
            <p>Forma de pagamento</p>
            <select name="idFormaP">
                <option value="">Formas de pagamento</option>
                <?php foreach ($formas as $forma): ?>
                    <option value="<?= $forma['idFormaP'] ?>"><?= $forma['descricao'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div id="endereco">
            <p>Endereços</p>
            <select name="idendereco">
                <option value="">Endereços</option>
                <?php foreach ($enderecos as $endereco): ?>
                    <option value="<?= $endereco['idendereco'] ?>"><?= $endereco['logradouro'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div id="precototal">
            <p>Preço total</p>
            <p class="errop">R$<?php echo $produtos; ?></p>


        </div>


    </div>
    <div id="formfinalizar2">
        <div id="fcupom">
            <p>Cupons</p>

            <form method="POST" action="">
                <input type="text" name="desconto" value="">
                <button type="submit" class="botao05" >Aplicar desconto</button>    
            </form>
            </div>


            <div id="precodesconto">
            <p>Preço depois do desconto </p>
            <p class="errop">R$<?php echo $total; ?></p>
            </div>
        
            <button type="submit" class="botao5" >Finalizar</button>
        </div></div>
</form>





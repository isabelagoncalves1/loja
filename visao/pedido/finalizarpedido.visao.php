<form  method="POST" action="" enctype="multipart/form-data" style="border-bottom: 1px solid #c2e3de;margin-bottom: 20px;border-top: 1px solid #c2e3de;margin-top: 20px;">

    <h1 id="h1form">Finalizar pedido</h1>
     <div id="formm">
    <p>Forma de pagamento</p>
    <select name="idFormaP">
        <option value="">Formas de pagamento</option>
        <?php foreach ($formas as $forma): ?>
            <option value="<?= $forma['idFormaP'] ?>"><?= $forma['descricao'] ?></option>
        <?php endforeach; ?>
    </select>
    <p>Endereços</p>
    <select name="idendereco">
        <option value="">Endereços</option>
        <?php foreach ($enderecos as $endereco): ?>
            <option value="<?= $endereco['idendereco'] ?>"><?= $endereco['logradouro'] ?></option>
        <?php endforeach; ?>
    </select>
    <p>Cupons</p>
    <select name="idcupom">
        <option value="">Cupons</option>
        <?php foreach ($cupons as $cupom): ?>
            <option value="<?= $cupom['idcupom'] ?>"><?= $cupom['nomecupom'] ?></option>
        <?php endforeach; ?>
    </select>
     </div>
</form>


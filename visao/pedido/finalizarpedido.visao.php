<h1>finalizar pedido</h1>
<p>oiii bora finalizar pedido?</p>
<p>Forma de pagamento</p>
<select name="idFormaP">
    <option value=""></option>
    <?php foreach ($formas as $forma): ?>
        <option value="<?= $forma['idFormaP'] ?>"><?= $forma['idFormaP'] ?></option>
    <?php endforeach; ?>
</select>



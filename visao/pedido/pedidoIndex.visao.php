<h1 align="center">Pedidos</h1>

<form action="pedido/BuscarPorMunicipio/" method="POST" >
    <div id="form">
        <label id="plabel" for='city'>Selecione a cidade</label>
        <select id='city' name="cidade">
            <?php foreach ($enderecos as $endereco): ?>
                <option value="<?= $endereco['cidade'] ?>">
                    <?= $endereco['cidade'] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <button type="submit" class="botao02">Buscar</button>
</form>
</div>
<table class="tablee">
    <thead>
    <th class="prod">Pedido</th>
    <th class="prod">Usuário</th>
    <th class="prod">Logradouro</th>
   
</thead>
<?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td class="descr"><?= $pedido['idPedido'] ?></td>
        <td class="descr"><?= $pedido['usuario'] ?></td>
        <td class="descr"><?= $pedido['logradouro'] ?></td>
        <td class="descr"><a href="pedido/visualizar/<?= $pedido['idPedido'] ?>" class="botao07">Detalhes</a></td>
    </tr>
<?php endforeach; ?>
</table>

<br>
<br>
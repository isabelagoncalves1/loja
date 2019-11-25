<h2>Listar Pedidos e Cidades</h2>

<table class="table">
    <thead>
        <th class="prod">Pedido</th>
        <th class="prod">Cidade</th>
    </thead>
    <?php foreach ($pedidos as $cliente): ?>
        <tr>
            <td class="descr"><?=$cliente['quant']?></td>
            <td class="descr"><?=$cliente['cidade']?></td>
        </tr>
    <?php endforeach; ?>
</table>
<br><br>
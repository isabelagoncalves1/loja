<p>Nome do usuário:<?= $pedido['usuario'] ?></p>
<p>Id do pedido:<?= $pedido['idPedido'] ?></p>

<?php foreach ($pedido2 as $produto): ?>
<tr>
<td class="descr"><?= $produto['idProduto'] ?></td>



</tr>
<?php endforeach; ?>
<p>Cidade:<?= $pedido['cidade'] ?></p>
<p>Rua:<?= $pedido['logradouro'] ?></p>
<p>Data da compra:<?= $pedido['datacompra'] ?></p>
<br><br>
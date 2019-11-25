
<h2 align="center">Listar Pedidos e Cidades</h2>
<form action="pedido/BuscarPorMunicipio/" method="POST" >
    <div id="form">

   </div>
<table class="tablee">
    <thead>
        <th class="prod">Pedido</th>    
        <th class="prod">Usuário</th>
        <th class="prod">Cidade</th>
    </thead>
    <?php foreach ($pedidos as $pedido): ?>
        <tr>
            <td class="descr"><?=$pedido['idPedido']?></td>
            <td class="descr"><?=$pedido['usuario']?></td>
            <td class="descr"><?=$pedido['cidade']?></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="pedido">Voltar</a>
 
    
</form>
<br>
<br>
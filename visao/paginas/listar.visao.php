
<div id="tudo2">
<h2>Listar clientes</h2>
<table class="table">
        <thead>
            <tr>
                <th class="prod">ID</th>
                <th class="prod">NOME</th>
                <th class="prod">EMAIL</th>
                
        </thead>
        <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td class="descr"><?=$cliente['idCliente']?></td>
            <td class="descr"><?=$cliente['nome']?></td>
            <td class="descr"><?=$cliente['email']?></td>
            <td><a href="./cliente/ver/<?=$cliente['idCliente']?>" class="botao02">Ver</a></td>
            <td><a href="./cliente/deletar/<?=$cliente['idCliente']?>" class="botao02">Deletar</a></td>"
            <td><a href=".cliente/editar/<?=$cliente['idCliente']?>"Alterar</a></td>
            
        </tr>
        <?php endforeach; ?>
</table>
<a href="./cliente/cadastrar" class="botao05"> Novo Cliente</a>
</div>



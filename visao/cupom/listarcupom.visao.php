<div id="tudo2">
<h2>Listar Cupons</h2><br>
<table class="table">
        <thead>
            <tr>
                <th class="prod">ID</th>
                <th class="prod">NOME</th>
                <th class="prod">DESCONTO</th>
                
             </tr>   
               
        </thead>
 <?php foreach ($cupons as $cupom): ?>
        <tr>
            <td class="descr"><?= $cupom['idcupom'] ?></td>
            <td class="descr"><?= $cupom['nomecupom'] ?></td>
            <td class="descr"><?= $cupom['desconto'] ?></td>
            <td class="descr"><a href="./cupom/ver/<?= $cupom['idcupom'] ?>" class="botao02">Ver</a></td>
            <td class="descr"><a href="./cupom/editar/<?= $cupom['idcupom'] ?>" class="botao02">Alterar</a></td>
            <td class="descr"><a href="./cupom/deletar/<?= $cupom['idcupom'] ?>" class="botao02">Deletar</a></td>
        </tr>
    <?php endforeach; ?>
</table>
<a href="./cupom/adicionar" class="botao05">Novo Cupom</a>

</div>



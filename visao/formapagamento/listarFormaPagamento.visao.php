<div id="tudo2">
<h2>Listar formas de pagamento</h2>
<table class="table">
        <thead>
            <tr>
                <th class="prod">ID</th>
                <th class="prod">Descrição</th>
             </tr>   
               
        </thead>
        <?php foreach ($formas as $forma): ?>
        <tr>
            <td class="descr"><?=$forma['idFormaP']?></td>
            <td class="descr"><?=$forma['descricao']?></td>
            <td class="descr"><a href="./FormaPagamento/ver/<?=$forma['idFormaP']?>" class="botao02">Ver</a></td>
            <td class="descr"><a href="./FormaPagamento/deletar/<?=$forma['idFormaP']?>" class="botao02">Deletar</a></td>
            <td class="descr"><a href="./FormaPagamento/editar/<?=$forma['idFormaP']?>" class="botao02">Alterar</a></td>
            
        </tr>
        <?php endforeach; ?>
</table>
<a href="./FormaPagamento/adicionar" class="botao05"> Nova forma de pagamento</a>
</div>

<div id="tudo2">
<h2>Listar categoria</h2>
<table class="table">
        <thead>
            <tr>
                <th class="prod">ID</th>
                <th class="prod">Descrição</th>
             </tr>   
               
        </thead>
        <?php foreach ($categorias as $categoria): ?>
        <tr>
            <td class="descr"><?=$categoria['idcategoria']?></td>
            <td class="descr"><?=$categoria['descricao']?></td>
          
            <td class="descr"><a href="./categoria/ver/<?=$categoria['idcategoria']?>" class="botao02">Ver</a></td>
            <td class="descr"><a href="./categoria/deletar/<?=$categoria['idcategoria']?>" class="botao02">Deletar</a></td>"
            
            
        </tr>
        <?php endforeach; ?>
</table>
<a href="./categoria/adicionar" class="botao05"> Nova categoria</a>
</div>

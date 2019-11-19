<div id="tudo2">
    <h2>Categorias</h2>
    <table class="table1">
        
        <div id="trcategoria">
        <?php foreach ($categorias as $categoria): ?>
        
        
                <p class="descr"><a href="./produto/BuscarPorCategoria/<?= $categoria['idcategoria'] ?>" class="botao03"><?= $categoria['descricao'] ?></a>
                </p>
        
        
        <?php endforeach; ?>
                </div>
    </table>
    <table class="table1">
        
        <div id="trcategoria">
        <?php foreach ($enderecos as $endereco): ?>
        
        
                <p class="descr"><a href="./produto/BuscarPorEndereco/<?= $endereco['idendereco'] ?>" class="botao03"><?= $endereco['cidade'] ?></a>
                </p>
        
        
        <?php endforeach; ?>
                </div>
    </table>

    <h2>Produtos</h2>
    <table class="table">
        <thead>
            <tr >
                <th class="prod">ID</th>
                <th class="prod">NOME</th>
                <th class="prod">Preço</th>
                <th class="prod">Estoque</th>
            </tr>
        </thead>
        <?php foreach ($produtos as $produto): ?>
            <tr>
                <td class="descr"><?= $produto['idProduto'] ?></td>
                <td class="descr"><?= $produto['nome'] ?></td>
                <td class="descr"><?= $produto['preco'] ?></td>
                <td class="descr"><?= $produto['quant_estoque'] ?></td>
                <td class="descr"><a href="./produto/ver/<?= $produto['idProduto'] ?>" class="botao02">Ver</a></td>
                <td class="descr"><a href="./produto/deletar/<?= $produto['idProduto'] ?>" class="botao02">Deletar</a></td>
                <td class="descr"><a href="./produto/editar/<?= $produto['idProduto'] ?>" class="botao02">Alterar</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="./produto/adicionar" class="botao05"> Novo produto</a>
    
    <table class="table">
        <thead>
            <tr>
                
                <th class="prod">NOME</th>
                
                
        </thead>
        <?php foreach ($clientes as $cliente): ?>
        <tr>
            
            <td class="descr"><?=$cliente['nome']?></td>
            <td class="descr"><?=$cliente['email']?></td>
            <td><a href="./cliente/ver/<?=$cliente['idCliente']?>" class="botao02">Ver</a></td>
            <td><a href="./cliente/deletar/<?=$cliente['idCliente']?>" class="botao02">Deletar</a></td>"
            <td><a href="./cliente/editar/<?=$cliente['idCliente']?>" class="botao02">Alterar</a></td>"
            
        </tr>
        <?php endforeach; ?>
</table>
</div>

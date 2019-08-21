<h2>Ver detalhes do cliente</h2>
    <p>Id: <?=$cliente['idCliente']?></p>
    <p>Nome: <?=$cliente['nome']?></p>
    <p>E-mail: <?=$cliente['email']?></p>
    <p>Cpf: <?=$cliente['cpf']?></p>
    <p>Data de Nascimento: <?=$cliente['datan']?></p>
    
    
<h2>Listar endereços</h2>
<table class="table">
        <thead>
            <tr>
                <th class="prod">Logradouro</th>
                <th class="prod">N°</th>
                <th class="prod">Complemento</th>
                <th class="prod">Bairro</th>
                <th class="prod">Cidade</th>
                <th class="prod">Cep</th>
             </tr>   
               
        </thead>
        <?php foreach($enderecos as $endereco): ?>
        <tr>
            <td class="descr"><?=$endereco['logradouro']?></td>
            <td class="descr"><?=$endereco['numero']?></td>
            <td class="descr"><?=$endereco['complemento']?></td>
            <td class="descr"><?=$endereco['bairro']?></td>
            <td class="descr"><?=$endereco['cidade']?></td>
            <td class="descr"><?=$endereco['cep']?></td>
            
            <td class="descr"><a href="./endereco/ver/<?=$endereco['idendereco']?>" class="botao02">Ver</a></td>
            <td class="descr"><a href="./endereco/deletar/<?=$endereco['idendereco']?>" class="botao02">Deletar</a></td>
            <td class="descr"><a href="./endereco/editar/<?=$endereco['idendereco']?>" class="botao02">Alterar</a></td>
            
        </tr>
        <?php endforeach; ?>
</table>
<a href="endereco/cadastrar/<?=$cliente["idCliente"]?>" class="botao05"> Novo endereço</a>
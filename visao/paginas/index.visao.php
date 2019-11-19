<div id="paiinicial">
    <div id="filho1">
        <img class="imgini" src="./publico/FOTOS/camisetarco.png" alt="Logão">
    </div>
    <div id="filho2">
        <img class="imgini" src="./publico/FOTOS/moletomlua2.png" alt="Logão"> 
    </div>
    <div id="filho3">
        <img class="imgini2" src="./publico/FOTOS/walk.jpg" alt="Logão"> 
    </div>
</div>

<h1 id="h1inicial">Página inicial</h1>
<ul id="cssdalista">
    <?php if((acessoUsuarioEstaLogado()) && (acessoPegarPapelDoUsuario() == 'admin')){?>
        <li><a class="lista" href="./cliente/cadastrar/">Cadastro</a></li>
        <li><a class="lista" href="./acesso/loginCliente/">Login</a></li>
        <li><a class="lista" href="./cupom/adicionar/">Adicionar cupom</a></li>
        <li><a class="lista" href="./FormaPagamento/adicionar/">Adicionar forma de pagamento</a></li>
        <li> <a class="lista" href="./produto/adicionar/">Cadastrar produto</a></li>
        <li> <a class="lista" href="./categoria/adicionar/">Cadastrar categoria</a></li>
        <li> <a class="lista" href="./produto/listarprodutos/">Listar produtos</a></li>
        <li><a class="lista" href="./cliente/listarClientes/">Listar clientes</a></li>
    <?php }?>
</ul>

<li> <a class="lista" href="./produto/listarprodutos2/"></a></li>

<div id="dad">
    <?php foreach ($produtos as $produto): ?>
        <div id="dadd">
            <div id="son">
                <img class="imgf3" src="<?= $produto['imagem'] ?>">
            </div>
            <div id="sonn">
                <td class="descr"><a href="./produto/ver/<?= $produto['idProduto'] ?>" class="botaoinicial"><?= $produto['nome'] ?></a></td>
            </div>    
        </div>
    <?php endforeach; ?>
</div>

<div id="pai16">
    <div class="quatro">
        <img class="imgm" src="./publico/FOTOS/camisetarco.png" alt="Logão">
    </div>
    <div class="quatro">
        <img class="imgm" src="./publico/FOTOS/jeans1.jpg" alt="Logão">
    </div>
    <div class="quatro">
        <img class="imgm" src="./publico/FOTOS/kids2.jpg" alt="Logão">
    </div>
    <div class="quatro">
        <img class="imgm" src="./publico/FOTOS/moletomlua3.png" alt="Logão">
    </div>
</div>

<div id="pai16">
    <div class="quatro">
        <img class="imgm" src="./publico/FOTOS/calcaquadri2.png" alt="Logão">
    </div>
    <div class="quatro">
        <img class="imgm" src="./publico/FOTOS/camisetarco3.png" alt="Logão">
    </div>
    <div class="quatro">
        <img class="imgm" src="./publico/FOTOS/meias2.jpg" alt="Logão">
    </div>
    <div class="quatro">
        <img class="imgm" src="./publico/FOTOS/whereis3.jpg" alt="Logão">
    </div>

</div>


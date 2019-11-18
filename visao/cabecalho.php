<!--Para incluir o cabeçalho no seu site você precisa realizar a requisição deste arquivo `template.php`-->
<nav>
    <div id="menuzao">
        <div id="menu">
            <div id="cabecalho"> 
            </div>


            <div id="busca">
                <a href="http://textfaces.wtf/"></a><p></p>
                <form action="produto/buscar" method="POST">
                    <input type="search" name="busca">
                </form>
            </div>

            <div id="logo">
                <a href="paginas"><img id="logao" src="./publico/FOTOS/90s.png" alt="Logão"></a>
            </div>
                <div id="icones">
                    <section class="container flex-end">
                        <div class="item">
                            <a href="./carrinho/ExibirSession"><img class="i1" src="./publico/FOTOS/carrinho.png" alt="ícone2"></a>
                        </div>
                        <div class="item">
                            <?php if (acessoUsuarioEstaLogado()): ?>
                                <a href="cliente/ver/<?= acessoPegarUsuarioLogado(); ?>"><img class="i1" src="./publico/FOTOS/usuario.png" alt="ícone1"></a>
                                <a href="./login/logout"><img class="i1" src="./publico/FOTOS/login.png" alt="ícone1"></a>
                            <?php else: ?>   
                                <a href="./login"> <img class="i1" src="./publico/FOTOS/login.png" alt="ícone1"></a>
                                <a class="tt" href="./cliente/cadastrar/" class=""></a>
                            <?php endif; ?>
                        </div>
                    </section>
                </div>
        </div>
    </div>
</nav>




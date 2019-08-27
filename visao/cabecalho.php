<!--Para incluir o cabeçalho no seu site você precisa realizar a requisição deste arquivo `template.php`-->
<nav>
    <div id="menuzao">
        <div id="menu">
            <div id="cabecalho"> 
            </div>

            
            <div id="busca">
                <a href="http://textfaces.wtf/"></a><p></p>
                <form action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar" >
                    <input type="search" name="palavra" placeholder="Estou procurando por...">
                </form>
            </div>

            <div id="logo">
                <a href="./index/listarproduto"><img id="logao" src="./publico/FOTOS/90s.png" alt="Logão"></a>
            </div>
<a class="tt" href="./cliente/cadastrar/" class="">

            <div id="icones">
                <section class="container flex-end">
                    <div class="item">
                        <a href="./acesso/loginCliente"><img class="i1" src="./publico/FOTOS/usuario.png" alt="ícone1"></a>

                    </div>
                    <div class="item">
                        <a href="./carrinho/ver"><img class="i1" src="./publico/FOTOS/carrinho.png" alt="ícone2"></a>

                    </div>
                </section>
            </div>
        </div>
    </div>
</nav>

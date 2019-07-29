


<div id="formA">

    <form id="formid" method="POST" action="./acesso/loginCliente">
        <div id="formaoA">
            <div id="cliente">
                <h1>JÁ SOU CLIENTE</h1>
                <p>Email:</p> <input type="text" name="email">
                <p class="errop"><?php echo $erroEmail; ?></p>

                <p>Senha</p> <input type="password" name="senha">

                <p class="errop"><?php echo $erroSenha; ?></p>
                <button type="submit" class="botao02" >Entrar</button>
            </div>
        </div>
    </form>



    <form id="formid2" action="./acesso/cadastro"  method="POST">
        <div id="formA2">
            <div id="formaoA2"> 
                <h1>AINDA NÃO POSSUO CADASTRO</h1>
                <p>Digite o e-mail que deseja cadastrar</p> <input type="text" name="emailcad">
                <p class="errop"><?php echo $erroEmail; ?></p>
                <button type="submit" class="botao02" >Cadastrar</button>    
            </div>
    </form>

    <form action="./acesso/loginAdm" method="POST" style="border-bottom: 1px solid #c2e3de;margin-bottom: 20px;border-top: 1px solid #c2e3de;margin-top: 20px;"> 
        <div id="formaoA3"> 
            <h1>LOGIN ADMINISTRADOR</h1>
            <p>E-mail</p> <input type="text" name="email">
            <p class="errop"><?php echo $erroEmail; ?></p>  
            <p>Senha</p> <input type="password" name="senha">

            <p class="errop"><?php echo $erroSenha; ?></p>
            <button type="submit" class="botao02" >Cadastrar</button>
        </div>

    </form>
</div> 
</div>


<h1 id="h1form">Criar conta</h1>




<form action="" method="POST" style="border-bottom: 1px solid #c2e3de;margin-bottom: 20px;border-top: 1px solid #c2e3de;margin-top: 20px;">
    <div id="form">
        <div id="formao">
          
            <p>Email:</p> <input type="text" name="email" value="<?=@$cliente['email']?>">
            <p class="errop"><?php echo $erroEmail; ?></p>



            <p>Criar senha:</p> <input type="password" name="senha" value="<?=@$cliente['senha']?>">
            <p>Confirmar senha:</p> <input type="password" name="senha_confirma" value="<?=@$cliente['senha_confirma']?>">
            <p class="errop"><?php echo $erroSenha; ?></p>

            <p>Nome completo:</p> <input type="text" name="nomec" value="<?=@$cliente['nomec']?>"><br><br>

        </div>    
        <div id="formao2">    
            <p>CPF:</p> <input type="text" name="cpf" placeholder="000.000.000-00" value="<?=@$cliente['cpf']?>">
            <p class="errop"><?php echo $erroCpf; ?></p>
            <p>Sexo:</p> <select name="sexo" value="<?=@$cliente['sexo']?>">
                <option value="fm">Selecione</option>
                <option value="fm">Feminino</option>
                <option value="mas">Masculino</option>
            </select>
            <p>Data de nascimento:</p> <input type="text" name="datan" placeholder="__/__/____" value="<?=@$cliente['datan']?>"><br><br>
            

        </div>
    </div>
    <button type="submit" class="botao06" >Cadastrar</button>
</form>



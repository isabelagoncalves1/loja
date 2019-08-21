<form  method="POST" action="">
        <div id="divaoadd">
            
                <h1>Adicionar Endereço</h1>
            <div id="divadd">
                <p>Logradouro:</p> <input type="text" name="logradouro" value="<?=@$enderecos['logradouro']?>">
                <p>Número:</p> <input type="text" name="numero" value="<?=@$enderecos['numero']?>">
                <p>Complemento:</p> <input type="text" name="complemento" value="<?=@$enderecos['complemento']?>">
                <p>Bairro:</p> <input type="text" name="bairro" value="<?=@$enderecos['bairro']?>">
                <p>Cidade:</p> <input type="text" name="cidade" value="<?=@$enderecos['cidade']?>">
                <p>Cep:</p> <input type="text" name="cep" value="<?=@$enderecos['cep']?>">
                
                
               
                
             
                <button type="submit" class="botao05" >Entrar</button>
            </div>
        </div>
    </form>



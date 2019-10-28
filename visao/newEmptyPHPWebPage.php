<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        ?>
    </body>
</html>
 if (ehPost()) {
            $nomecupom = $_POST['nomecupom'];
            $dpsdesconto = 0;
            //buscar no banco
            $cupom = pegarCupomNome($nomecupom);
            foreach ($cupom as $cupon) {
                $precoProduto = $produto['preco'];
                $descontoproduto = $cupom['desconto'];
                $dpsdesconto = $precoProduto - $descontoproduto;

                print_r($cupom);
            }
            $dados["cupon"] = $dpsdesconto;
        }
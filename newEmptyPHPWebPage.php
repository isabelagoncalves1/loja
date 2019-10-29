  if (ehPost()) {
            $nomecupom = $_POST['nomecupom'];
            $dpsdesconto = 0;
            //buscar no banco
            $cupom = pegarCupomNome($nomecupom);
                $precototal = $produto['preco'];
                $descontoproduto = $cupom['desconto'];
                $dpsdesconto = $precototal - $descontoproduto;
                print_r($dpsdesconto);
                
                print_r($cupom);
            }
            $dados["cupon"] = $dpsdesconto;
        exibir("pedido/finalizarpedido", $dados);
    } else {
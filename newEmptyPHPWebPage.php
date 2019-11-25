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
    
    
    function listarPorMunicipio($idCliente){
    $sql = "SELECT * FROM endereco WHERE idCliente = '$idCliente'";
    $resultado = mysqli_query(conn(), $sql);
    $produtoss = [];
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $produtoss[] = $linha;
    }
    return $produtoss;
}

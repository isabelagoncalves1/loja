<?php
require_once "modelo/produtoModelo.php";

function comprar($idProduto) {
    
    //salvar na seesao carrinho
    if(isset($_SESSION["carrinho"])) { //se existe a sessao carrinho
        $produtos = $_SESSION["carrinho"]; //peguei
    } else {
        $produtos = array();
    }
    
    $produtos[] = $idProduto; //adiciono um elemento no vetor produtos
    $_SESSION["carrinho"] = $produtos; //salvando o vetor na sessao

    //redirect
    redirecionar("carrinho/ver");
}

function ver() {
    if(isset($_SESSION["carrinho"])) {
        $produtos = $_SESSION["carrinho"];
        
        echo "ja existe!";
        print_r($produtos);
        
        $produtosBanco = array();
        for ($i=1; $i<sizeof($produtos); $i++){
            $idProduto = $produtos[$i];
            $produto = pegarprodutoPorId($idProduto);
            $produtosBanco[] = $produto;
        }
        
       
        
        $dados["produtos"] = $produtosBanco;
        exibir("paginas/carrinho", $dados);

    } else {
        echo "Não existe sessao carrinho!";
        echo "Carrinho vazio!";
    }

        //mostra na visao
          //chamar
}



function deletar(){
    unset($_SESSION["carrinho"]);
    session_destroy();
    redirecionar("carrinho/ver");
}


function removerItem() {
    
    
    $listaIds = $_SESSION["carrinho"];
    
   
    
    $produtos = array();
    $produtos[0] = 5;
    $produtos[1] = 4;
    $produtos[2] = 2;
    
    $idElementoDeleta = 2;
    
    
    for($i=0; $i< count($produtos); $i++) {
        if($idElementoDeleta == $produtos[$i]){
            echo "achei!"; 
            echo "O elemento a deletar é de indice $i"; 
            //deletar
            unset($produtos[$i]);
        }
    }
    
    print_r($produtos);
    
    unset($produtos[1]);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    print_r($produtos);
    
    
}

?>
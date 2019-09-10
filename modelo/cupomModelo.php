
<?php
function adicionarCupom($nomecupom, $desconto) {
    $sql = "INSERT INTO cupom(idcupom, nomecupom, desconto) VALUES(NULL,'$nomecupom','$desconto')";
    $resultado = mysqli_query($cnx = conn(), $sql);
    
    if (!$resultado) {
        die('Erro ao cadastrar cupom' . mysqli_error($cnx));
    }
    return 'Cupom cadastrado com sucesso!';
}
function pegarTodosCupons() {
    $sql = "SELECT * FROM cupom";
    $resultado = mysqli_query(conn(), $sql);
    $cupons = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $cupons[] = $linha;
    }
    return $cupons;
}
function pegarCupomPorId($id) {
    $sql = "SELECT * FROM cupom WHERE idcupom = $id";
    $resultado = mysqli_query(conn(), $sql);
    $cupom = mysqli_fetch_assoc($resultado);
    return $cupom;
}
function deletarCupom($id) {
    $sql = "DELETE FROM cupom WHERE idcupom = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao deletar cupom' . mysqli_error($cnx));
    }
    return 'Cupom deletado com sucesso!';
}
function editarCupom($id, $nomecupom, $desconto) {
    $sql = "UPDATE cupom SET nomecupom = '$nomecupom', desconto = '$desconto' WHERE idcupom = $id";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die('Erro ao alterar cupom' . mysqli_error($cnx));
    }
    return 'Cupom alterado com sucesso!';
}
?>

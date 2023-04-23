<?php
session_start();

require '../../config/conexao.php';

if(isset($_GET['idProd'])){
    $produto_id = $_GET['idProd'];
    $id_usuario = $_SESSION['ID'];

    // Consulta a quantidade em estoque do produto
    $consulta_estoque = $cn->query("SELECT quantidade FROM tbl_produto WHERE produto_id = '$produto_id'");
    $quantidade_estoque = (int) $consulta_estoque->fetchColumn();

    // Consulta a quantidade atual do produto no carrinho
    $consulta_carrinho = $cn->query("SELECT * FROM tbl_carrinho WHERE usuario_id = '$id_usuario' AND produto_id = '$produto_id'");

    if($consulta_carrinho->rowCount() > 0){
        $produto_carrinho = $consulta_carrinho->fetch(PDO::FETCH_ASSOC);
        $quantidade_atual = (int) $produto_carrinho['quantidade'];
        $nova_quantidade = $quantidade_atual + 1;

        // Verifica se a nova quantidade é menor ou igual à quantidade em estoque
        if($nova_quantidade <= $quantidade_estoque){
            $atualiza_carrinho = $cn->prepare("UPDATE tbl_carrinho SET quantidade = '$nova_quantidade' WHERE usuario_id = '$id_usuario' AND produto_id = '$produto_id'");
            $atualiza_carrinho->execute();
        }
    }
}

header("location:../../../app/pages/carrinho/cart.php#produtosCarrinho");
exit();

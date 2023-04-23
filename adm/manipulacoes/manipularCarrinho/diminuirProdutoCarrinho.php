<?php
session_start();

require '../../config/conexao.php';

if(isset($_GET['idProd'])){
    $produto_id = $_GET['idProd'];
    $id_usuario = $_SESSION['ID'];

    $consulta_carrinho = $cn->query("SELECT * FROM tbl_carrinho WHERE usuario_id = '$id_usuario' AND produto_id = '$produto_id'");

    if($consulta_carrinho->rowCount() > 0){
        $produto_carrinho = $consulta_carrinho->fetch(PDO::FETCH_ASSOC);
        $quantidade_atual = (int) $produto_carrinho['quantidade'];
        $nova_quantidade = $quantidade_atual - 1;

        if($nova_quantidade <= 0){
            // Remove o produto do carrinho se a quantidade for igual a zero
            $remove_produto = $cn->prepare("DELETE FROM tbl_carrinho WHERE usuario_id = '$id_usuario' AND produto_id = '$produto_id'");
            $remove_produto->execute();
        } else {
            $consulta_estoque = $cn->query("SELECT quantidade FROM tbl_produto WHERE produto_id = '$produto_id'");
            $produto_estoque = $consulta_estoque->fetch(PDO::FETCH_ASSOC);
            $quantidade_estoque = (int) $produto_estoque['quantidade'];

            if ($quantidade_estoque >= $nova_quantidade) {
                $atualiza_carrinho = $cn->prepare("UPDATE tbl_carrinho SET quantidade = '$nova_quantidade' WHERE usuario_id = '$id_usuario' AND produto_id = '$produto_id'");
                $atualiza_carrinho->execute();
            }
        }
    }
}

header("location:../../../app/pages/carrinho/cart.php#produtosCarrinho");
exit();
?>

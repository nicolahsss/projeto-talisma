<?php
session_start();

require '../../config/conexao.php';

if(isset($_GET['idProd'])){
    $produto_id = $_GET['idProd'];
    $id_usuario = $_SESSION['ID'];

    $remove_produto = $cn->prepare("DELETE FROM tbl_carrinho WHERE usuario_id = '$id_usuario' AND produto_id = '$produto_id'");
    $remove_produto->execute();
}

header("location:../../../app/pages/carrinho/cart.php#produtosCarrinho");
exit();

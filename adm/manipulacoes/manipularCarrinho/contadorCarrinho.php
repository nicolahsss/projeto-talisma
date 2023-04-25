<?php

if(isset($_SESSION['ID'])){
$idUsuario = $_SESSION['ID'];

// Consulta SQL
$sql = "SELECT SUM(quantidade) AS quantidade_produtos FROM tbl_carrinho WHERE usuario_id = :id_usuario";
$stmt = $cn->prepare($sql);
$stmt->bindValue(":id_usuario", $idUsuario);
$stmt->execute();

// Recupera a quantidade de produtos
$quantidade_produtos = (int) $stmt->fetchColumn();
}
<?php
session_start();
require '../../config/conexao.php';
require '../../manipulacoes/manipularCarrinho/contadorCarrinho.php';

if(!isset($_SESSION['ID']) || empty($_SESSION['ID'])) {
    header('location:../../../app/pages/login/loginUser.php');
}

$usuario_id = $_POST['numberiduser'];
$produto_id = $_POST['numberprodutoid'];
$quantidade_produto = $_POST['numberquantidade'];

try {

    // Verificação se o produto já existe no carrinho do usuário
    $stmt = $cn->prepare("SELECT * FROM tbl_carrinho WHERE usuario_id=:usuario_id AND produto_id=:produto_id");
    $stmt->bindParam(':usuario_id', $usuario_id);
    $stmt->bindParam(':produto_id', $produto_id);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // O produto já existe no carrinho do usuário, então atualiza a quantidade
        $row = $stmt->fetch();
        $quantidade_produto += $row['quantidade'];
    
        // Atualização da quantidade e do subtotal
        $stmt = $cn->prepare("UPDATE tbl_carrinho SET quantidade=:quantidade_produto WHERE usuario_id=:usuario_id AND produto_id=:produto_id");
        $stmt->bindParam(':quantidade_produto', $quantidade_produto);
        $stmt->bindParam(':usuario_id', $usuario_id);
        $stmt->bindParam(':produto_id', $produto_id);
        $stmt->execute();

        $sql = "SELECT SUM(quantidade) AS quantidade_produtos FROM tbl_carrinho WHERE usuario_id = :id_usuario";
        $stmt = $cn->prepare($sql);
        $stmt->bindValue(":id_usuario", $usuario_id);
        $stmt->execute();

        $quantidade_carrinho = (int)$stmt->fetch()['quantidade_produtos'];
        echo $quantidade_carrinho ; 

      } else {
        // O produto não existe no carrinho do usuário, então insere no carrinho
        $stmt = $cn->prepare("INSERT INTO tbl_carrinho (usuario_id, produto_id, quantidade) VALUES (:usuario_id, :produto_id, :quantidade_produto)");
        $stmt->bindParam(':usuario_id', $usuario_id);
        $stmt->bindParam(':produto_id', $produto_id);
        $stmt->bindParam(':quantidade_produto', $quantidade_produto);

        $stmt->execute();

        $sql = "SELECT SUM(quantidade) AS quantidade_produtos FROM tbl_carrinho WHERE usuario_id = :id_usuario";
        $stmt = $cn->prepare($sql);
        $stmt->bindValue(":id_usuario", $usuario_id);
        $stmt->execute();
        
        $quantidade_carrinho = (int)$stmt->fetch()['quantidade_produtos'];
        echo $quantidade_carrinho ; 
    
      }

} catch(PDOException $e) {
  echo "Erro ao inserir os dados: " . $e->getMessage();
}

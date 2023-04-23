<?php
if(!isset($_SESSION['ID'])){
    header("Location:../../app/pages/login/loginUser.php");
}

// Obtém o id do usuário logado
$id_usuario = (int) $_SESSION['ID'];

// Consulta os produtos adicionados ao carrinho pelo usuário logado
$consulta_carrinho = $cn->query("SELECT * FROM tbl_carrinho WHERE usuario_id = '$id_usuario'");

// Array para armazenar os dados dos produtos e quantidades
$dados_carrinho = array();

while($produto_carrinho = $consulta_carrinho->fetch(PDO::FETCH_ASSOC)){
    // Obtém o id do produto adicionado ao carrinho
    $id_produto = (int) $produto_carrinho['produto_id'];

    // Consulta os dados do produto no banco de dados
    $consulta_produto = $cn->query("SELECT * FROM tbl_produto WHERE produto_id = '$id_produto'");
    $dados_produto = $consulta_produto->fetch(PDO::FETCH_ASSOC);

    // Adiciona os dados do produto e quantidade no array
    $dados_carrinho[] = array(
        'produto_id' => $id_produto,
        'imagem' => $dados_produto['imagem'],
        'nome' => $dados_produto['nome'],
        'preco' => $dados_produto['preco_promocional'],
        'quantidade' => $produto_carrinho['quantidade']
    );

    
}

?>

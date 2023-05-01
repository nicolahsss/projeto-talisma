<?php
session_start();
require_once '../../../adm/config/conexao.php';
require_once '../../../adm/manipulacoes/manipularDadosUser/consultaDadosUser.php';
require_once '../../../adm/consultasSQL/consultaProdutosNoCarrinho.php';

if(!isset($_SESSION['ID']) || empty($_SESSION['ID'])){
    header('location:../../../app/pages/login/loginUser.php');
}

$id_usuario = $exibeDadosUserLogado['usuario_id'];
/* echo $id_usuario;
 */

$logradouro = $exibeDadosUserLogado['nome_rua'];
$numeroCasa = $exibeDadosUserLogado['num_casa'];
$nomeBairro = $exibeDadosUserLogado['nome_bairro'];
$numeroCep = $exibeDadosUserLogado['cep'];
$cidade = $exibeDadosUserLogado['cidade'];
$estado = $exibeDadosUserLogado['estado'];
$pais = $exibeDadosUserLogado['pais'];
$tipoEndereco = 'Residencial';
$valorTotal = $_POST['totalpedido'];
$formaDepagamento = 'NÃO FINALIZADO';
$statusPagamento = 'PENDENTE';
$codigoRastreio = 'HS783J90';
$statusPedido = 'PENDENTE';

$removePonto = ".";
$valorTotal = str_replace($removePonto, '', $valorTotal);
$removeVirgula = ",";
$valorTotal = str_replace($removeVirgula, '.', $valorTotal);

try{


    
    $inserirNatabelaPedidos = $cn->query("INSERT INTO tbl_pedido (usuario_id, logradouro, num_casa, nome_bairro, num_cep, cidade, estado, pais, tipo_endereco, valor_total, forma_pagamento, status_pagamento, codigo_rastreio, status_pedido) 
    VALUES ('$id_usuario','$logradouro','$numeroCasa','$nomeBairro','$numeroCep','$cidade','$estado','$pais','$tipoEndereco','$valorTotal','$formaDepagamento','$statusPagamento','$codigoRastreio','$statusPedido')");
    
    

    
    // Obter o último ID de pedido do usuário logado
    $consultaIdPedido = $cn->prepare("SELECT MAX(pedido_id) AS last_id FROM tbl_pedido WHERE usuario_id = ?");
    $consultaIdPedido->execute([$id_usuario]);
    $exibeIDpedido = $consultaIdPedido->fetch(PDO::FETCH_ASSOC);
    $ultimoIdPedido = $exibeIDpedido['last_id'];

    // Inserir registros na tabela tbl_pedido_item
    $inserirProdutosPedido = $cn->prepare("INSERT INTO tbl_pedido_item (pedido_id, produto_id, quantidade, preco_unitario) 
    VALUES (?, ?, ?, ?)");

    foreach ($dados_carrinho as $pedidoItem) {
        $produtoId = $pedidoItem['produto_id'];
        $quantidadeProduto = $pedidoItem['quantidade'];
        $precoUnitario = $pedidoItem['preco'];
        
        $inserirProdutosPedido->execute([$ultimoIdPedido, $produtoId, $quantidadeProduto, $precoUnitario]);
    }

    // Verificar se a consulta SQL foi executada com sucesso
    if ($inserirProdutosPedido->rowCount() > 0) {
        header('location:../checkout/checkout.php');
    } else {
        // A consulta SQL falhou, fazer algo para lidar com o erro
    }


header('location:../checkout/checkout.php');

}catch (PDOException $e){


    echo 'Erro'.$e;

}
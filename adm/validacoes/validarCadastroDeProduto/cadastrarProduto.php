<?php
session_start();
require '../../config/conexao.php';

$nomeProduto = $_POST['nomeproduto'];
$codigoDeBarras = $_POST['codigodebarras'];
$qantidadeEmEstoque = $_POST['quantidadeemestoque'];
$categoriaProduto = $_POST['categoriadoproduto'];
$descricaoProduto = $_POST['descricaodoproduto'];

$imagemPrincipalProduto = $_FILES['imagemprincipaldoproduto'];

$imagemDoisProduto = $_FILES['imagemdoisproduto'];
$imagemTresProduto = $_FILES['imagemtresproduto'];
$imagemQuatroProduto = $_FILES['imagemquatroproduto'];

$custoProduto = $_POST['custoproduto'];
$valorProduto = $_POST['precoproduto'];
$valorPromocionalProduto = $_POST['precopromocional'];


echo '<br>';
print_r($nomeProduto);
echo '<br>';
print_r($codigoDeBarras);
echo '<br>';
print_r($qantidadeEmEstoque);
echo '<br>';
print_r($categoriaProduto);
echo '<br>';
print_r($descricaoProduto);
echo '<br>';
print_r($imagemPrincipalProduto);
echo '<br>';
print_r($imagemDoisProduto);
echo '<br>';
print_r($imagemTresProduto);
echo '<br>';
print_r($imagemQuatroProduto);
echo '<br>';
print_r($custoProduto);
echo '<br>';
print_r($valorProduto);
echo '<br>';
print_r($valorPromocionalProduto);
echo '<br>';

try {

} catch (Exception $e){

}
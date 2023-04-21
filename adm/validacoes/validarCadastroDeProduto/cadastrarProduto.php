<?php
session_start();
require '../../config/conexao.php';

$nomeProduto = $_POST['nomeproduto'];
$codigoDeBarras = $_POST['codigodebarras'];
$qantidadeEmEstoque = $_POST['quantidadeemestoque'];
$categoriaProduto = $_POST['categoriadoproduto'];
$descricaoProduto = $_POST['descricaodoproduto'];

$imagemPrincipalProduto = $_FILES['imagemprincipaldoproduto'];





$custoProduto = $_POST['custoproduto'];
$valorProduto = $_POST['precoproduto'];
$valorPromocionalProduto = $_POST['precopromocional'];

$texto_html = nl2br($descricaoProduto);

echo '<br>';
print_r($nomeProduto);
echo '<br>';
print_r($codigoDeBarras);
echo '<br>';
print_r($qantidadeEmEstoque);
echo '<br>';
print_r($categoriaProduto);
echo '<br>';
print_r($texto_html);
echo '<br>';
print_r($imagemPrincipalProduto);
echo '<br>';

if (empty($_FILES['imagemdoisproduto']['name'])) {
    echo "Imagem 2 vazia";
  } else {
    $imagemDoisProduto = $_FILES['imagemdoisproduto'];
    echo '<br>';
    print_r($imagemDoisProduto);
    echo '<br>';
  }
  if (empty($_FILES['imagemtresproduto']['name'])) {
    echo "Imagem tres vazia";
  } else {
    $imagemTresProduto = $_FILES['imagemtresproduto'];
    echo '<br>';
    print_r($imagemTresProduto);
    echo '<br>';
  }
  
  if (empty($_FILES['imagemquatroproduto']['name'])) {
    echo "Imagem quatro vazia";
  } else {
    $imagemQuatroProduto = $_FILES['imagemquatroproduto'];
    echo '<br>';
    print_r($imagemQuatroProduto);
    echo '<br>';
  }
  
echo '<br>';

if(!empty($_POST['cores'])){
    $cores = $_POST['cores'];
print_r($cores);
}else{
    $cores = 'Não';
    print_r($cores);
}

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
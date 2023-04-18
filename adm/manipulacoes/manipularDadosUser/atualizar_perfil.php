<?php
session_start();

require '../../config/conexao.php';

$usuario_id = $_SESSION["ID"];

$nome = $_POST['atualizanome'];

$sobrenome = $_POST['atualizasobrenome'];
$tipo_cadastro = $_POST['atualizatipocadastro'];
$cpf = $_POST['atualizacpf'];
$email = $_POST['atualizaemail'];
$genero = $_POST['atualizagenero'];
$senha = $_POST['atualizasenha'];
$telefone = $_POST['atualizatelefone'];
$pais = $_POST['atualizapais'];
$nome_rua = $_POST['atualizanomerua'];
$numero_casa = $_POST['atualizanumerocasa'];
$nome_bairro = ['atualizanomebairro'];
$cidade = $_POST['atualizacidade'];
$estado = $_POST['atualizaestado'];
$cep = $_POST['atualizacep'];

try {
$atualizarDadosUser = $cn->query("UPDATE tbl_usuario SET nome = '$nome', 
sobrenome = '$sobrenome', 
tipo_cadastro = '$tipo_cadastro', 
num_cpf = '$cpf', 
email = '$email',  
genero = '$genero',
senha = '$senha',
telefone = '$telefone',
pais = '$pais',
nome_rua = '$nome_rua',
num_casa = '$numero_casa',
nome_bairro = '$nome_bairro',
cidade = '$cidade',
estado = '$estado',
cep = '$cep'
WHERE usuario_id = $usuario_id");

header('location:../../../app/pages/perfil/perfilUsuario.php');

} catch (Exception $e) {
    // ação a ser tomada em caso de erro
    header('location:erro.php');
}
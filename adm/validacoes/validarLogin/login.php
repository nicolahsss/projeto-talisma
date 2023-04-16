<?php 

session_start();
require "../../config/conexao.php";

// Validando entrada do usuário
$Vnome = filter_input(INPUT_POST, 'txtnome');
$Vemail = filter_input(INPUT_POST, 'txtemail', FILTER_VALIDATE_EMAIL);
$Vsenha = filter_input(INPUT_POST, 'txtsenha');

// Verificando se a entrada do usuário é válida
if (!$Vnome || !$Vemail || !$Vsenha) {
    header('location: ../app/erro.php');
    exit();
}

// Usando prepared statements
$consulta = $cn->prepare("SELECT usuario_id, nome, email, senha FROM tbl_usuario WHERE email = ? AND nome = ? AND senha = ?");
$consulta->execute([$Vemail, $Vnome, $Vsenha]);
if ($consulta->rowCount() == 1) {
    $exibeUsuario = $consulta->fetch(PDO::FETCH_ASSOC);
    if ($Vsenha === $exibeUsuario['senha']) {
        // LimitANDo o acesso ao arquivo
        $_SESSION["ID"] = $exibeUsuario["usuario_id"];
        header('location: ../../../public/index.php');
        exit();
    }
}

header('location: ../app/erro.php');
exit();

<?php
if(isset($_SESSION['ID'])){
    $usuarioId = $_SESSION['ID'];

    // Consulta para exibir todos os dados da tabela usuario
    $consultaTodosOsDadosTabUser = $cn->query("SELECT * FROM tbl_usuario");
    $exibeTodosOsDadosTabUser = $consultaTodosOsDadosTabUser->fetch(PDO::FETCH_ASSOC);
    
    // Consulta para exibir dados do usuario logado
    $consultaDadosUserLogado = $cn->query("SELECT * FROM tbl_usuario WHERE usuario_id = $usuarioId");
    $exibeDadosUserLogado = $consultaDadosUserLogado->fetch(PDO::FETCH_ASSOC);
}



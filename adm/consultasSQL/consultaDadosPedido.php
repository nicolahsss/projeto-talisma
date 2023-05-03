<?php

$id_ususario = $_SESSION['ID'];

$consultaDadosPedido = $cn->query("SELECT * FROM tbl_pedido WHERE usuario_id = '$id_ususario' AND forma_pagamento = 'NÃO FINALIZADO'");

$exibeDadosPedido = $consultaDadosPedido->fetch(PDO::FETCH_ASSOC);
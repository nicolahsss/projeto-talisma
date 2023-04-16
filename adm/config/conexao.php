<?php 

    $servidor ="localhost";
    $usuario ="root";
    $senha ="1exagon1@";
    $banco ="banco_de_testes";

    $cn = new PDO("mysql:host=$servidor;port=3307;dbname=$banco", $usuario, $senha);

?>

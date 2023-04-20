<?php
 $consultaDadosDosProdutos = $cn->query("SELECT * FROM tbl_produto");
 $exibeDadosDosProdutos = $consultaDadosDosProdutos->fetch(PDO::FETCH_ASSOC);
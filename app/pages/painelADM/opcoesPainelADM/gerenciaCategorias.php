<?php
/* session_start();

  if(!isset($_SESSION['ID']) || empty($_SESSION['ID'])){
    header('location:../../pages/login/loginUser.php');
  }

  require '../../../adm/config/conexao.php';
  require '../../../adm/manipulacoes/manipularDadosUser/consultaDadosUser.php';
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title>Talisma Mat. p/ Construção, Marmoraria e Vidraçaria</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Talisma materiais para contrução" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="../../../public/assets/img/img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />


    <!-- Libraries Stylesheet -->
    <link href="../../../public/assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="../../../public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../public/assets/css/style.css" rel="stylesheet" />

    <!-- Link para css exclusivo da pagina-->
    <link rel="stylesheet" href="painelADM.css">
</head>

  <body>

    <div class="container-menu">
        <div class="menu-sidebar">
            <div class="row" style="height:52px; display: flex; justify-content:center; margin:1rem 0;">

                <h6 class="col-sm-12" style="display: flex; justify-content:center; align-items:center;">Gerenciar Categorias</h6>
            </div>

            <ul id="ulmenu">
                <li><a href="#" data-ir="opcoesPainelADM/opcoesGerenciaCategorias/cadastrarCategorias">Cadastrar Categorias</a></li>
                <li><a href="#" data-ir="opcoesPainelADM/opcoesGerenciaCategorias/deletarCategorias">Deletar Categorias</a></li>
                <li><a href="#" data-ir="opcoesPainelADM/opcoesGerenciaCategorias/editarCategorias">Editar Categorias</a></li>
                <li><a href="#" data-ir="opcoesPainelADM/opcoesGerenciaCategorias/listarCategorias">Listar Categorias</a></li>
                <li><a href="../../../public/index.php">Voltar</a></li>
            </ul>
        </div>
        <div class="container content" id="exibir-conteudo">

        </div>
        <div id="notification" class="notification"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(function () {
            $("#ulmenu li a").click(function (e) {
            let oi = $(this).data('ir');

            $.ajax({
                url: oi + '.php',
                success: function (html) {
                $("#exibir-conteudo").html(html);
                }
            });
            });
        })
    </script>



    <?php
/*         include '../../components/footer/footer.php';
 */
    ?>

  </body>
</html>

<?php
session_start();

  if(!isset($_SESSION['ID']) || empty($_SESSION['ID'])){
    header('location:../../pages/login/loginUser.php');
  }

  require '../../../adm/config/conexao.php';
  require '../../../adm/manipulacoes/manipularDadosUser/consultaDadosUser.php';

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

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="../../../public/assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="../../../public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../public/assets/css/style.css" rel="stylesheet" />

    <!-- Link para css exclusivo da pagina-->
    <link rel="stylesheet" href="perfilUsuario.css">
</head>

  <body>
    <!-- Navbar Start -->
    <div class="container-fluid bg-blue mb-30" style="margin-bottom: 0 !important;">
      <div class="row px-xl-5" style="padding-left: 0 !important;">
        <div class="col-lg-2 d-lg-block" style="padding-left: 0 !important;">
          <a
            class="btn d-flex align-items-center justify-content-between w-100"
            data-toggle="collapse"
            href="#navbar-vertical"
            style="height: 65px; padding: 0; background-color:#fff; border-radius:0 !important;"
          >
          <div style="display:flex; justify-content:center; align-items:center; width:100%;">
            <img style="width: 50px; margin-left:-25px;" src="../../../public/assets/img/logo.png" alt="">
              <h6 style="margin-left: 1rem;">Talismã</h6>


          </div>
          </a>

        </div>
        <div class="col-lg-9">
          <nav
            class="navbar navbar-expand-lg bg-blue navbar-dark py-3 py-lg-0 px-0"
          >
            <a href="../public/index.php" class="text-decoration-none d-block d-lg-none">
              <span class="h1 text-uppercase text-dark bg-light px-2"
                ><img src="../public/assets/img/logo.png" alt="" style="width: 100px"
              /></span>
              <span
                class="h1 text-uppercase text-light bg-primary px-2 ml-n1"
                style="color: blue !important"
                >TALISMÃ</span
              >
            </a>
            <button
              type="button"
              class="navbar-toggler"
              data-toggle="collapse"
              data-target="#navbarCollapse"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="collapse navbar-collapse justify-content-between"
              id="navbarCollapse"
            >
              <div class="navbar-nav mr-auto py-0">
                <a href="../public/index.php" class="nav-item nav-link" style="padding: 20px 10px;color: #F5F5F5;outline: none;">Home</a>
                <a href="../app/pages/produtos/shop.php" class="nav-item nav-link" style="padding: 20px 10px;color: #F5F5F5;outline: none;">Shop</a>
                <a href="../app/pages/detalhes/detail.php" class="nav-item nav-link" style="padding: 20px 10px;color: #F5F5F5;outline: none;">Shop Detail</a>
                <a href="../app/pages/contato/contact.php" class="nav-item nav-link" style="padding: 20px 10px;color: #F5F5F5;outline: none;">Contact</a>
              </div>
              <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                <a href="" class="btn px-0">
                  <i class="fas fa-heart text-primary" style="color: #FFD333 !important;"></i>
                  <span
                    class="badge text-secondary border border-secondary rounded-circle"
                    style="padding-bottom: 2px; color:#F5F5F5 !important; border-color: #6c757d!important;"
                    >0</span
                  >
                </a>
                <a href="../app/pages/carrinho/cart.php" class="btn px-0 ml-3">
                  <i class="fas fa-shopping-cart text-primary" style="color: #FFD333 !important;"></i>
                  <span
                    class="badge text-secondary border border-secondary rounded-circle"
                    style="padding-bottom: 2px; color:#F5F5F5 !important; border-color: #6c757d!important;"
                    >0</span
                  >
                </a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- Navbar End -->


        
    <div class="container-menu">
        <div class="menu-sidebar">
            <div class="row" style="height:52px; display: flex; justify-content:center; margin:2rem 0;">
                <div class="col-sm-3"><img src="../../../public/assets/img/perfil.jpg" class="imgPerfil" alt=""></div>
                <h6 class="col-sm-9" style="display: flex; justify-content:center; align-items:center;"><?php echo $exibeDadosUserLogado['nome'];?></h6>
            </div>

            <ul id="ulmenu">
                <li><a href="#" data-ir="opcoesMenu/compras">Compras</a></li>
                <li><a href="#" data-ir="opcoesMenu/previwCarrinho">Meu carrinho</a></li>
                <li><a href="#" data-ir="opcoesMenu/meusDesejos">Lista de Desejos</a></li>
                <li><a href="#" data-ir="opcoesMenu/minhasAtividades">Minha Atividade</a></li>
                <li><a href="#" data-ir="opcoesMenu/meusDados">Meus Dados</a></li>
                <li><a href="#" data-ir="opcoesMenu/meusBeneficios">Benefícios</a></li>
                <li><a href="#" data-ir="opcoesMenu/suportPerfil">Suporte</a></li>
                <li><a href="../../../adm/validacoes/validarLogin/sair.php" data-ir="">Sair</a></li>
            </ul>
        </div>
        <div class="content" id="pagina">

        </div>
        <div id="notification" class="notification"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script>
        $(function () {
            $("#ulmenu li a").click(function (e) {
            let oi = $(this).data('ir');

            $.ajax({
                url: oi + '.php',
                success: function (html) {
                $("#pagina").html(html);
                }
            });
            });
        })
    </script>



    <?php
        include '../../components/footer/footer.php';

    ?>

  </body>
</html>

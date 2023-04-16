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
  </head>

  <body>
    <!-- Topbar Start -->
    <div class="container-fluid">
      <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
          <div class="d-inline-flex align-items-center h-100">
            <a class="text-body mr-3" href="">About</a>
            <a class="text-body mr-3" href="">Contact</a>
            <a class="text-body mr-3" href="">Help</a>
            <a class="text-body mr-3" href="">FAQs</a>
          </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
          <div class="d-inline-flex align-items-center">
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-sm btn-light dropdown-toggle"
                data-toggle="dropdown"
              >
                My Account
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="loginUser.php">
                  <button class="dropdown-item" type="button">Sign in</button>
                </a>
                <a href="../cadastroUser/cadastroUser.php">
                  <button class="dropdown-item" type="button">Sign up</button>
                </a>
              </div>
            </div>

            <div class="btn-group">
              <button
                type="button"
                class="btn btn-sm btn-light dropdown-toggle"
                data-toggle="dropdown"
              >
                EN
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button">FR</button>
                <button class="dropdown-item" type="button">AR</button>
                <button class="dropdown-item" type="button">RU</button>
              </div>
            </div>
          </div>
          <div class="d-inline-flex align-items-center d-block d-lg-none">
            <a href="" class="btn px-0 ml-2">
              <i class="fas fa-heart text-dark"></i>
              <span
                class="badge text-dark border border-dark rounded-circle"
                style="padding-bottom: 2px"
                >0</span
              >
            </a>
            <a href="../app/pages/carrinho/cart.php" class="btn px-0 ml-2">
              <i class="fas fa-shopping-cart text-dark"></i>
              <span
                class="badge text-dark border border-dark rounded-circle"
                style="padding-bottom: 2px"
                >0</span
              >
            </a>
          </div>
        </div>
      </div>
      <div
        class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex"
      >
        <div class="col-lg-12">
          <a href="../../../public/index.php" class="text-decoration-none">
            <span class="h1 text-uppercase text-dark px-2 ml-n1"  style="display:flex; justify-content:center;"
              ><img src="../../../public/assets/img/logo.png" alt="" style="width: 100px"
            /></span>
            <span
              class="h1 text-uppercase text-primaryy px-2"
              style="color: blue !important; display:flex; justify-content:center;"
              >TALISMÃ</span
            >
          </a>
        </div>
        <div class="col-lg-12" style="display:flex; justify-content:center;">
          <h5 class="m-0">Login</h5>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <div style="display:flex; justify-content:center;">
        <div style="width: 400px; padding-top: 1rem;">
            <form class="form-group">
                <label for="username" class="form-label">Nome de usuário:</label>
                <input type="text" id="username" name="username" class="form-control"><br>

                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control"><br>

                <label for="password" class="form-label">Senha:</label>
                <input type="password" id="password" name="password" class="form-control"><br>

                <p class="mt-3" style="text-align: center; margin-top:0 !important;">Esqueceu a sua senha? <a href="pagina_de_cadastro.html" style="color: blue;">Recuperar senha</a>.</p>

                <button type="submit" class="btn btn-primary btn-block" style="background-color:blue; color:#fff !important; border:none; font-weight:bold;">Entrar</button>
            </form>

            <p class="mt-3" style="text-align: center;">Ainda não é cadastrado? <a href="pagina_de_cadastro.html" style="color: blue;">Cadastre-se aqui</a>.</p>
        </div>

    </div>

    <?php
        include '../../components/footer/footer.php';
    ?>

  </body>
</html>

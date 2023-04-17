<?php
session_start();

  require '../adm/config/conexao.php';
  require '../adm/manipulacoes/manipularDadosUser/consultaDadosUser.php';

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
    <link href="../public/assets/img/img/favicon.ico" rel="icon" />

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
    <link href="../public/assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="../public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../public/assets/css/style.css" rel="stylesheet" />
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
            <?php if(!isset($_SESSION['ID'])) { ?>
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-sm btn-light dropdown-toggle"
                data-toggle="dropdown"
              >
                My Account
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="../app/pages/login/loginUser.php">
                  <button class="dropdown-item" type="button">Sign in</button>
                </a>
                <a href="../app/pages/cadastroUser/cadastroUser.php">
                  <button class="dropdown-item" type="button">Sign up</button>
                </a>
              </div>
            </div>
            <?php } else { ?>
              <div class="btn-group">
              <button
                type="button"
                class="btn btn-sm btn-light dropdown-toggle"
                data-toggle="dropdown"
              >
                <?php echo $exibeDadosUserLogado['nome'];?>
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="../app/pages/perfil/perfilUsuario.php">
                  <button class="dropdown-item" type="button">Minha conta</button>
                </a>
                <a href="../adm/validacoes/validarLogin/sair.php">
                  <button class="dropdown-item" type="button">Sair</button>
                </a>
              </div>
            </div>

                <?php } ?>

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
        <div class="col-lg-4">
          <a href="../public/index.php" class="text-decoration-none">
            <span class="h1 text-uppercase text-dark px-2 ml-n1"
              ><img src="../public/assets/img/logo.png" alt="" style="width: 100px"
            /></span>
            <span
              class="h1 text-uppercase text-primaryy px-2"
              style="color: blue !important"
              >TALISMÃ</span
            >
          </a>
        </div>
        <div class="col-lg-4 col-6 text-left">
          <form action="">
            <div class="input-group">
              <input
                type="text"
                class="form-control"
                placeholder="Search for products"
              />
              <div class="input-group-append">
                <span class="input-group-text bg-transparent text-primary">
                  <i class="fa fa-search"></i>
                </span>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-4 col-6 text-right">
          <p class="m-0">Customer Service</p>
          <h5 class="m-0">+012 345 6789</h5>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid bg-blue mb-30">
      <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
          <a
            class="btn d-flex align-items-center justify-content-between bg-primary w-100"
            data-toggle="collapse"
            href="#navbar-vertical"
            style="height: 65px; padding: 0 30px"
          >
            <h6 class="text-dark m-0">
              <i class="fa fa-bars mr-2"></i>Categories
            </h6>
            <i class="fa fa-angle-down text-dark"></i>
          </a>
          <nav
            class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light"
            id="navbar-vertical"
            style="width: calc(100% - 30px); z-index: 999"
          >
            <div class="navbar-nav w-100">
              <div class="nav-item dropdown dropright">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-toggle="dropdown"
                  >Dresses <i class="fa fa-angle-right float-right mt-1"></i
                ></a>
                <div
                  class="dropdown-menu position-absolute rounded-0 border-0 m-0"
                >
                  <a href="" class="dropdown-item">Men's Dresses</a>
                  <a href="" class="dropdown-item">Women's Dresses</a>
                  <a href="" class="dropdown-item">Baby's Dresses</a>
                </div>
              </div>
              <a href="" class="nav-item nav-link">Shirts</a>
              <a href="" class="nav-item nav-link">Jeans</a>
              <a href="" class="nav-item nav-link">Swimwear</a>
              <a href="" class="nav-item nav-link">Sleepwear</a>
              <a href="" class="nav-item nav-link">Sportswear</a>
              <a href="" class="nav-item nav-link">Jumpsuits</a>
              <a href="" class="nav-item nav-link">Blazers</a>
              <a href="" class="nav-item nav-link">Jackets</a>
              <a href="" class="nav-item nav-link">Shoes</a>
            </div>
          </nav>
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
                <a href="../public/index.php" class="nav-item nav-link active">Home</a>
                <a href="../app/pages/produtos/shop.php" class="nav-item nav-link">Shop</a>
                <a href="../app/pages/detalhes/detail.php" class="nav-item nav-link">Shop Detail</a>
                <div class="nav-item dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    >Pages <i class="fa fa-angle-down mt-1"></i
                  ></a>
                  <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                    <a href="../app/pages/carrinho/cart.php" class="dropdown-item">Shopping Cart</a>
                    <a href="../app/pages/checkout/checkout.php" class="dropdown-item">Checkout</a>
                  </div>
                </div>
                <a href="../app/pages/contato/contact.php" class="nav-item nav-link">Contact</a>
              </div>
              <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                <a href="" class="btn px-0">
                  <i class="fas fa-heart text-primary"></i>
                  <span
                    class="badge text-secondary border border-secondary rounded-circle"
                    style="padding-bottom: 2px"
                    >0</span
                  >
                </a>
                <a href="../app/pages/carrinho/cart.php" class="btn px-0 ml-3">
                  <i class="fas fa-shopping-cart text-primary"></i>
                  <span
                    class="badge text-secondary border border-secondary rounded-circle"
                    style="padding-bottom: 2px"
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

    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
      <div class="row px-xl-5">
        <div class="col-lg-8">
          <div
            id="header-carousel"
            class="carousel slide carousel-fade mb-30 mb-lg-0"
            data-ride="carousel"
          >
            <ol class="carousel-indicators">
              <li
                data-target="#header-carousel"
                data-slide-to="0"
                class="active"
              ></li>
              <li data-target="#header-carousel" data-slide-to="1"></li>
              <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div
                class="carousel-item position-relative active"
                style="height: 430px"
              >
                <img
                  class="position-absolute w-100 h-100"
                  src="../public/assets/img/construcao.jpg"
                  style="object-fit: cover"
                />
                <div
                  class="carousel-caption d-flex flex-column align-items-center justify-content-center"
                >
                  <div class="p-3" style="max-width: 700px">
                    <h1
                      class="display-4 text-white mb-3 animate__animated animate__fadeInDown"
                    >
                      Material para Contrução
                    </h1>
                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                      Lorem rebum magna amet lorem magna erat diam stet. Sadips
                      duo stet amet amet ndiam elitr ipsum diam
                    </p>
                    <a
                      class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                      href="#"
                      >Shop Now</a
                    >
                  </div>
                </div>
              </div>
              <div
                class="carousel-item position-relative"
                style="height: 430px"
              >
                <img
                  class="position-absolute w-100 h-100"
                  src="../public/assets/img/pintura03.jpg"
                  style="object-fit: cover"
                />
                <div
                  class="carousel-caption d-flex flex-column align-items-center justify-content-center"
                >
                  <div class="p-3" style="max-width: 700px">
                    <h1
                      class="display-4 text-white mb-3 animate__animated animate__fadeInDown"
                    >
                      Pintura e Acabamento
                    </h1>
                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                      Lorem rebum magna amet lorem magna erat diam stet. Sadips
                      duo stet amet amet ndiam elitr ipsum diam
                    </p>
                    <a
                      class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                      href="#"
                      >Shop Now</a
                    >
                  </div>
                </div>
              </div>
              <div
                class="carousel-item position-relative"
                style="height: 430px"
              >
                <img
                  class="position-absolute w-100 h-100"
                  src="../public/assets/img/iluminacao.png"
                  style="object-fit: cover"
                />
                <div
                  class="carousel-caption d-flex flex-column align-items-center justify-content-center"
                >
                  <div class="p-3" style="max-width: 700px">
                    <h1
                      class="display-4 text-white mb-3 animate__animated animate__fadeInDown"
                    >
                      Iluminação e Decoração
                    </h1>
                    <p class="mx-md-5 px-5 animate__animated animate__bounceIn">
                      Lorem rebum magna amet lorem magna erat diam stet. Sadips
                      duo stet amet amet ndiam elitr ipsum diam
                    </p>
                    <a
                      class="btn btn-outline-light py-2 px-4 mt-3 animate__animated animate__fadeInUp"
                      href="#"
                      >Shop Now</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="product-offer mb-30" style="height: 200px">
            <img class="img-fluid" src="../public/assets/img/marmoraria.jpg" alt="" />
            <div class="offer-text">
              <h6 class="text-white text-uppercase">Save 20%</h6>
              <h2 class="text-white mb-3">Marmoraria</h2>
              <h4 class="text-white mb-3">Special Offer</h4>
              <a href="" class="btn btn-primary">Shop Now</a>
            </div>
          </div>
          <div class="product-offer mb-30" style="height: 200px">
            <img class="img-fluid" src="../public/assets/img/vidracaria.jpg" alt="" />
            <div class="offer-text">
              <h6 class="text-white text-uppercase">Save 20%</h6>
              <h2 class="text-white mb-3">Vidraçaria</h2>
              <h3 class="text-white mb-3">Special Offer</h3>
              <a href="" class="btn btn-primary">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- Featured Start -->
    <div class="container-fluid pt-5">
      <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
          <div
            class="d-flex align-items-center bg-light mb-4"
            style="padding: 30px"
          >
            <h1 class="fa fa-check text-primaryy m-0 mr-3"></h1>
            <h5 class="font-weight-semi-bold m-0">Quality Product</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
          <div
            class="d-flex align-items-center bg-light mb-4"
            style="padding: 30px"
          >
            <h1 class="fa fa-shipping-fast text-primaryy m-0 mr-2"></h1>
            <h5 class="font-weight-semi-bold m-0">Free Shipping</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
          <div
            class="d-flex align-items-center bg-light mb-4"
            style="padding: 30px"
          >
            <h1 class="fas fa-exchange-alt text-primaryy m-0 mr-3"></h1>
            <h5 class="font-weight-semi-bold m-0">14-Day Return</h5>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
          <div
            class="d-flex align-items-center bg-light mb-4"
            style="padding: 30px"
          >
            <h1 class="fa fa-phone-volume text-primaryy m-0 mr-3"></h1>
            <h5 class="font-weight-semi-bold m-0">24/7 Support</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- Featured End -->

    <!-- Categories Start -->
    <div class="container-fluid pt-5">
      <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Categorias</span>
      </h2>
      <div class="row px-xl-5 pb-3">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
            <div class="cat-item d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width: 100px; height: 100px">
                <img class="img-fluid" src="../public/assets/img/placeholder.jpg" alt="" />
              </div>
              <div class="flex-fill pl-3">
                <h6Nome da categoria/h6>
                <small class="text-body">100 Products</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width: 100px; height: 100px">
                <img class="img-fluid" src="../public/assets/img/placeholder.jpg" alt="" />
              </div>
              <div class="flex-fill pl-3">
                <h6>Nome da categoria</h6>
                <small class="text-body">100 Products</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width: 100px; height: 100px">
                <img class="img-fluid" src="../public/assets/img/placeholder.jpg" alt="" />
              </div>
              <div class="flex-fill pl-3">
                <h6>Nome da categoria</h6>
                <small class="text-body">100 Products</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width: 100px; height: 100px">
                <img class="img-fluid" src="../public/assets/img/placeholder.jpg" alt="" />
              </div>
              <div class="flex-fill pl-3">
                <h6>Nome da categoria</h6>
                <small class="text-body">100 Products</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width: 100px; height: 100px">
                <img class="img-fluid" src="../public/assets/img/placeholder.jpg" alt="" />
              </div>
              <div class="flex-fill pl-3">
                <h6>Nome da categoria</h6>
                <small class="text-body">100 Products</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width: 100px; height: 100px">
                <img class="img-fluid" src="../public/assets/img/placeholder.jpg" alt="" />
              </div>
              <div class="flex-fill pl-3">
                <h6>Nome da categoria</h6>
                <small class="text-body">100 Products</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width: 100px; height: 100px">
                <img class="img-fluid" src="../public/assets/img/placeholder.jpg" alt="" />
              </div>
              <div class="flex-fill pl-3">
                <h6>Nome da categoria</h6>
                <small class="text-body">100 Products</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width: 100px; height: 100px">
                <img class="img-fluid" src="../public/assets/img/placeholder.jpg" alt="" />
              </div>
              <div class="flex-fill pl-3">
                <h6>Nome da categoria</h6>
                <small class="text-body">100 Products</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width: 100px; height: 100px">
                <img class="img-fluid" src="../public/assets/img/placeholder.jpg" alt="" />
              </div>
              <div class="flex-fill pl-3">
                <h6>Nome da categoria</h6>
                <small class="text-body">100 Products</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width: 100px; height: 100px">
                <img class="img-fluid" src="../public/assets/img/placeholder.jpg" alt="" />
              </div>
              <div class="flex-fill pl-3">
                <h6>Nome da categoria</h6>
                <small class="text-body">100 Products</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width: 100px; height: 100px">
                <img class="img-fluid" src="../public/assets/img/placeholder.jpg" alt="" />
              </div>
              <div class="flex-fill pl-3">
                <h6>Nome da categoria</h6>
                <small class="text-body">100 Products</small>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <a class="text-decoration-none" href="">
            <div class="cat-item img-zoom d-flex align-items-center mb-4">
              <div class="overflow-hidden" style="width: 100px; height: 100px">
                <img class="img-fluid" src="../public/assets/img/placeholder.jpg" alt="" />
              </div>
              <div class="flex-fill pl-3">
                <h6>Nome da categoria</h6>
                <small class="text-body">100 Products</small>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
    <!-- Categories End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
      <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Featured Products</span>
      </h2>
      <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <form action="" method="post">
            <div class="product-item bg-light mb-4">
              <div class="product-img position-relative overflow-hidden">
                <img
                  class="img-fluid w-100"
                  src="../public/assets/img/armario-aj-rorato.jpg"
                  alt=""
                />
                <div class="product-action">
                  <a class="btn btn-outline-dark btn-square" href=""
                    ><i class="fa fa-shopping-cart"></i
                  ></a>
                  <a class="btn btn-outline-dark btn-square" href=""
                    ><i class="far fa-heart"></i
                  ></a>
                  <a class="btn btn-outline-dark btn-square" href=""
                    ><i class="fa fa-sync-alt"></i
                  ></a>
                  <a class="btn btn-outline-dark btn-square" href=""
                    ><i class="fa fa-search"></i
                  ></a>
                </div>
              </div>
              <div class="text-center py-4">
                <a class="h6 text-decoration-none text-truncate" href=""
                  >Product Name Goes Here</a
                >
                <div
                  class="d-flex align-items-center justify-content-center mt-2"
                >
                  <h5>R$ 123.00</h5>
                  <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
                </div>
                <div
                  class="d-flex align-items-center justify-content-center mb-1"
                >
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small class="fa fa-star text-primary mr-1"></small>
                  <small>(99)</small>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="../public/assets/img/lixeira.jpg" alt="" />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star-half-alt text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="../public/assets/img/chuveiro.jpg" alt="" />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star-half-alt text-primary mr-1"></small>
                <small class="far fa-star text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="../public/assets/img/balcao.jpg" alt="" />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="far fa-star text-primary mr-1"></small>
                <small class="far fa-star text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img
                class="img-fluid w-100"
                src="../public/assets/img/serra-circular.jpg"
                alt=""
              />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="../public/assets/img/cuba.jpg" alt="" />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star-half-alt text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="../public/assets/img/caixa-termica.jpg" alt="" />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star-half-alt text-primary mr-1"></small>
                <small class="far fa-star text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="../public/assets/img/spray.jpg" alt="" />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="far fa-star text-primary mr-1"></small>
                <small class="far fa-star text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Products End -->

    <!-- Offer Start -->
    <div class="container-fluid pt-5 pb-3">
      <div class="row px-xl-5">
        <div class="col-md-6">
          <div class="product-offer mb-30" style="height: 300px">
            <img class="img-fluid" src="../public/assets/img/banner-marmore.png" alt="" />
            <div class="offer-text">
              <h6 class="text-white text-uppercase">Desconto de 20%</h6>
              <h2 class="text-white mb-3">Marmores</h2>
              <h4 class="text-white mb-3">Oferta Especial</h4>
              <a href="" class="btn btn-primary">Shop Now</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="product-offer mb-30" style="height: 300px">
            <img class="img-fluid" src="../public/assets/img/banner-vidro.png" alt="" />
            <div class="offer-text">
              <h6 class="text-white text-uppercase">Desconto de 20%</h6>
              <h2 class="text-white mb-3">Vidros</h2>
              <h4 class="text-white mb-3">Oferta Especial</h4>
              <a href="" class="btn btn-primary">Shop Now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Offer End -->

    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
      <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
        <span class="bg-secondary pr-3">Recent Products</span>
      </h2>
      <div class="row px-xl-5">
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="../public/assets/img/cadeira.jpg" alt="" />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="../public/assets/img/esmeril.png" alt="" />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star-half-alt text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="../public/assets/img/caixa.jpg" alt="" />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star-half-alt text-primary mr-1"></small>
                <small class="far fa-star text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img
                class="img-fluid w-100"
                src="../public/assets/img/ESMERILHADEIRA.jpg"
                alt=""
              />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="far fa-star text-primary mr-1"></small>
                <small class="far fa-star text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="../public/assets/img/espuma.png" alt="" />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="../public/assets/img/aplicador.jpg" alt="" />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star-half-alt text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="../public/assets/img/adesivo.png" alt="" />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star-half-alt text-primary mr-1"></small>
                <small class="far fa-star text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
          <div class="product-item bg-light mb-4">
            <div class="product-img position-relative overflow-hidden">
              <img class="img-fluid w-100" src="../public/assets/img/pia.jpg" alt="" />
              <div class="product-action">
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-shopping-cart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="far fa-heart"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-sync-alt"></i
                ></a>
                <a class="btn btn-outline-dark btn-square" href=""
                  ><i class="fa fa-search"></i
                ></a>
              </div>
            </div>
            <div class="text-center py-4">
              <a class="h6 text-decoration-none text-truncate" href=""
                >Product Name Goes Here</a
              >
              <div
                class="d-flex align-items-center justify-content-center mt-2"
              >
                <h5>R$ 123.00</h5>
                <h6 class="text-muted ml-2"><del>R$ 123.00</del></h6>
              </div>
              <div
                class="d-flex align-items-center justify-content-center mb-1"
              >
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="fa fa-star text-primary mr-1"></small>
                <small class="far fa-star text-primary mr-1"></small>
                <small class="far fa-star text-primary mr-1"></small>
                <small>(99)</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Products End -->

    <!-- Vendor Start -->
    <div class="container-fluid py-5">
      <div class="row px-xl-5">
        <div class="col">
          <div class="owl-carousel vendor-carousel">
            <div class="bg-light p-4">
              <img src="../public/assets/img/logo-krona.jpg" alt="" />
            </div>
            <div class="bg-light p-4">
              <img src="../public/assets/img/logo-coral.jpg" alt="" />
            </div>
            <div class="bg-light p-4">
              <img src="../public/assets/img/logo-irwin.jpg" alt="" />
            </div>
            <div class="bg-light p-4">
              <img src="../public/assets/img/logo-tramontina.jpg" alt="" />
            </div>
            <div class="bg-light p-4">
              <img src="../public/assets/img/logo-corfio.jpg" alt="" />
            </div>
            <div class="bg-light p-4">
              <img src="../public/assets/img/logo-orbi.jpg" alt="" />
            </div>
            <div class="bg-light p-4">
              <img src="../public/assets/img/logo-worker.jpg" alt="" />
            </div>
            <div class="bg-light p-4">
              <img src="../public/assets/img/logo-ajrorato.jpg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Vendor End -->

<?php
  require '../app/components/footer/footer.php'
?>  

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"
      ><i class="fa fa-angle-double-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../public/assets/lib/easing/easing.min.js"></script>
    <script src="../public/assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../public/assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="../public/assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../public/assets/js/main.js"></script>
  </body>
</html>

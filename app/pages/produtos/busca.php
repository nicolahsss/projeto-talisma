<?php
session_start();
require '../../../adm/config/conexao.php';
require '../../../adm/manipulacoes/manipularDadosUser/consultaDadosUser.php';
require '../../../adm/consultasSQL/consultaDadosProdutos.php';
require '../../../adm/manipulacoes/manipularCarrinho/contadorCarrinho.php';

$id_user = $_SESSION['ID'];

$pesquisa = $_POST['txtpesquisa'];

/* print_r($pesquisa); */

$buscarProduto = "SELECT * FROM tbl_produto WHERE nome LIKE '%$pesquisa%' OR descricao LIKE '%$pesquisa%'";
$result = $cn->query($buscarProduto); 
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
                <?php 
                echo $exibeDadosUserLogado['nome']; 
                ?>
              </button>
              <?php if($exibeDadosUserLogado['tipo'] === 'COMUM') { ?>
              <div class="dropdown-menu dropdown-menu-right">
                <a href="../app/pages/perfil/perfilUsuario.php">
                  <button class="dropdown-item" type="button">Minha conta</button>
                </a>
                <a href="../adm/validacoes/validarLogin/sair.php">
                  <button class="dropdown-item" type="button">Sair</button>
                </a>
              </div>
              <?php } else { ?>
                <div class="dropdown-menu dropdown-menu-right">
                <a href="../app/pages/painelADM/painelADM.php">
                  <button class="dropdown-item" type="button">Painel ADM</button>
                </a>
                <a href="../app/pages/perfil/perfilUsuario.php">
                  <button class="dropdown-item" type="button">Minha conta</button>
                </a>
                <a href="../adm/validacoes/validarLogin/sair.php">
                  <button class="dropdown-item" type="button">Sair</button>
                </a>
              </div>
              <?php } ?>
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
          <form action="../../../app/pages/produtos/busca.php" id="form-pesquisa" method="post">
            <div class="input-group">
              <input
                type="text"
                class="form-control"
                placeholder="Procurar produtos"
                name="txtpesquisa" id="txtpesquisa"
              />
              <div class="input-group-append">
                <button type="submit" class="input-group-text bg-transparent text-primary">
                  <i class="fa fa-search"></i>
                </button>
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
                <a href="../app/pages/produtos/shop.php" class="nav-item nav-link">Produtos</a>
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
                <a href="../app/pages/contato/contact.php" class="nav-item nav-link">Contato</a>
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
                  <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px" id="qntcontador"
                    ><?php if(isset($_SESSION['ID'])){ echo $quantidade_produtos;} else { echo '0';}?></span
                  >
                </a>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- Navbar End -->

    <div class="resultado" id="resultado">
        <!-- Products Start -->
        <div class="container-fluid pt-5 pb-3">
          <h6 class="section-title position-relative text-uppercase mx-xl-5 mb-4">
            <span class="bg-secondary pr-3">Resultados para "<?php echo $pesquisa;?>"</span>
          </h6>
          <div class="row px-xl-5">
            <?php if($result->rowCount()> 0){ while($exibeProdutosBusca = $result->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
              <form id="form-adicionar-carrinho" class="form-carrinho" action="../adm/manipulacoes/manipularCarrinho/inserirNoCarrinho.php" method="post" enctype="multipart/form-data">
                <input type="number" name="numberiduser" value="<?php echo $exibeDadosUserLogado['usuario_id'];?>" hidden>
                <input type="number" name="numberprodutoid" value="<?php echo $exibeProdutosBusca['produto_id'];?>"  hidden>
                <input type="number" name="numberquantidade" value="1" hidden>
                <div class="product-item bg-light mb-4">
                  <div class="product-img position-relative overflow-hidden">
                    <img
                      class="img-fluid w-100"
                      src="../../../public/assets/img/<?php echo $exibeProdutosBusca['imagem'];?>"
                      alt=""
                    />
                    <div class="product-action">
                      <?php if(isset($_SESSION['ID'])){ if($exibeProdutosBusca['quantidade'] >= 1) { ?>
                      <button type="submit" class="btn btn-outline-dark btn-square"
                        ><i class="fa fa-shopping-cart"></i
                      ></button>
                      <?php }else { ?>
                        <button type="submit" disabled class="btn btn-outline-dark btn-square"
                        ><i class="fa fa-shopping-cart"></i
                        ></button>
                      <?php }}else{  ?>
                        <a href="../app/pages/login/loginUser.php" class="btn btn-outline-dark btn-square"
                        ><i class="fa fa-shopping-cart"></i
                      ></a>
                      <?php } ?>
                      <a class="btn btn-outline-dark btn-square" href=""
                        ><i class="far fa-heart"></i
                      ></a>
                      <a class="btn btn-outline-dark btn-square" href=""
                        ><i class="fa fa-search"></i
                      ></a>
                    </div>
                  </div>
                  <div class="text-center py-4">
                    <a class="h6 text-decoration-none text-truncate" href=""
                      ><?php echo $exibeProdutosBusca['nome'];?></a
                    >
                    <div
                      class="d-flex align-items-center justify-content-center mt-2"
                    >
                      <h5>R$ <?php echo number_format($exibeProdutosBusca['preco_promocional'],2,',','.');?></h5>
                      <h6 class="text-muted ml-2"><del>R$ <?php echo number_format($exibeProdutosBusca['preco'],2,',','.');?></del></h6>
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
            <?php }} ?>
          </div>
        </div>
        <!-- Products End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="../../../public/assets/lib/easing/easing.min.js"></script>
    <script src="../../../public/assets/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="../../../public/assets/mail/jqBootstrapValidation.min.js"></script>
    <script src="../../../public/assets/mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="../../../public/assets/js/main.js"></script>


  </body>
</html>

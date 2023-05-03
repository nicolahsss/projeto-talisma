<?php
session_start();
require '../../../adm/config/conexao.php';
require '../../../adm/manipulacoes/manipularDadosUser/consultaDadosUser.php';
require '../../../adm/consultasSQL/consultaProdutosNoCarrinho.php'; 

if(isset($_SESSION['ID'])){
$usuario_id = (int)$exibeDadosUserLogado['usuario_id'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Talisma Carrinho</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <!-- Favicon -->
    <link href="../../../public/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../../public/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../../public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../public/assets/css/style.css" rel="stylesheet">
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
              ><img src="../../../public/assets/img/logo.png" alt="" style="width: 100px"
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
                <a href="../../../public/index.php" class="nav-item nav-link active">Home</a>
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


    <!-- Breadcrumb Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="../../../public/index.php">Home</a>
                    <a class="breadcrumb-item text-dark" href="../produtos/shop.php">Shop</a>
                    <span class="breadcrumb-item active">Carrinho</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid" id="produtosCarrinho">
      <form action="../checkout/inserirPedido.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="idusuario" value="<?php echo $usuario_id;?>">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Produtos</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                            <th>Remover</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                      <?php 
                      $totalCarrinho = 0;
                      $subTotal = 0;
                      foreach($dados_carrinho as $produto): ?>
                        <tr>
                            <td class="align-middle"><img src="../../../public/assets/img/<?php echo $produto['imagem'];?>" alt="" style="width: 50px;"> <?php echo $produto['nome'];?></td>
                            <input type="text" name="nomeproduto[]" value="<?php echo $produto['nome'];?>" hidden>
                            <input type="number" name="idproduto[]" value="<?php echo $produto['produto_id'];?>" hidden>
                            <input type="number" name="quantidadeproduto[]" value="<?php echo $produto['quantidade'];?>" hidden>
                            <input type="hidden" name="precoproduto[]" value="<?php echo number_format($produto['preco'],2,',','.');?>">
                            <td class="align-middle">R$ <?php echo number_format($produto['preco'],2,',','.');?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <a href="../../../adm/manipulacoes/manipularCarrinho/diminuirProdutoCarrinho.php?idProd=<?php echo $produto['produto_id']; ?>" class="btn btn-sm btn-primary btn-minus" data-id="<?php echo $produto['produto_id']; ?>">
                                        <i class="fa fa-minus"></i>
                                        </a>
                                    </div>
                                    <span class="form-control form-control-sm bg-secondary border-0 text-center"><?php echo $produto['quantidade'];?></span>
                                    <div class="input-group-btn">
                                        <a href="../../../adm/manipulacoes/manipularCarrinho/aumentarProdutoCarrinho.php?idProd=<?php echo $produto['produto_id']; ?>" class="btn btn-sm btn-primary btn-plus" >
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle">R$ <?php $totalProduto = $produto['preco'] * $produto['quantidade']; $subTotal += $totalProduto; echo number_format($totalProduto,2,',','.');?></td>
                            <td class="align-middle"><a href="../../../adm/manipulacoes/manipularCarrinho/deletarDoCarrinho.php?idProd=<?php echo $produto['produto_id']; ?>" class="btn btn-sm btn-danger btn-minus" data-id="<?php echo $produto['produto_id']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <form class="mb-30" action="">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 p-4" placeholder="Código do Cupon">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Usar Cupon</button>
                        </div>
                    </div>
                </form>
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Resumo Carrinho</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>R$ <?php echo number_format($subTotal,2,',','.');?></h6>
                            <input type="hidden" name="subtotalpedido" value="<?php echo number_format($subTotal,2,',','.');?>">
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Frete</h6>
                            <h6 class="font-weight-medium">R$ 10,00</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>R$ <?php $totalCarrinho = $subTotal + 10; echo number_format($totalCarrinho,2,',','.');?></h5>
                            <input type="hidden" name="totalpedido" value="<?php echo number_format($totalCarrinho,2,',','.');?>">
                        </div>
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Finalizar</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!-- Cart End -->


<?php
    require '../../components/footer/footer.php'

?>


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
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
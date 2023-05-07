<?php
session_start();
require '../../../adm/config/conexao.php';
require_once '../../../vendor/autoload.php';
require '../../../adm/manipulacoes/manipularDadosUser/consultaDadosUser.php';
require '../../../adm/consultasSQL/consultaProdutosNoCarrinho.php';
require '../../../adm/consultasSQL/consultaDadosPedido.php';
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
    <link rel="stylesheet" href="opcoesCheckout/pagamentoCartaoCredito.css">

    <script src="https://sdk.mercadopago.com/js/v2"></script>

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
              <i class="fa fa-bars mr-2"></i>Categorias
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
                <a href="../app/pages/produtos/shop.php" class="nav-item nav-link">Produtos</a>
                <div class="nav-item dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    >Pages <i class="fa fa-angle-down mt-1"></i
                  ></a>
                  <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                    <a href="../app/pages/carrinho/cart.php" class="dropdown-item">Carrinho</a>
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
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Carrinho</a>
                    <span class="breadcrumb-item active">Pagamento</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Checkout Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Endereço de entrega</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Primeiro nome</label>
                            <input class="form-control" type="text" value="<?php echo $exibeDadosUserLogado['nome'];?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Sobrenome</label>
                            <input class="form-control" type="text" value="<?php echo $exibeDadosUserLogado['sobrenome'];?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" value="<?php echo $exibeDadosUserLogado['email'];?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Numero de telefone</label>
                            <input class="form-control" type="text" value="<?php echo $exibeDadosUserLogado['telefone'];?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Rua</label>
                            <input class="form-control" type="text" value="<?php echo $exibeDadosUserLogado['nome_rua'];?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Numero</label>
                            <input class="form-control" type="text" value="<?php echo $exibeDadosUserLogado['num_casa'];?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>País</label>
                            <select class="custom-select">
                                <option selected value="<?php echo $exibeDadosUserLogado['pais'];?>"><?php echo $exibeDadosUserLogado['pais'];?></option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Cidade</label>
                            <input class="form-control" type="text" value="<?php echo $exibeDadosUserLogado['cidade'];?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Estado</label>
                            <input class="form-control" type="text" value="<?php echo $exibeDadosUserLogado['estado'];?>">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>CEP</label>
                            <input class="form-control" type="text" value="<?php echo $exibeDadosUserLogado['cep'];?>">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="newaccount">
                                <label class="custom-control-label" for="newaccount">Criar conta</label>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Exibir forma de pagamento aqui dentro -->
                <div class="mb-5" id="exibe-forma-pagamento">

                </div>

            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Total do pedido</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Produtos</h6>
                        <?php $subTotal = 0; foreach($dados_carrinho as $dadosProduto): ?>
                        <div class="d-flex justify-content-between">
                            <p><?php echo $dadosProduto['nome'];?></p>
                            <p><?php echo $dadosProduto['quantidade'];?></p>
                            <p><?php echo $dadosProduto['preco'];?></p>
                        </div>
                        <?php  $totalProduto = $dadosProduto['quantidade'] * $dadosProduto['preco']; $subTotal += $totalProduto;  endforeach; ?>
                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>R$ <?php echo number_format($subTotal,2,',','.');?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Frete</h6>
                            <h6 class="font-weight-medium">R$ 10,00</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>R$ <?php $totalPedido = $subTotal + 10; echo $totalPedido;?></h5>
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Pagamento</span></h5>
                    <div id="opcoesPagamento">
                      <div class="bg-light p-30">
                          <div class="form-group">
                              <div class="custom-control custom-radio">
                                  <input type="radio" class="" data-ir="opcoesCheckout/pagamentoCartaoCredito" name="payment" id="creditcard">
                                  <label class="" for="creditcard">Cartão de crédito</label>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="custom-control custom-radio">
                                  <input type="radio" class="" data-ir="opcoesCheckout/pagamentoComDoisCartoes" name="payment" id="tocreditcard">
                                  <label class="" for="tocreditcard">Dois cartões de crédito</label>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="custom-control custom-radio">
                                  <input type="radio" class="" data-ir="opcoesCheckout/pagamentoCartaoDebito" name="payment" id="debitcard">
                                  <label class="" for="debitcard">Cartão de débito</label>
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="custom-control custom-radio">
                                  <input type="radio" class="" data-ir="opcoesCheckout/pagamentoBoleto" name="payment" id="boletobancario">
                                  <label class="" for="boleto">Boleto bancario</label>
                              </div>
                          </div>
                          <div class="form-group mb-4">
                              <div class="custom-control custom-radio">
                                  <input type="radio" class="" data-ir="opcoesCheckout/pagamentoPix" name="payment" id="pixtransfer">
                                  <label class="" for="pix">Pix</label>
                              </div>
                          </div>
                          <!-- <button type="submit" class="btn btn-block btn-info font-weight-bold py-3">Pagar!</button> -->
                      </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Checkout End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
                <p class="mb-4">No dolore ipsum accusam no lorem. Invidunt sed clita kasd clita et et dolor sed dolor. Rebum tempor no vero est magna amet no</p>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Location, City, Country</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                        <p>Duo stet tempor ipsum sit amet magna ipsum tempor est</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Your Email Address">
                                <div class="input-group-append">
                                    <button class="btn btn-primary">Sign Up</button>
                                </div>
                            </div>
                        </form>
                        <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                        <div class="d-flex">
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-secondary">
                    &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                    by
                    <a class="text-primary" href="https://freewebsitecode.com">Free Website Code</a>
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->

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


    <script>
        $(function () {
            $("#opcoesPagamento input").click(function (e) {
            let oi = $(this).data('ir');

            $.ajax({
                url: oi + '.php',
                success: function (html) {
                $("#exibe-forma-pagamento").html(html);
                
                }
            });
            });
        })
    </script>
    
</body>

</html>
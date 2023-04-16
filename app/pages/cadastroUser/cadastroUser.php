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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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
          <h5 class="m-0">Cadastro</h5>
        </div>
      </div>
    </div>
    <!-- Topbar End -->

    <div style="display:flex; justify-content:center;">
        <form class="container row" >
            <div class="col-sm-12">
                <div class="row" style="display:flex; justify-content:space-evenly;">
                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="sobrenome">Sobrenome:</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="tipo_cadastro">Tipo de cadastro:</label>
                        <select class="form-control" id="tipo_cadastro" name="tipo_cadastro">
                        <option value="Pessoa Fisica">Pessoa Física</option>
                        <option value="Pessoa Juridica">Pessoa Jurídica</option>
                        </select>
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="num_cpf" id="label_cpf">CPF:</label>
                        <input type="text" class="form-control" id="num_cpf" name="num_cpf">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                </div>
            </div>
            <div class="col-sm-12" style="display:flex; justify-content:center;">
                <div class="row" style="display:flex; justify-content:space-around !important;">
                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="genero">Gênero:</label>
                        <select class="form-control" id="genero" name="genero">
                        <option value="Homem">Homem</option>
                        <option value="Mulher">Mulher</option>
                        <option value="Outros">Outros</option>
                        </select>
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" name="senha">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="pais">País:</label>
                        <input type="text" class="form-control" id="pais" name="pais">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="nome_rua">Nome da rua:</label>
                        <input type="text" class="form-control" id="nome_rua" name="nome_rua">
                    </div>
                </div>
            </div>

            <div class="col-sm-12" style="display:flex; justify-content:center;">
                <div class="row" style="display:flex; justify-content:space-evenly;">
                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="num_casa">Número da casa:</label>
                        <input type="text" class="form-control" id="num_casa" name="num_casa">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="nome_bairro">Nome do bairro:</label>
                        <input type="text" class="form-control" id="nome_bairro" name="nome_bairro">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" name="cidade">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="estado">Estado:</label>
                        <input type="text" class="form-control" id="estado" name="estado">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="cep">CEP:</label>
                        <input class="form-control"  type="text" id="cep" name="cep" ><br><br>
                    </div>
                </div>
            </div>
            <div style="width:100%; display: flex; justify-content:center">
                <div>
                    <button class="btn btn-primary btn-block" style="width:450px; background-color:blue; color:#fff !important; border:none; font-weight:bold;" type="submit">Cadastrar</button>
                    <p class="mt-3" style="text-align: center; margin-top:2rem !important;">Já é cadastrado? <a href="pagina_de_cadastro.html" style="color: blue;">Fazer login</a>.</p>
                </div>
            </div>

                
        </form>
    </div>
    <?php 
        include '../../components/footer/footer.php';
    ?>
  </body>
  <script>
    $(document).ready(function() {
        // Define o listener para o select
        $("#tipo_cadastro").on("change", function() {
            // Verifica se o valor selecionado é "Pessoa Juridica"
            if ($(this).val() === "Pessoa Juridica") {
            // Atualiza o texto da label para "CNPJ"
            $("#label_cpf").text("CNPJ:");
            } else {
            // Caso contrário, atualiza o texto para "CPF"
            $("#label_cpf").text("CPF:");
            }
        });
    });
 </script>







</html>
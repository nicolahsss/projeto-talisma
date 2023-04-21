<?php
session_start();
    require '../../../adm/config/conexao.php';
    require '../../../adm/consultasSQL/consultaDadosCategorias.php';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Menu Superior - E-commerce</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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

	<!-- Adiciona os arquivos CSS do Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<style>
		nav {
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			background-color: #333;
			color: #fff;
			padding: 10px 0;
			z-index: 9999;
		}

		nav ul {
			list-style: none;
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 0;
            color: #fff;
			padding: 0;
		}

		nav ul li {
			margin: 0 10px;
            color: #fff;
		}

		nav ul li a {
			color: #fff !important;
			text-decoration: none;
            font-weight: bold;
			padding: 5px 10px;
		}


		.content {
            width: 100%;
            padding: 0 !important;
		}

	</style>
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
              <ul class="navbar-nav mr-auto" id="menuADM">
                    <li class="nav-item">
						<a class="nav-link" data-ir="opcoesPainelADM/gerenciaAvaliacoes" href="#avaliacoes">Avaliações</a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link" data-ir="opcoesPainelADM/gerenciaClientes" href="#clientes">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-ir="opcoesPainelADM/gerenciaCategorias" href="#gcategorias">G. Categorias</a>
                    </li>
					<li class="nav-item">
						<a class="nav-link" data-ir="opcoesPainelADM/gerenciaPedidos" href="#pedidos">Pedidos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-ir="opcoesPainelADM/gerenciaProdutos" href="#produtos">Produtos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-ir="opcoesPainelADM/gerenciaPromocoes" href="#promocoes">Promoções</a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link" data-ir="opcoesPainelADM/gerenciaPessoal" href="#pessoal">Pessoal</a>
                    </li>
					<li class="nav-item">
						<a class="nav-link" data-ir="opcoesPainelADM/gerenciaVendas" href="#vendas">Vendas</a>
					</li>
				</ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
    <!-- Navbar End -->

	<div class="container-fluid" style="padding: 0 !important;">
		<div class="content" id="content">
			
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
  integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

    <script>
        $(function () {
            $("#menuADM li a").click(function (e) {
            let oi = $(this).data('ir');

            $.ajax({
                url: oi + '.php',
                success: function (html) {
                $("#content").html(html);
                }
            });
            });
        })
    </script>
</body>
</html>

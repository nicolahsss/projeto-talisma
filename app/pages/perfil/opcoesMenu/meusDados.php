<!DOCTYPE html>
<html>
<head>
	<title>Dados do Usuário</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

        <!-- Libraries Stylesheet -->
        <link href="../../../../public/assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="../../../../public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../../public/assets/css/style.css" rel="stylesheet" />

	<style type="text/css">
		form {
            width: 700px;
			display: none;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: #f2f2f2;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			z-index: 999;
		}
		form input[type="submit"] {
			background-color: #4CAF50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
		form input[type="submit"]:hover {
			background-color: #45a049;
		}
		.notification {
			position: fixed;
			top: 10px;
			right: 10px;
			padding: 10px;
			background-color: #4CAF50;
			color: white;
			border-radius: 5px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
			z-index: 999;
			display: none;
		}

        #password{
            border: none;
            background-color: #F5F5F5;
        }

        #botaovibility{
            border: none;
            
        }

        #botaovibility:focus {
  outline: none;
  /* outras propriedades desejadas */
}
	</style>
	<script type="text/javascript">
		function showHidePassword() {
			var password = document.getElementById("password");
			if (password.type === "password") {
				password.type = "text";
			} else {
				password.type = "password";
			}
		}

		function openModal() {
			var modal = document.getElementById("modal");
			modal.style.display = "block";
			var email = document.getElementById("email").innerText;
			document.getElementById("modal-email").value = email;
		}

		function closeModal() {
			var modal = document.getElementById("modal");
			modal.style.display = "none";
		}

		function submitForm() {
			var email = document.getElementById("modal-email").value;
			var password = document.getElementById("modal-password").value;
			// Aqui seria feito o envio dos dados para o servidor para serem atualizados
			// Neste exemplo, apenas simulo uma resposta do servidor com sucesso
			var success = true;
			if (success) {
				closeModal();
				showNotification("Dados atualizados com sucesso.");
			} else {
				showNotification("Erro ao atualizar os dados.");
			}
		}

		function showNotification(message) {
			var notification = document.getElementById("notification");
			notification.innerText = message;
			notification.style.display = "block";
			setTimeout(function() {
				notification.style.display = "none";
			}, 5000);
		}
	</script>
</head>
<body>
	<h1>Dados do Usuário</h1>

    <table class="table table-striped table-bordered">
  <tbody>
    <tr>
      <th scope="row">Nome:</th>
      <td>João</td>
      <th scope="row">Sobrenome:</th>
      <td>Silva</td>
    </tr>
    <tr>
      <th scope="row">Tipo de Cadastro:</th>
      <td>Pessoa Fisica</td>
      <th scope="row">CPF/CNPJ:</th>
      <td>123.456.789-00</td>
    </tr>
    <tr>
      <th scope="row">Email:</th>
      <td>joao.silva@example.com</td>
      <th scope="row">Gênero:</th>
      <td>Masculino</td>
    </tr>
    <tr>
      <th scope="row">Senha:</th>
      <td><input type="password" value="12345" id="password" readonly></input> <button id="botaovibility" onclick="showHidePassword()"><i id="visibly" class="fas fa-eye"></i></button></td>
      <th scope="row">Tipo:</th>
      <td>Cliente</td>
    </tr>
    <tr>
      <th scope="row">Telefone:</th>
      <td>(11) 1234-5678</td>
      <th scope="row">País:</th>
      <td>Brasil</td>
    </tr>
    <tr>
      <th scope="row">Nome da Rua:</th>
      <td>Rua das Flores</td>
      <th scope="row">Número da Casa:</th>
      <td>123</td>
    </tr>
    <tr>
      <th scope="row">Nome do Bairro:</th>
      <td>Bairro Alegre</td>
      <th scope="row">Cidade:</th>
      <td>São Paulo</td>
    </tr>
    <tr>
      <th scope="row">Estado:</th>
      <td>São Paulo</td>
      <th scope="row">CEP:</th>
      <td>01234-567</td>
    </tr>
  </tbody>
</table>

    <div class="row">
        <div class="col-sm-12" style="display: flex; justify-content:right">
            <button onclick="openModal()" class="btn" style="background-color:steelblue; color:#fff; font-weight:bold">Alterar Dados</button>
        </div>
    </div>


    <form id="modal">

  <div class="form-row">
    <div class="col-md-4">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome">
    </div>
    <div class="col-md-4">
      <label for="sobrenome">Sobrenome</label>
      <input type="text" class="form-control" id="sobrenome">
    </div>
    <div class="col-md-4">
      <label for="tipo_cadastro">Tipo de cadastro</label>
      <select class="form-control" id="tipo_cadastro">
        <option selected>Escolha...</option>
        <option value="1">Cadastro 1</option>
        <option value="2">Cadastro 2</option>
      </select>
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-4">
      <label for="num_cpf">Número do CPF</label>
      <input type="text" class="form-control" id="num_cpf">
    </div>
    <div class="col-md-4">
      <label for="email">E-mail</label>
      <input type="email" class="form-control" id="email">
    </div>
    <div class="col-md-4">
      <label for="genero">Gênero</label>
      <select class="form-control" id="genero">
        <option selected>Escolha...</option>
        <option value="1">Masculino</option>
        <option value="2">Feminino</option>
        <option value="3">Outro</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="col-md-4">
      <label for="senha">Senha</label>
      <input type="password" class="form-control" id="senha">
    </div>
    <div class="col-md-4">
        <label for="telefone">Telefone:</label>
        <input type="tel" class="form-control" id="telefone">
    </div>
    <div class="col-md-4">
        <label for="pais">País:</label>
        <input type="text" class="form-control" id="pais">
    </div>
  </div>

    <div class="form-row">
        <div class="col-md-4">
            <label for="nome_rua">Nome da rua:</label>
            <input type="text" class="form-control" id="nome_rua">
        </div>
        <div class="col-md-4">
            <label for="num_casa">Número da casa:</label>
            <input type="number" class="form-control" id="num_casa">
        </div>
        <div class="col-md-4">
            <label for="nome_bairro">Nome do bairro:</label>
            <input type="text" class="form-control" id="nome_bairro">
        </div>
    </div>

    <div class="form-row">
        <div class="col-md-4">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade">
        </div>
        <div class="col-md-4">
            <label for="estado">Estado:</label>
            <input type="text" class="form-control" id="estado">
        </div>
        <div class="col-md-4">
            <label for="cep">CEP:</label>
            <input type="text" class="form-control" id="cep">
        </div>
        <div class="col-md-12" style="margin-top: 1rem; display:flex; justify-content:center;">
        <button onclick="closeModal()" class="btn" style="background-color:steelblue; color:#fff; font-weight:bold">Salvar</button>
        </div>
    </div>
</form>


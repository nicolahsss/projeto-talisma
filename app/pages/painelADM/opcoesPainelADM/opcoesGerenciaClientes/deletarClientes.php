<!DOCTYPE html>
<html>
<head>
	<title>Avaliações de Produtos</title>
	<!-- Adicione o Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Deletar Usuários</h1>
		<div class="form-group">
			<label for="busca">Busca:</label>
			<input type="text" class="form-control" id="busca" placeholder="Digite sua busca">
		</div>
		
	</div>

    <div class="row container" style="padding:0 !important; display: flex; justify-content:center;">
      <div class="col-md-12 row" id="avaliacoes" style="overflow: auto; max-height: 620px; padding-left:20px !important;">
        <div class="col-md-12">
            <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-md-1">
                    <img src="../../../public/assets/img/perfil.jpg" class="rounded-circle" alt="Foto de Perfil" style="width:50px; height:50px;" >
                </div>
                <div class="col-md-11" style=" display: flex; align-items:center; justify-content:space-around;">
                    <h5 class="card-title" style="margin-bottom: 0 !important;">Nome do Cliente</h5>
                    <h6 class="card-text" style="margin-bottom: 0 !important;">CPF: xxx.xxx.xxx-xx</h6>
                    <h6 class="card-text" style="margin-bottom: 0 !important;">E-mail: emaildocliente@exemplo.com</h6>
                    <h6 class="card-text" style="margin-bottom: 0 !important;">Telefone: (00) 00000-0000</h6>
                    <button class="btn btn-danger">Excluir</button>
                </div>
                </div>
            </div>
            </div>
        </div>
      </div>
    </div>
	<!-- Adicione o jQuery -->
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<!-- Adicione o script para buscar as avaliações -->
	<script>
		$(document).ready(function(){
			$("#busca").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#avaliacoes div").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});
	</script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Promoções</title>
	<!-- Adicionando o Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
		<h1>Cadastrar Promoções</h1>
		<form class="row">
			<div class="form-group col-md-3">
				<label for="nome">Nome da Promoção:</label>
				<input type="text" class="form-control" id="nome" placeholder="Digite o nome da promoção">
			</div>
            <div class="form-group col-md-3">
				<label for="data_inicio">Data de Início:</label>
				<input type="date" class="form-control" id="data_inicio">
			</div>
			<div class="form-group col-md-3">
				<label for="data_validade">Data de Validade:</label>
				<input type="date" class="form-control" id="data_validade">
			</div>
			<div class="form-group col-md-3">
				<label for="banner">Banner:</label>
				<input type="file" class="form-control-file" id="banner">
			</div>
			<div class="form-group col-md-12">
				<label for="descricao">Descrição:</label>
				<textarea class="form-control" id="descricao" placeholder="Digite uma descrição da promoção"></textarea>
			</div>

            <div class="form-group col-md-12 row">
				<h4 for="banner" class="col-md-12 card-header">Selecionar Produtos em Promoção</h4>
                <div class="col-md-12 card-header">
                    <div class="form-group">
                        <label for="busca">Busca:</label>
                        <input type="text" class="form-control" id="busca" placeholder="Digite sua busca">
                    </div>
                </div>
                <div class="col-md-12 row" style="padding-top: 1rem; overflow:auto; max-height:620px" >
                    <div class="card col-md-2" style="display: flex; justify-content:center;">
                        <input type="checkbox" id="cores" name="cores[Vermelho]" value=""> <!-- Colocar o id do produto -->
                        <div class="produto" style="display: flex; justify-content:center;">
                        <div>
                            <div style="display: flex; justify-content:center;padding-top: 1rem !important;">
                                <img style="width: 100px; height:100px;" src="../../../public/assets/img/perfil.jpg" alt="">
                            </div>
                            <h6 class="text-center">Nome produto</h6>
                            <h6 class="text-center">Valor: R$ 999</h6>
                            <label for="" class="text-center">Valor da promoção</label>
                            <div style="display: flex; justify-content:center;">
                                <input type="number" style="width: 100px;" name="valorpromocao"> <!-- Colocar o valor que o produto vai ter durante a promoção -->
                            </div>
                        </div>
                        </div>
                        <br>
                    </div>
                    <div class="card col-md-2" style="display: flex; justify-content:center;">
                        <input type="checkbox" id="cores" name="cores[Vermelho]" value="">
                        <div class="produto" style="display: flex; justify-content:center;">
                        <div>
                            <div style="display: flex; justify-content:center;padding-top: 1rem !important;">
                                <img style="width: 100px; height:100px;" src="../../../public/assets/img/perfil.jpg" alt="">
                            </div>
                            <h6 class="text-center">Nome produto</h6>
                            <h6 class="text-center">Valor: R$ 999</h6>
                            <label for="" class="text-center">Valor da promoção</label>
                            <div style="display: flex; justify-content:center;">
                                <input type="number" style="width: 100px;" name="valorpromocao">
                            </div>
                        </div>
                        </div>
                        <br>
                    </div>
                    <div class="card col-md-2" style="display: flex; justify-content:center;">
                        <input type="checkbox" id="cores" name="cores[Vermelho]" value="">
                        <div class="produto" style="display: flex; justify-content:center;">
                        <div>
                            <div style="display: flex; justify-content:center;padding-top: 1rem !important;">
                                <img style="width: 100px; height:100px;" src="../../../public/assets/img/perfil.jpg" alt="">
                            </div>
                            <h6 class="text-center">Nome produto</h6>
                            <h6 class="text-center">Valor: R$ 999</h6>
                            <label for="" class="text-center">Valor da promoção</label>
                            <div style="display: flex; justify-content:center;">
                                <input type="number" style="width: 100px;" name="valorpromocao">
                            </div>
                        </div>
                        </div>
                        <br>
                    </div>
                    <div class="card col-md-2" style="display: flex; justify-content:center;">
                        <input type="checkbox" id="cores" name="cores[Vermelho]" value="">
                        <div class="produto" style="display: flex; justify-content:center;">
                        <div>
                            <div style="display: flex; justify-content:center;padding-top: 1rem !important;">
                                <img style="width: 100px; height:100px;" src="../../../public/assets/img/perfil.jpg" alt="">
                            </div>
                            <h6 class="text-center">Nome produto</h6>
                            <h6 class="text-center">Valor: R$ 999</h6>
                            <label for="" class="text-center">Valor da promoção</label>
                            <div style="display: flex; justify-content:center;">
                                <input type="number" style="width: 100px;" name="valorpromocao">
                            </div>
                        </div>
                        </div>
                        <br>
                    </div>
                    <div class="card col-md-2" style="display: flex; justify-content:center;">
                        <input type="checkbox" id="cores" name="cores[Vermelho]" value="">
                        <div class="produto" style="display: flex; justify-content:center;">
                        <div>
                            <div style="display: flex; justify-content:center;padding-top: 1rem !important;">
                                <img style="width: 100px; height:100px;" src="../../../public/assets/img/perfil.jpg" alt="">
                            </div>
                            <h6 class="text-center">Nome produto</h6>
                            <h6 class="text-center">Valor: R$ 999</h6>
                            <label for="" class="text-center">Valor da promoção</label>
                            <div style="display: flex; justify-content:center;">
                                <input type="number" style="width: 100px;" name="valorpromocao">
                            </div>
                        </div>
                        </div>
                        <br>
                    </div>
                    <div class="card col-md-2" style="display: flex; justify-content:center;">
                        <input type="checkbox" id="cores" name="cores[Vermelho]" value="">
                        <div class="produto" style="display: flex; justify-content:center;">
                        <div>
                            <div style="display: flex; justify-content:center;padding-top: 1rem !important;">
                                <img style="width: 100px; height:100px;" src="../../../public/assets/img/perfil.jpg" alt="">
                            </div>
                            <h6 class="text-center">Nome produto</h6>
                            <h6 class="text-center">Valor: R$ 999</h6>
                            <label for="" class="text-center">Valor da promoção</label>
                            <div style="display: flex; justify-content:center;">
                                <input type="number" style="width: 100px;" name="valorpromocao">
                            </div>
                        </div>
                        </div>
                        <br>
                    </div>
                    <div class="card col-md-2" style="display: flex; justify-content:center;">
                        <input type="checkbox" id="cores" name="cores[Vermelho]" value="">
                        <div class="produto" style="display: flex; justify-content:center;">
                        <div>
                            <div style="display: flex; justify-content:center;padding-top: 1rem !important;">
                                <img style="width: 100px; height:100px;" src="../../../public/assets/img/perfil.jpg" alt="">
                            </div>
                            <h6 class="text-center">Nome produto</h6>
                            <h6 class="text-center">Valor: R$ 999</h6>
                            <label for="" class="text-center">Valor da promoção</label>
                            <div style="display: flex; justify-content:center;">
                                <input type="number" style="width: 100px;" name="valorpromocao">
                            </div>
                        </div>
                        </div>
                        <br>
                    </div>
                </div>
			</div>
            <div class="col-md-12" style="display: flex; justify-content:right;">
                <button type="submit" class="btn btn-primary" style="margin-right: 1rem;">Cadastrar</button>
            </div>
		</form>
	</div>
</body>
</html>

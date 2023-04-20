<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Despacho de Pedidos</title>
  <!-- Importando o Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0pk" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="padding-top:1rem;">
        <h3>Despachar Pedidos</h3>
    </div>
  <div class="container" style="overflow: auto; max-height: 620px;">
    <div class="card">
      <div class="card-header">
        Detalhes do Pedido
      </div>
      <div class="card-body row">
        <div class="col-md-4">
            <h5 class="card-title">Pedido #001</h5>
            <p class="card-text">Nome do Cliente: João da Silva</p>
            <p class="card-text">CPF do Cliente: 123.456.789-00</p>
            <p class="card-text">Data do Pedido: 01/01/2023</p>
        </div>
        <div class="col-md-4">
            <p class="card-text">Endereço para Entrega: Rua A, 123</p>
            <p class="card-text">Nº da Casa: 123</p>
            <p class="card-text">Bairro: Centro</p>
            <p class="card-text">CEP: 12345-678</p>
        </div>
        <div class="col-md-4">
            <p class="card-text">Cidade: São Paulo</p>
            <p class="card-text">Estado: SP</p>
            <p class="card-text">País: Brasil</p>
            <p class="card-text">Telefone: (00) 00000-0000</p>
        </div>

        <hr>
        <div class="col-md-12">
            <h5 class="card-title">Produtos</h5>
        </div>
        <div class="col-md-12" style="overflow: auto; max-height: 220px;">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Produto</th>
                  <th scope="col">Qnt</th>
                  <th scope="col">P.Unit</th>
                  <th scope="col">Total</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Produto A</td>
                  <td>1</td>
                  <td>R$ 10,00</td>
                  <td>R$ 10,00</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Produto A</td>
                  <td>1</td>
                  <td>R$ 10,00</td>
                  <td>R$ 10,00</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Produto A</td>
                  <td>1</td>
                  <td>R$ 10,00</td>
                  <td>R$ 10,00</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Produto A</td>
                  <td>1</td>
                  <td>R$ 10,00</td>
                  <td>R$ 10,00</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Produto A</td>
                  <td>1</td>
                  <td>R$ 10,00</td>
                  <td>R$ 10,00</td>
                </tr>
                <tr>
                  <th scope="row">1</th>
                  <td>Produto A</td>
                  <td>1</td>
                  <td>R$ 10,00</td>
                  <td>R$ 10,00</td>
                </tr>
                
                <!-- Adicionar mais linhas conforme necessário -->
              </tbody>
            </table>
        </div>
        <hr>
        <div class="col-md-12" style="text-align:right; margin: 1rem 0;">
            <h4>Total do Pedido: R$ 999,00</h4>
        </div>
        <form class="col-md-12 row" style="display: flex; justify-content:center;">

          <div class="form-group col-md-3">
              <input type="text" class="form-control" id="entregador" name="assentregador" style="border: 1px 0 1px 0 !important;">
              <label style="display: flex; justify-content:center;" for="hora-entrega">Entregador</label>
          </div>
          <div class="form-group col-md-3">
              <input type="date" style="color: transparent;" class="form-control" id="data-entrega" name="data-entrega">
              <label style="display: flex; justify-content:center;" for="data-entrega">Data da Entrega</label>
          </div>
          <div class="form-group col-md-3">
              <input type="time" style="color: transparent;" class="form-control" id="hora-entrega" name="hora-entrega">
              <label style="display: flex; justify-content:center;" for="hora-entrega">Hora da Entrega</label>
          </div>
          <div class="form-group col-md-3">
              <input type="text" class="form-control" id="asscliente" name="asscliente">
              <label style="display: flex; justify-content:center;" for="hora-entrega">Assinatura do cliente</label>
          </div>
        </form>

        <div class="col-md-12" style="display: flex; justify-content:right;">
				<div style="width:350px; display: flex; justify-content:space-evenly;">
					<button>Cancelar</button>
					<button>Lista em PDF</button>
					<button>Despachar</button>
				</div>
			</div>
      </div>

    </div>
  </div>
</body>
</html>

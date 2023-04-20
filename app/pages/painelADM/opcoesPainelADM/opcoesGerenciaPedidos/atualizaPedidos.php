<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Atualização de Status de Pedidos</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
</head>
<body>
  <div class="container" style="padding-top:1rem; background-color:#f3f3f3; overflow: auto; max-height: 620px;">
    <div class="card">
        <h1 class="card-header">Atualização de Status de Pedidos</h1>
        <form class="row" style="padding:20px;">
          <div class="form-group col-md-6">
            <label for="codigo-pedido">Código do Pedido:</label>
            <input type="text" class="form-control" id="codigo-pedido">
          </div>
          <div class="form-group col-md-6">
            <label for="novo-status">Novo Status:</label>
            <select class="form-control" id="novo-status">
              <option value="">Selecione...</option>
              <option value="1">Processando</option>
              <option value="2">Enviado</option>
              <option value="3">Entregue</option>
              <option value="4">Cancelado</option>
            </select>
          </div>
          <div class="form-group col-md-12">
            <label for="observacoes">Observações:</label>
            <textarea class="form-control" id="observacoes"></textarea>
          </div>
          <div class="col-md-12" style="display: flex; justify-content:right;">
              <button type="submit" class="btn btn-primary">Atualizar</button>
          </div>
        </form>
    </div>

    <div class="card">
      <!-- Lista de pedidos em trajeto de entrega -->
      <h2 class="card-header">Pedidos em Trajeto de Entrega</h2>

      <div style="padding:20px;">
        <!-- Campo de pesquisa -->
        <div class="form-group">
        <input type="text" class="form-control" id="pesquisa" name="pesquisa" placeholder="Pesquisar Pedido">
        </div>

        <table class="table">
        <thead>
        <tr>
            <th scope="col">Código do Pedido</th>
            <th scope="col">Nome do Cliente</th>
            <th scope="col">Valor do Pedido</th>
            <th scope="col">Status</th>
            <th scope="col">Detalhes</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>001</td>
            <td>João Silva</td>
            <td>R$ 150,00</td>
            <td>Em trajeto de entrega</td>
            <td><a href="#">Ver Detalhes</a></td>
        </tr>
        <tr>
            <td>002</td>
            <td>Maria Souza</td>
            <td>R$ 200,00</td>
            <td>Em trajeto de entrega</td>
            <td><a href="#">Ver Detalhes</a></td>
        </tr>
        <tr>
            <td>003</td>
            <td>Lucas Santos</td>
            <td>R$ 80,00</td>
            <td>Em trajeto de entrega</td>
            <td><a href="#">Ver Detalhes</a></td>
        </tr>
        <tr>
            <td>003</td>
            <td>Lucas Santos</td>
            <td>R$ 80,00</td>
            <td>Em trajeto de entrega</td>
            <td><a href="#">Ver Detalhes</a></td>
        </tr>
        <tr>
            <td>003</td>
            <td>Lucas Santos</td>
            <td>R$ 80,00</td>
            <td>Em trajeto de entrega</td>
            <td><a href="#">Ver Detalhes</a></td>
        </tr>
        </tbody>
        </table>   
      </div>
   
    </div>

</div>
</body>
</html>

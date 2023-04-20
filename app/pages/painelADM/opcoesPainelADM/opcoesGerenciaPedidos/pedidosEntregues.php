<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pedidos entregues</title>
  <!-- CSS do Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
</head>

<body>
  <div class="container mt-3">
    <h1>Pedidos entregues</h1>
    <form class="form-inline my-3">
      <div class="form-group mr-3">
        <label for="input-pesquisa" class="mr-2">Pesquisar:</label>
        <input type="text" class="form-control" id="input-pesquisa">
      </div>
      <button type="submit" class="btn btn-primary">Buscar</button>
    </form>
    <div class="table-responsive" style="overflow: auto; max-height: 420px;">
      <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Código</th>
            <th scope="col">Status</th>
            <th scope="col">Nome do cliente</th>
            <th scope="col">CPF do cliente</th>
            <th scope="col">Data da entrega</th>
            <th scope="col">Quem entregou</th>
            <th scope="col">Hora da entrega</th>
            <th scope="col">Assinatura do recebimento</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>001</td>
            <td>Entregue</td>
            <td>João da Silva</td>
            <td>123.456.789-00</td>
            <td>01/01/2023</td>
            <td>Marcos Souza</td>
            <td>14:00</td>
            <td>Assinatura de João da Silva</td>
            <td><button class="btn btn-primary btn-sm">Ver detalhes</button></td>
          </tr>
          <tr>
            <td>002</td>
            <td>Entregue</td>
            <td>Maria Oliveira</td>
            <td>987.654.321-00</td>
            <td>02/01/2023</td>
            <td>Lucas Santos</td>
            <td>16:30</td>
            <td>Assinatura de Maria Oliveira</td>
            <td><button class="btn btn-primary btn-sm">Ver detalhes</button></td>
          </tr>
          <tr>
            <td>003</td>
            <td>Entregue</td>
            <td>Paulo Souza</td>
            <td>111.222.333-44</td>
            <td>03/01/2023</td>
            <td>Renata Silva</td>
            <td>10:15</td>
            <td>Assinatura de Paulo Lopes</td>
            <td><button class="btn btn-primary btn-sm">Ver detalhes</button></td>
          </tr>
          <tr>
            <td>003</td>
            <td>Entregue</td>
            <td>Paulo Souza</td>
            <td>111.222.333-44</td>
            <td>03/01/2023</td>
            <td>Renata Silva</td>
            <td>10:15</td>
            <td>Assinatura de Paulo Lopes</td>
            <td><button class="btn btn-primary btn-sm">Ver detalhes</button></td>
          </tr>
          <tr>
            <td>003</td>
            <td>Entregue</td>
            <td>Paulo Souza</td>
            <td>111.222.333-44</td>
            <td>03/01/2023</td>
            <td>Renata Silva</td>
            <td>10:15</td>
            <td>Assinatura de Paulo Lopes</td>
            <td><button class="btn btn-primary btn-sm">Ver detalhes</button></td>
          </tr>
          <tr>
            <td>003</td>
            <td>Entregue</td>
            <td>Paulo Souza</td>
            <td>111.222.333-44</td>
            <td>03/01/2023</td>
            <td>Renata Silva</td>
            <td>10:15</td>
            <td>Assinatura de Paulo Lopes</td>
            <td><button class="btn btn-primary btn-sm">Ver detalhes</button></td>
          </tr>
          <tr>
            <td>003</td>
            <td>Entregue</td>
            <td>Paulo Souza</td>
            <td>111.222.333-44</td>
            <td>03/01/2023</td>
            <td>Renata Silva</td>
            <td>10:15</td>
            <td>Assinatura de Paulo Lopes</td>
            <td><button class="btn btn-primary btn-sm">Ver detalhes</button></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
            

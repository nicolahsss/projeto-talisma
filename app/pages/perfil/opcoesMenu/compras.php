<!DOCTYPE html>
<html>
<head>
  <title>Exemplo de Cards com Bootstrap</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="opcoesMenu/opcoesMenu.css">
</head>
<body>

<div class="container-fluid">
  <div class="row" style="margin-top: 2rem;">
    <div class="col">
      <h2 class="tituloDaColuna">Suas compras</h2>
      <hr>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Imagem do card">
          <div class="card-body" style="padding: 0 4px !important;">
            <span class="card-title" style="font-size: 15px !important; text-align:center;">Nome do produto</span>
            <button type="button" class="btn btn-primary mostrarDetalhes">Detalhes</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Imagem do card">
          <div class="card-body" style="padding: 0 4px !important;">
            <span class="card-title">Nome do produto</span>
            <button type="button" class="btn btn-primary mostrarDetalhes">Detalhes</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Imagem do card">
          <div class="card-body" style="padding: 0 4px !important;">
            <span class="card-title">Nome do produto</span>
            <button type="button" class="btn btn-primary mostrarDetalhes">Detalhes</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Imagem do card">
          <div class="card-body" style="padding: 0 4px !important;">
            <span class="card-title">Nome do produto</span>
            <button type="button" class="btn btn-primary mostrarDetalhes">Detalhes</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Imagem do card">
          <div class="card-body" style="padding: 0 4px !important;">
            <span class="card-title">Nome do produto</span>
            <button type="button" class="btn btn-primary mostrarDetalhes">Detalhes</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Imagem do card">
          <div class="card-body" style="padding: 0 4px !important;">
            <span class="card-title">Nome do produto</span>
            <button type="button" class="btn btn-primary mostrarDetalhes">Detalhes</button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row" style="margin-top: 2rem;">
    <div class="col">
      <h2 class="tituloDaColuna">Pedidos a caminho</h2>
      <hr>
      <div class="card-deck">
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Imagem do card">
          <div class="card-body" style="padding: 0 4px !important;">
            <span class="card-pedido">Codigo pedido</span>
            <p class="card-status">A caminho</p>
            <button type="button" class="btn btn-primary mostrarDetalhes">Detalhes</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Imagem do card">
          <div class="card-body" style="padding: 0 4px !important;">
            <span class="card-pedido">Codigo pedido</span>
            <p class="card-status" style="color:blue">Entregue</p>
            <button type="button" class="btn btn-primary mostrarDetalhes">Detalhes</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Imagem do card">
          <div class="card-body" style="padding: 0 4px !important;">
            <span class="card-pedido">Codigo pedido</span>
            <p class="card-status" style="color:orange;">Pendente</p>
            <button type="button" class="btn btn-primary mostrarDetalhes">Detalhes</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Imagem do card">
          <div class="card-body" style="padding: 0 4px !important;">
            <span class="card-pedido">Codigo pedido</span>
            <p class="card-status" style="color:orangered">Cancelado</p>
            <button type="button" class="btn mostrarDetalhes">Detalhes</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Imagem do card">
          <div class="card-body" style="padding: 0 4px !important;">
            <span class="card-pedido">Codigo pedido</span>
            <p class="card-status" style="color:blue">Entregue</p>
            <button type="button" class="btn btn-primary mostrarDetalhes">Detalhes</button>
          </div>
        </div>
        <div class="card">
          <img class="card-img-top" src="https://via.placeholder.com/150" alt="Imagem do card">
          <div class="card-body" style="padding: 0 4px !important;">
            <span class="card-pedido">Codigo pedido</span>
            <p class="card-status" style="color:blue">Entregue</p>
            <button type="button" class="btn btn-primary mostrarDetalhes">Detalhes</button>
          </div>
        </div>
      </div>
    </div>
  </div>


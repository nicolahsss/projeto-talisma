<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Todos os produtos</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="background-color: #f3f3f3; padding: 1rem 20px">
<h3>Cadastar Produtos</h3>
    <form class="row">
      <div class="form-group col-md-3">
        <label for="nome">Nome do Produto</label>
        <input type="text" class="form-control" id="nome" placeholder="Nome do produto">
      </div>

      <div class="form-group col-md-3">
        <label for="preco-promocional">Codigo de barras</label>
        <input type="number" class="form-control" id="preco-promocional" placeholder="Preço promocional do produto">
      </div>

      <div class="form-group col-md-3">
        <label for="quantidade">Quantidade em estoque</label>
        <input type="number" class="form-control" id="quantidade" placeholder="Quantidade em estoque do produto">
      </div>

      <div class="form-group col-md-3">
        <label for="categoria">Categoria</label>
        <select class="form-control" id="categoria">
          <option value="Selecione">Selecione</option>
          <option value="Selecione">Categoria01</option>
          <option value="Selecione">Categoria02</option>
          <option value="Selecione">Categoria03</option>
          <option value="Selecione">Categoria04</option>
        </select>
      </div>

      <div class="form-group col-md-12">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" id="descricao" rows="3"></textarea>
      </div>

      <div class="col-md-3">
        <div class="form-group">
            <label for="imagem">Imagem Principal</label>
            <input type="file" class="form-control-file" id="imagem">
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
            <label for="imagem">Imagem Dois</label>
            <input type="file" class="form-control-file" id="imagem2">
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
            <label for="imagem">Imagem Três</label>
            <input type="file" class="form-control-file" id="imagem3">
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
            <label for="imagem">Imagem Quatro</label>
            <input type="file" class="form-control-file" id="imagem4">
        </div>
      </div>


      <div class="form-group col-md-3" id="cores">
        <label for="cor">Cores</label>
        <select class="form-control" id="cores">
          <option value="Selecione">Selecione</option>
          <option value="Selecione">Categoria01</option>
          <option value="Selecione">Categoria02</option>
          <option value="Selecione">Categoria03</option>
          <option value="Selecione">Categoria04</option>
        </select>
      </div>

      <div class="form-group col-md-3">
        <label for="custo">Custo</label>
        <input type="number" class="form-control" id="custo" placeholder="Custo do produto">
      </div>
      <div class="form-group col-md-3">
        <label for="preco">Preço</label>
        <input type="number" class="form-control" id="preco" placeholder="Preço do produto">
      </div>
      <div class="form-group col-md-3">
        <label for="preco-promocional">Preço promocional</label>
        <input type="number" class="form-control" id="preco-promocional" placeholder="Preço promocional do produto">
      </div>
        <div class="col-md-12" style="display: flex; justify-content:right;">
            <button class="btn btn-info">Cadastrar</button>
        </div>
    </form>
</div>

</body>
</html>

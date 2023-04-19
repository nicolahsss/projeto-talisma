<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cadastro de Categorias</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Cadastrar Categorias</h1>
      <form>
        <div class="form-row" style="padding: 20px;">
          <div class="form-group col-md-3">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome da Categoria">
          </div>
          <div class="form-group col-md-3">
            <label for="descricao">Descrição</label>
            <input type="text" class="form-control" id="descricao" placeholder="Descrição da Categoria">
          </div>
          <div class="form-group col-md-3">
            <label for="imagem">Imagem</label>
            <input type="file" class="form-control-file" id="imagem">
          </div>
          <div class="col-md-3" style="display: flex; align-items:center;">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>

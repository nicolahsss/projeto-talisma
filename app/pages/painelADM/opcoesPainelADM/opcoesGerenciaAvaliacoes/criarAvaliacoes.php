<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Cadastrar Avaliação</div>
        <div class="card-body">
          <form>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nomeCliente">Nome do Cliente:</label>
                  <input type="text" class="form-control" id="nomeCliente" name="nomeCliente" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="codigoProduto">Código do Produto Avaliado:</label>
                  <input type="text" class="form-control" id="codigoProduto" name="codigoProduto" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="codigoUsuario">Código do Usuário Avaliador:</label>
                  <input type="text" class="form-control" id="codigoUsuario" name="codigoUsuario" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="notaAvaliacao">Nota de Avaliação:</label>
                  <input type="number" class="form-control" id="notaAvaliacao" name="notaAvaliacao" min="0" max="10" step="0.1" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="comentarioCliente">Comentário do Cliente:</label>
              <textarea class="form-control" id="comentarioCliente" name="comentarioCliente" rows="3"></textarea>
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="temImagens" name="temImagens">
              <label class="form-check-label" for="temImagens">Tem imagens?</label>
            </div>
            <div class="form-group">
              <label for="uploadImagens">Upload de Imagens:</label>
              <input type="file" class="form-control-file" id="uploadImagens" name="uploadImagens" accept="image/*" disabled>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
          </form>
        </div>
      </div>
    </div>
  </div>

</div>

</body>
</html>
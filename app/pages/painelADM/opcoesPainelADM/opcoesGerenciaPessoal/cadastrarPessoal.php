<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionários</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <h1>Cadastro de Funcionários</h1>
      <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" placeholder="Nome">
          </div>
          <div class="form-group col-md-6">
            <label for="sobrenome">Sobrenome</label>
            <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" placeholder="E-mail">
          </div>
          <div class="form-group col-md-6">
            <label for="telefone">Telefone</label>
            <input type="tel" class="form-control" id="telefone" placeholder="Telefone">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" id="cpf" placeholder="CPF">
          </div>
          <div class="form-group col-md-6">
            <label for="avaliacoes">Avaliações</label>
            <input type="number" class="form-control" id="avaliacoes" placeholder="Avaliações">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="ativo">Ativo</label>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="ativo">
              <label class="form-check-label" for="ativo">
                Sim
              </label>
            </div>
          </div>
          <div class="form-group col-md-4">
            <label for="foto_perfil">Foto de Perfil</label>
            <input type="file" class="form-control-file" id="foto_perfil">
          </div>
          <div class="col-md-4" style="display: flex; justify-content:right; align-items:center;">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>

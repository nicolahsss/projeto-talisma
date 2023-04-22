<?php
require '../../../../../adm/config/conexao.php';
require '../../../../../adm/consultasSQL/consultaDadosCategorias.php';
?>
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
    <form class="row" action="../../../adm/validacoes/validarCadastroDeProduto/cadastrarProduto.php" method="post"  enctype="multipart/form-data">
      <div class="form-group col-md-3">
        <label for="nome">Nome do Produto</label>
        <input type="text" class="form-control" id="nome" name="nomeproduto">
      </div>

      <div class="form-group col-md-3">
        <label for="preco-promocional">Codigo de barras</label>
        <input type="number" class="form-control" name="codigodebarras" id="preco-promocional">
      </div>

      <div class="form-group col-md-3">
        <label for="quantidade">Quantidade em estoque</label>
        <input type="number" class="form-control" name="quantidadeemestoque" id="quantidade">
      </div>

      <div class="form-group col-md-3">
        <label for="categoria">Categoria</label>
        <select class="form-control" name="categoriadoproduto" id="categoria">
          <option value="Selecione">Selecione</option>
          <?php while($exibeDadosCategorias = $condultaDadosDasCategorias->fetch(PDO::FETCH_ASSOC)) { ?>
            <option value="<?php echo $exibeDadosCategorias['categoria_id'];?>"><?php echo $exibeDadosCategorias['nome'];?></option>
          <?php } ?>
        </select>
      </div>


      <div class="form-group col-md-12">
        <label for="descricao">Descrição</label>
        <textarea class="form-control" name="descricaodoproduto" id="descricao" rows="3"></textarea>
      </div>

      <div class="col-md-3">
        <div class="form-group">
            <label for="imagem">Imagem Principal</label>
            <input type="file" name="imagemprincipaldoproduto" class="form-control-file" id="imagem">
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
            <label for="imagem">Imagem Dois</label>
            <input type="file" name="imagemdoisproduto" class="form-control-file" id="imagem2">
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
            <label for="imagem">Imagem Três</label>
            <input type="file" name="imagemtresproduto" class="form-control-file" id="imagem3">
        </div>
      </div>

      <div class="col-md-3">
        <div class="form-group">
            <label for="imagem">Imagem Quatro</label>
            <input type="file" name="imagemquatroproduto" class="form-control-file" id="imagem4">
        </div>
      </div>

      <div class="col-md-12" style="margin-top: 1rem;">
        <label for="cores">Cores Disponíveis</label>
      </div>
      <div class="col-md-3">
        <input type="checkbox" id="cores" name="cores[Vermelho]" value="">Vermelho<br>
        <input type="checkbox" id="cores" name="cores[Azul]" value="">Azul<br>
        <input type="checkbox" id="cores" name="cores[Verde]" value="">Verde<br>
        <input type="checkbox" id="cores" name="cores[Roxo]" value="">Roxo<br>
        <input type="checkbox" id="cores" name="cores[Amarelo]" value="">Amarelo<br>
        <input type="checkbox" id="cores" name="cores[Branco]" value="">Branco<br>
        <input type="checkbox" id="cores" name="cores[Laranja]" value="">Laranja<br>
      </div>
      <div class="col-md-3">
        <input type="checkbox" id="cores" name="cores[Vermelho]" value="">Vermelho<br>
        <input type="checkbox" id="cores" name="cores[Azul]" value="">Azul<br>
        <input type="checkbox" id="cores" name="cores[Verde]" value="">Verde<br>
        <input type="checkbox" id="cores" name="cores[Roxo]" value="">Roxo<br>
        <input type="checkbox" id="cores" name="cores[Amarelo]" value="">Amarelo<br>
        <input type="checkbox" id="cores" name="cores[Branco]" value="">Branco<br>
        <input type="checkbox" id="cores" name="cores[Laranja]" value="">Laranja<br>
      </div>
      <div class="col-md-3">
        <input type="checkbox" id="cores" name="cores[Vermelho]" value="">Vermelho<br>
        <input type="checkbox" id="cores" name="cores[Azul]" value="">Azul<br>
        <input type="checkbox" id="cores" name="cores[Verde]" value="">Verde<br>
        <input type="checkbox" id="cores" name="cores[Roxo]" value="">Roxo<br>
        <input type="checkbox" id="cores" name="cores[Amarelo]" value="">Amarelo<br>
        <input type="checkbox" id="cores" name="cores[Branco]" value="">Branco<br>
        <input type="checkbox" id="cores" name="cores[Laranja]" value="">Laranja<br>
      </div>
      <div class="col-md-3">
        <input type="checkbox" id="cores" name="cores[Vermelho]" value="">Vermelho<br>
        <input type="checkbox" id="cores" name="cores[Azul]" value="">Azul<br>
        <input type="checkbox" id="cores" name="cores[Verde]" value="">Verde<br>
        <input type="checkbox" id="cores" name="cores[Roxo]" value="">Roxo<br>
        <input type="checkbox" id="cores" name="cores[Amarelo]" value="">Amarelo<br>
        <input type="checkbox" id="cores" name="cores[Branco]" value="">Branco<br>
        <input type="checkbox" id="cores" name="cores[Laranja]" value="">Laranja<br>
      </div>


      <div class="col-md-12 row" style="margin-top:1rem;">
        <div class="form-group col-md-4">
          <label for="custo">Custo</label>
          <input type="number" name="custoproduto" class="form-control" id="custo">
        </div>
        <div class="form-group col-md-4">
          <label for="preco">Preço</label>
          <input type="number" name="precoproduto" class="form-control" id="preco">
        </div>
        <div class="form-group col-md-4">
          <label for="preco-promocional">Preço promocional</label>
          <input type="number" name="precopromocional" class="form-control" id="preco-promocional">
        </div>
      </div>


      <div class="col-md-12" style="margin-top: 1rem;">
        <label for="cores">Tamanhos Disponíveis</label>
      </div>
      <div class="col-md-3">
        <input type="checkbox" id="cores" name="cores[Vermelho]" value="">Vermelho<br>
        <input type="checkbox" id="cores" name="cores[Azul]" value="">Azul<br>
        <input type="checkbox" id="cores" name="cores[Verde]" value="">Verde<br>
        <input type="checkbox" id="cores" name="cores[Roxo]" value="">Roxo<br>
        <input type="checkbox" id="cores" name="cores[Amarelo]" value="">Amarelo<br>
        <input type="checkbox" id="cores" name="cores[Branco]" value="">Branco<br>
        <input type="checkbox" id="cores" name="cores[Laranja]" value="">Laranja<br>
      </div>
      <div class="col-md-3">
        <input type="checkbox" id="cores" name="cores[Vermelho]" value="">Vermelho<br>
        <input type="checkbox" id="cores" name="cores[Azul]" value="">Azul<br>
        <input type="checkbox" id="cores" name="cores[Verde]" value="">Verde<br>
        <input type="checkbox" id="cores" name="cores[Roxo]" value="">Roxo<br>
        <input type="checkbox" id="cores" name="cores[Amarelo]" value="">Amarelo<br>
        <input type="checkbox" id="cores" name="cores[Branco]" value="">Branco<br>
        <input type="checkbox" id="cores" name="cores[Laranja]" value="">Laranja<br>
      </div>
      <div class="col-md-3">
        <input type="checkbox" id="cores" name="cores[Vermelho]" value="">Vermelho<br>
        <input type="checkbox" id="cores" name="cores[Azul]" value="">Azul<br>
        <input type="checkbox" id="cores" name="cores[Verde]" value="">Verde<br>
        <input type="checkbox" id="cores" name="cores[Roxo]" value="">Roxo<br>
        <input type="checkbox" id="cores" name="cores[Amarelo]" value="">Amarelo<br>
        <input type="checkbox" id="cores" name="cores[Branco]" value="">Branco<br>
        <input type="checkbox" id="cores" name="cores[Laranja]" value="">Laranja<br>
      </div>
      <div class="col-md-3">
        <input type="checkbox" id="cores" name="cores[Vermelho]" value="">Vermelho<br>
        <input type="checkbox" id="cores" name="cores[Azul]" value="">Azul<br>
        <input type="checkbox" id="cores" name="cores[Verde]" value="">Verde<br>
        <input type="checkbox" id="cores" name="cores[Roxo]" value="">Roxo<br>
        <input type="checkbox" id="cores" name="cores[Amarelo]" value="">Amarelo<br>
        <input type="checkbox" id="cores" name="cores[Branco]" value="">Branco<br>
        <input type="checkbox" id="cores" name="cores[Laranja]" value="">Laranja<br>
      </div>
        <div class="col-md-12" style="display: flex; justify-content:right;">
            <button class="btn btn-info">Cadastrar</button>
        </div>
    </form>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <title>Talisma Mat. p/ Construção, Marmoraria e Vidraçaria</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Talisma materiais para contrução" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="../../../public/assets/img/img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <!-- Libraries Stylesheet -->
    <link href="../../../public/assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="../../../public/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../public/assets/css/style.css" rel="stylesheet" />
  </head>

  <body>
    
    <div style="display:flex; justify-content:center; padding:20px;">
        <form class="container row" >
            <div class="col-sm-12">
                <h3>Cadastrar Uasuários</h3>
            </div>
            <div class="col-sm-12">
                <div class="row" style="display:flex; justify-content:space-evenly;">
                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="nome">Nome:</label>
                        <input type="text" class="form-control" id="nome" name="nome">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="sobrenome">Sobrenome:</label>
                        <input type="text" class="form-control" id="sobrenome" name="sobrenome">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="tipo_cadastro">Tipo de cadastro:</label>
                        <select class="form-control" id="tipo_cadastro" name="tipo_cadastro">
                        <option value="Pessoa Fisica">Pessoa Física</option>
                        <option value="Pessoa Juridica">Pessoa Jurídica</option>
                        </select>
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="num_cpf" id="label_cpf">CPF:</label>
                        <input type="text" class="form-control" id="num_cpf" name="num_cpf">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="num_cpf" id="label_cpf">Inscrição Estadual:</label>
                        <input type="text" class="form-control" id="num_cpf" name="num_cpf">
                    </div>

                </div>
            </div>
            <div class="col-sm-12">
                <div class="row" style="display:flex; justify-content:space-around !important;">
                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="genero">Gênero:</label>
                        <select class="form-control" id="genero" name="genero">
                        <option value="Homem">Homem</option>
                        <option value="Mulher">Mulher</option>
                        <option value="Outros">Outros</option>
                        </select>
                    </div>
                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" style="width: 120px !important;" id="senha" name="senha">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="telefone">Telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="pais">País:</label>
                        <input type="text" class="form-control" id="pais" name="pais">
                    </div>

                </div>
            </div>

            <div class="col-sm-12" style="display:flex; justify-content:center;">
                <div class="row" style="display:flex; justify-content:space-evenly;">
                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="nome_rua">Nome da rua:</label>
                        <input type="text" class="form-control" id="nome_rua" name="nome_rua">
                    </div>
                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="num_casa">Número da casa:</label>
                        <input type="text" class="form-control" style="width: 120px !important;" id="num_casa" name="num_casa">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="nome_bairro">Nome do bairro:</label>
                        <input type="text" class="form-control" id="nome_bairro" name="nome_bairro">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="cidade">Cidade:</label>
                        <input type="text" class="form-control" id="cidade" name="cidade">
                    </div>

                    <div class="form-group" style="margin: 15px 5px; height: auto;">
                        <label for="estado">Estado:</label>
                        <input type="text" class="form-control" id="estado" name="estado">
                    </div>


                </div>
            </div>
            <div class="col-sm-12" style="display:flex; justify-content:space-between; align-items:center;">
                <div class="form-group" style="margin-top: 15px; height: auto;">
                    <label for="cep">CEP:</label>
                    <input class="form-control"  type="text" style="width: 120px !important;" id="cep" name="cep" ><br><br>
                </div>
                    <div>
                        <button class="btn btn-primary btn-block" style="width:450px; background-color:blue; color:#fff !important; border:none; font-weight:bold;" type="submit">Cadastrar</button>
                    </div>
            </div>
            </form>
        </div>

                
        
    </div>
  </body>
  <script>
    $(document).ready(function() {
        // Define o listener para o select
        $("#tipo_cadastro").on("change", function() {
            // Verifica se o valor selecionado é "Pessoa Juridica"
            if ($(this).val() === "Pessoa Juridica") {
            // Atualiza o texto da label para "CNPJ"
            $("#label_cpf").text("CNPJ:");
            } else {
            // Caso contrário, atualiza o texto para "CPF"
            $("#label_cpf").text("CPF:");
            }
        });
    });
 </script>







</html>
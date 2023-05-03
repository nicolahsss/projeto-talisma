<?php
session_start();
require __DIR__ .  '/../../../../vendor/autoload.php';
require '../../../../adm/config/conexao.php';
require '../../../../adm/consultasSQL/consultaProdutosNoCarrinho.php';

?>
<h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Pagar com Cartão de Credito</span></h5>
<div class="bg-light p-30">


<style>
    #form-checkout {
      display: flex;
      flex-direction: column;
      max-width: 600px;
    }

    .container {
      height: 24px;
      display: inline-block;
      border: 1px solid rgb(118, 118, 118);
      border-radius: 2px;
      padding: 1px 2px;
    }
  </style>
  <form id="form-checkout">
    <div id="form-checkout__cardNumber" name="" class="container"></div>
    <div id="form-checkout__expirationDate" name="" class="container"></div>
    <div id="form-checkout__securityCode" name="" class="container"></div>
    <input type="text" name="" id="form-checkout__cardholderName" />
    <select id="form-checkout__issuer" name="">
    <option value="mastercard" name="">Mastercard</option>
    <option value="visa" name="">Visa</option>
    <option value="americanexpress" name="">American Express</option>
  </select>
  <select id="form-checkout__installments" name="">
    <option value="1">1x sem juros</option>
    <option value="2">2x sem juros</option>
    <option value="3">3x sem juros</option>
    <option value="4">4x sem juros</option>
    <option value="5">5x sem juros</option>
    <option value="6">6x sem juros</option>
  </select>
  <select id="form-checkout__identificationType" name="">
    <option value="cpf">CPF</option>
    <option value="cnpj">CNPJ</option>
    <option value="rg">RG</option>
    <option value="passport">Passaporte</option>
  </select>
    <input type="text" name="" id="form-checkout__identificationNumber" />
    <input type="email" name="" id="form-checkout__cardholderEmail" />

    <button type="submit" id="form-checkout__submit">Pagar</button>
    <progress value="0" class="progress-bar">Carregando...</progress>
  </form>



</div>

<script src="https://sdk.mercadopago.com/js/v2"></script>


<script>
    const mp = new MercadoPago("TEST-e95dc122-b8bc-40dd-8419-ae8f8cb39e40");
</script>

<script>
    
    const cardForm = mp.cardForm({
      amount: "100.5",
      iframe: true,
      form: {
        id: "form-checkout",
        cardNumber: {
          id: "form-checkout__cardNumber",
          placeholder: "Número do cartão",
        },
        expirationDate: {
          id: "form-checkout__expirationDate",
          placeholder: "MM/YY",
        },
        securityCode: {
          id: "form-checkout__securityCode",
          placeholder: "Código de segurança",
        },
        cardholderName: {
          id: "form-checkout__cardholderName",
          placeholder: "Titular do cartão",
        },
        issuer: {
          id: "form-checkout__issuer",
          placeholder: "Banco emissor",
        },
        installments: {
          id: "form-checkout__installments",
          placeholder: "Parcelas",
        },        
        identificationType: {
          id: "form-checkout__identificationType",
          placeholder: "Tipo de documento",
        },
        identificationNumber: {
          id: "form-checkout__identificationNumber",
          placeholder: "Número do documento",
        },
        cardholderEmail: {
          id: "form-checkout__cardholderEmail",
          placeholder: "E-mail",
        },
      },
      callbacks: {
        onFormMounted: error => {
          if (error) return console.warn("Form Mounted handling error: ", error);
          console.log("Form mounted");
        },
        onSubmit: event => {
          event.preventDefault();

          const {
            paymentMethodId: payment_method_id,
            issuerId: issuer_id,
            cardholderEmail: email,
            amount,
            token,
            installments,
            identificationNumber,
            identificationType,
          } = cardForm.getCardFormData();

          fetch("../../../adm/validacoes/pagamento/finalizaPagamentoCartaoCredito.php", {
            method: "POST",
            headers: {
              "Content-Type": "application/json",
            },
            body: JSON.stringify({
              token,
              issuer_id,
              payment_method_id,
              transaction_amount: Number(amount),
              installments: Number(installments),
              description: "Descrição do produto",
              payer: {
                email,
                identification: {
                  type: identificationType,
                  number: identificationNumber,
                },
              },
            }),
          })
            .then(response => {
            if (!response.ok) {
            throw new Error('Falha ao processar pagamento');
            }
            console.log('O pagamento esta sendo processado.');

        })
        .catch(error => {
            console.error(error);

        });
        },
        onFetching: (resource) => {
          console.log("Fetching resource: ", resource);

          // Animate progress bar
          const progressBar = document.querySelector(".progress-bar");
          progressBar.removeAttribute("value");

          return () => {
            progressBar.setAttribute("value", "0");
          };
        }
      },
    });

</script>

<!--     <form action="../../../adm/validacoes/pagamento/finalizaPagamentoCartaoCredito.php" method="post">
        <input type="hidden" value="<?php /* echo number_format($valor_total,2,',','.'); */?>" name="total_pedido">
    <div class="row">
            <div class="col-md-6 form-group">
                <label>Email</label>
                <input class="form-control" name="email" type="text" placeholder="">
            </div>
            <div class="col-md-6 form-group">
                <label>Numero do cartão</label>
                <input class="form-control" name="numero_cartao" type="text" placeholder="">
            </div>
            <div class="col-md-6 form-group">
                <label>Nome do titular</label>
                <input class="form-control" name="nome_titular" type="text" placeholder="">
            </div>
            <div class="col-md-6 form-group">
                <label>Código de segurança</label>
                <input class="form-control" name="codigo_seguranca" type="text" placeholder="">
            </div>
            <div class="col-md-6 form-group">
                <label>Mês de expiração</label>
                <input class="form-control" name="mes_expiracao" type="text" placeholder="">
            </div>
            <div class="col-md-6 form-group">
                <label>Ano de expiração</label>
                <input class="form-control" name="ano_expiracao" type="text" placeholder="">
            </div>
            <div class="col-md-6 form-group">
                <label>Nº parcelas</label>
                <select name="parcelas" class="custom-select">
                    <option value="1" selected>1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label>CPF</label>
                <input class="form-control" name="cpf" type="text" placeholder="">
            </div>
            <div class="col-md-12 form-group">
                <button name="" onclick="createToken()" type="submit" class="btn btn-info btn-block">Pagar</button>
            </div>
        </div>
    </form> -->
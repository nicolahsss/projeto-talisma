<?php
session_start();
require __DIR__ .  '/../../../../vendor/autoload.php';
require '../../../../adm/config/conexao.php';
require '../../../../adm/consultasSQL/consultaProdutosNoCarrinho.php';

?>
<h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Pagar com Cartão de Credito</span></h5>
<div class="bg-light p-30">
<link rel="stylesheet" href="opcoesCheckout/pagamentoCartaoCredito.css">
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
      const mp = new MercadoPago("TEST-e95dc122-b8bc-40dd-8419-ae8f8cb39e40");
</script>
<style>
    #form-checkout {
      display: flex;
      flex-direction: column;
      max-width: 100%;
    }

    .container {
      margin: 10px;
      height: 40px !important;
      display: inline-block;
      border: 1px solid rgb(118, 118, 118);
      border-radius: 2px;
      padding: 1px 5px;
    }
    
  </style>
  <form id="form-checkout">
    <div class="row" style="display: flex; justify-content:center;">
        <input class="col-md-6 container" type="text" id="form-checkout__cardholderName" />
        <input class="col-md-5 container" type="email" id="form-checkout__cardholderEmail" />
        <select class="col-md-6 container" id="form-checkout__identificationType"></select>
        <input class="col-md-5 container" type="text" id="form-checkout__identificationNumber" />

        <div class="col-md-12" style="display: flex; justify-content:space-evenly;">
            <div id="form-checkout__cardNumber" class="container"></div>
            <div id="form-checkout__expirationDate" class="container"></div>
            <div id="form-checkout__securityCode" class="container"></div>
        </div>

        <select id="form-checkout__issuer" class="col-md-3 container"></select>
        <select id="form-checkout__installments" class="col-md-8 container"></select>
    </div>

    <button class="btn btn-info btn-block" type="submit" id="form-checkout__submit">Pagar</button>
    <progress value="0" class="progress-bar">Carregando...</progress>
  </form>



</div>



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
                    console.log({
            payment_method_id,
            issuer_id,
            email,
            amount,
            token,
            installments,
            identificationNumber,
            identificationType,
          });

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
            console.log(token);

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

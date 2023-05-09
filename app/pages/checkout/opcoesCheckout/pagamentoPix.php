<?php
session_start();
require __DIR__ .  '/../../../../vendor/autoload.php';
require '../../../../adm/config/conexao.php';
require '../../../../adm/consultasSQL/consultaProdutosNoCarrinho.php';
?>
<h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Pagar Pix</span></h5>
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
    <input type="hidden" value="394.97" name="total" id="form-checkout__total">
    <div>
      <div>
        <label for="payerFirstName">Nome</label>
        <input id="form-checkout__payerFirstName" name="payerFirstName" type="text">
      </div>
      <div>
        <label for="payerLastName">Sobrenome</label>
        <input id="form-checkout__payerLastName" name="payerLastName" type="text">
      </div>
      <div>
        <label for="email">E-mail</label>
        <input id="form-checkout__email" name="email" type="text">
      </div>
      <div>
        <label for="identificationType">Tipo de documento</label>
        <select id="form-checkout__identificationType" name="identificationType" type="text"></select>
      </div>
      <div>
        <label for="identificationNumber">Número do documento</label>
        <input id="form-checkout__identificationNumber" name="identificationNumber" type="text">
      </div>
    </div>

    <div>
      <div>
        <input type="hidden" name="transactionAmount" id="transactionAmount" value="100">
        <input type="hidden" name="description" id="description" value="Nome do Produto">
        <br>
        <button type="submit" id="botao-pagamento">Pagar</button>
      </div>
    </div>
  </form>



  <div id="exibe_qr_code">

  </div>


</div>



<script>
  const form = document.querySelector('#form-checkout');
  const button = document.querySelector('#botao-pagamento');
  const qrCodeContainer = document.querySelector('#exibe_qr_code');

  form.addEventListener('submit', (event) => {
    event.preventDefault();

    const total = document.querySelector('#form-checkout__total').value;
    const email = document.querySelector('#form-checkout__email').value;
    const nome = document.querySelector('#form-checkout__payerFirstName').value;
    const sobrenome = document.querySelector('#form-checkout__payerLastName').value;
    const tipo_documento = document.querySelector('#form-checkout__identificationType').value;
    const num_documento = document.querySelector('#form-checkout__identificationNumber').value;

    fetch('../../../adm/validacoes/pagamento/finaliza_pagamento_pix.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify({
        total,
        email,
        nome,
        sobrenome,
        tipo_documento,
        num_documento,
      }),
    })
      .then((data) => {
        
        qrCodeContainer.innerHTML = '<img src="data:image/png;base64,${data.qr_code_base64}">';
        console.log(qrCodeContainer);
      })
      .catch((error) => {
/*         console.error(error);
        console.log('Erro no bloco catch:', error); */
      });
  });

    (async function getIdentificationTypes() {
      try {
        const identificationTypes = await mp.getIdentificationTypes();
        const identificationTypeElement = document.getElementById('form-checkout__identificationType');

        createSelectOptions(identificationTypeElement, identificationTypes);
      } catch (e) {
        return console.error('Error getting identificationTypes: ', e);
      }
    })();

    function createSelectOptions(elem, options, labelsAndKeys = { label: "name", value: "id" }) {
      const { label, value } = labelsAndKeys;

      elem.options.length = 0;

      const tempOptions = document.createDocumentFragment();

      options.forEach(option => {
        const optValue = option[value];
        const optLabel = option[label];

        const opt = document.createElement('option');
        opt.value = optValue;
        opt.textContent = optLabel;

        tempOptions.appendChild(opt);
      });

      elem.appendChild(tempOptions);
    }
</script>

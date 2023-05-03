<?php
require_once __DIR__ . "../../../../vendor/autoload.php";
require '../../consultasSQL/consultaProdutosNoCarrinho.php';

// Defina o token de acesso da sua conta do Mercado Pago
MercadoPago\SDK::setAccessToken('TEST-6819797163859486-042622-0bb4b98962c0524f7c5f20053166a16b-669050670');

// Crie um objeto de preferência de pagamento
$preference = new MercadoPago\Preference();

$itens = [];
$payer = [];
$notify = [];
  foreach($consulta_carrinho->fetchAll(PDO::FETCH_ASSOC) as $i => $item) {
    $item[$i] = new MercadoPago\Item();
    $item[$i]->title = $item['title'];
    $item[$i]->quantity = $item['quantity'];
    $item[$i]->unit_price = $item['unit_price'];
  
    array_push($itens, $item[$i]);
  }
  $preference->items = $itens;

// Adicione o item à preferência de pagamento
$preference->items = array($item);

// Crie um objeto de pagador
$payer = new MercadoPago\Payer();
$payer->email = 'email_do_pagador@teste.com';

$preference->payer =(object) [
	"name" => $exibeDadosUser['nome_usuario'],
	"surname" => $exibeDadosUser['sobrenome'],
	"email" => $exibeDadosUser['ds_email'],
	"phone" => [
		"area_code" => "11",
		"number" => $exibeDadosUser['ds_telefone']
	],
	"identification" => [
		"type" => "CPF",
		"number" => $exibeDadosUser['ds_cpf']
	],
	"address" => [
		"street_name" => $exibeDadosUser['ds_endereco'],
		"street_number" => 123,
		"zip_code" => $exibeDadosUser['no_cep']
	],
];

// Crie um objeto de pagamento com cartão de crédito
$payment = new MercadoPago\Payment();
$payment->transaction_amount = 100.00;
$payment->token = 'TOKEN_DO_CARTAO';
$payment->description = 'Minha descrição';
$payment->installments = 1;
$payment->payment_method_id = 'visa';
$payment->payer = 'Matheus';

$preference->notification_url="https://brandaodev.com.br/pastateste/index.php";
	$preference->statement_descriptor = "MEUNEGOCIO";
	$preference->external_reference = $exibeDadosUser['id_usuario'];
	
    $preference->save();

// Adicione o pagamento à preferência de pagamento
$preference->payment_methods = array(
  'excluded_payment_methods' => array(
    array('id' => 'amex')
  ),
  'excluded_payment_types' => array(
    array('id' => 'atm')
  ),
  'installments' => 1,
  'default_payment_method_id' => 'visa',
  'default_installments' => 1,
);
$preference->auto_return = 'approved';

// Salve a preferência de pagamento e exiba o link de pagamento
$preference->save();
echo '<pre>';
var_dump($preference);


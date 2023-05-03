<?php
session_start();
require_once __DIR__ . "/../../../vendor/autoload.php";
require '../../config/conexao.php';
require '../../consultasSQL/consultaProdutosNoCarrinho.php';
require '../../manipulacoes/manipularDadosUser/consultaDadosUser.php';


MercadoPago\SDK::setAccessToken('TEST-6819797163859486-042622-0bb4b98962c0524f7c5f20053166a16b-669050670');

$payment = new MercadoPago\Payment();
   $payment->transaction_amount = (float)$_POST['transactionAmount'];
   $payment->token = $_POST['token'];
   $payment->description = $_POST['description'];
   $payment->installments = (int)$_POST['installments'];
   $payment->payment_method_id = $_POST['paymentMethodId'];
   $payment->issuer_id = (int)$_POST['issuer'];
   $payment->notification_url = 'https://brandaodev.com.br/pastateste/index.php';
 
   $payer = new MercadoPago\Payer();
   $payer->email = $_POST['email'];
   $payer->identification = array(
       "type" => $_POST['identificationType'],
       "number" => $_POST['identificationNumber']
   );
   $payment->payer = $payer;
 
   $payment->save();

   // Get the payment ID
$payment_id = $payment->id;

 
   $response = array(
       'status' => $payment->status,
       'status_detail' => $payment->status_detail,
       'id' => $payment->id,
       'token' =>$payment->token,
       'description' =>$payment->description,
       'installments' =>$payment->installments,
       'identification' =>$payment->identification
   );
  
   $log = date('Y-m-d H:i:s') . ' - ' . json_encode($response) . PHP_EOL;
file_put_contents('log.txt', $log, FILE_APPEND);

/* // Recebe os dados do formulário via POST
$email = $_POST['email'];
$numero_cartao = $_POST['numero_cartao'];
$nome_titular = $_POST['nome_titular'];
$codigo_seguranca = $_POST['codigo_seguranca'];
$mes_expiracao = $_POST['mes_expiracao'];
$ano_expiracao = $_POST['ano_expiracao'];
$parcelas = $_POST['parcelas'];
$cpf = $_POST['cpf'];

// Cria um objeto de pagamento com os dados do cartão
$payment_data = array(
    "transaction_amount" => $valor_total,
    "description" => "Descrição do pagamento",
    "payment_method_id" => "visa", // Identificador do método de pagamento
    "token" => $_POST['token'], // Token do cartão de crédito gerado pelo Mercado Pago
    "installments" => $parcelas,
    "payer" => array(
        "email" => $email,
        "identification" => array(
            "type" => "CPF",
            "number" => $cpf
        )
    )
);

$payer = new MercadoPago\Payer();
$payer->email = $email;
$payer->identification = array(
    "type" => "CPF",
    "number" => $cpf
);
$payment->payer = $payer;

$payment->save();

$response = array(
    'status' => $payment->status,
    'status_detail' => $payment->status_detail,
    'id' => $payment->id
);
echo json_encode($response);

// Verifica o status do pagamento
if ($payment->status == 'approved') {
    // Pagamento aprovado, faça o que precisa ser feito
    echo 'Aprovado caraio!!!!';
} else {
    // Pagamento não aprovado, trate o erro
    echo 'disgraaaçaaaa!!!';
} */






















/* session_start();
require_once __DIR__ . "/../../../vendor/autoload.php";
require '../../config/conexao.php';
require '../../consultasSQL/consultaProdutosNoCarrinho.php';
require '../../manipulacoes/manipularDadosUser/consultaDadosUser.php';

MercadoPago\SDK::setAccessToken('TEST-8813162843930589-110723-9d5a8b03ef579bcfb287d43630dc8aa4-669050670');

$preference = new MercadoPago\Preference();

// Recebe os dados do formulário via POST
$email = $_POST['email'];
$numero_cartao = $_POST['numero_cartao'];
$nome_titular = $_POST['nome_titular'];
$codigo_seguranca = $_POST['codigo_seguranca'];
$mes_expiracao = $_POST['mes_expiracao'];
$ano_expiracao = $_POST['ano_expiracao'];
$parcelas = $_POST['parcelas'];
$cpf = $_POST['cpf'];

$itens = [];
$payer = [];
$notify = [];
foreach($dados_carrinho as $produto) {
  $item = new MercadoPago\Item();
  $item->id = $produto['produto_id'];
  $item->title = $produto['nome'];
  $item->quantity = $produto['quantidade'];
  $item->unit_price = $produto['preco'];

  array_push($itens, $item);

}
$preference->items = $itens;

$preference->payer =(object) [
"name" => $exibeDadosUserLogado['nome'],
"surname" => $exibeDadosUserLogado['sobrenome'],
"email" => $exibeDadosUserLogado['email'],
"phone" => [
    "area_code" => "11",
    "number" => $exibeDadosUserLogado['telefone']
],
"identification" => [
    "type" => "CPF",
    "number" => $exibeDadosUserLogado['num_cpf']
],
"address" => [
    "street_name" => $exibeDadosUserLogado['nome_rua'],
    "street_number" => $exibeDadosUserLogado['num_casa'],
    "zip_code" => $exibeDadosUserLogado['cep']
],
"payment_methods" => [
    "excluded_payment_methods" => [
        ["id" => "amex"] // Exclua o método de pagamento American Express
    ],
    "excluded_payment_types" => [
        ["id" => "ticket"] // Exclua o tipo de pagamento "Boleto"
    ],
    "installments" => 12, // Defina o número máximo de parcelas
    "default_installments" => 1, // Defina o número de parcelas padrão
    "default_payment_method_id" => "visa" // Defina o método de pagamento padrão
]

];

$payment = new MercadoPago\Payment();

// Configura os dados do pagamento
$payment->transaction_amount = (float)$valor_total;
$payment->description = 'Descrição do pagamento';
$payment->payment_method_id = 'visa'; // Identificador do método de pagamento
$payment->payer = array(
    'email' => $email,
    'identification' => array(
        'type' => 'CPF',
        'number' => $cpf
    )
);
$payment->installments = $parcelas;
 */

// Cria um objeto MercadoPago\Preference e adiciona o objeto MercadoPago\Item e o objeto MercadoPago\Payer a ele
/* $preference->notification_url="https://brandaodev.com.br/pastateste/index.php";
	$preference->statement_descriptor = "MEUNEGOCIO";
	$preference->external_reference = $exibeDadosUserLogado['usuario_id'];
	
    $preference->save();

  echo '<pre>';
  var_dump($preference);
  echo '</pre>';
 */
  
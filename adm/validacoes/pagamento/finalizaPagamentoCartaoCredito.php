<?php
session_start();
$dados = json_decode(file_get_contents("php://input"));
?>
<script src="https://sdk.mercadopago.com/js/v2"></script>

<?php
require_once __DIR__ . "/../../../vendor/autoload.php";
require '../../config/conexao.php';
require '../../consultasSQL/consultaProdutosNoCarrinho.php';
require '../../manipulacoes/manipularDadosUser/consultaDadosUser.php';


MercadoPago\SDK::setAccessToken('TEST-6819797163859486-042622-0bb4b98962c0524f7c5f20053166a16b-669050670');



$payment = new MercadoPago\Payment();
   $payment->transaction_amount = (float)$dados->transaction_amount;
   $payment->token = $dados->token;
   $payment->description = $dados->description;
   $payment->installments = $dados->installments;
   $payment->payment_method_id = $dados->payment_method_id;
   $payment->issuer_id = (int)$dados->issuer_id;
   $payment->notification_url = 'https://brandaodev.com.br/pastateste/index.php';
 
   $payer = new MercadoPago\Payer();
   $payer->email = $dados->payer->email;
   $payer->identification = array(
       "type" => $dados->payer->identification->type,
       "number" => $dados->payer->identification->number
   );
   $payment->payer = $payer;
 
   $payment->save();


    $response = array(
        'status' => $payment->status,
        'status_detail' => $payment->status_detail,
        'id' => $payment->id,
        'token' =>$payment->token,
        'description' =>$payment->description,
        'installments' =>$payment->installments,
        'identification' =>$payment->payer->identification
    );

   $log = date('Y-m-d H:i:s') . ' - ' . json_encode($response) . PHP_EOL;
   file_put_contents('log.txt', $log, FILE_APPEND);

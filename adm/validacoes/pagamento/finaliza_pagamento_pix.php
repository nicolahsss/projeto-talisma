<?php
session_start();
?>
<script src="https://sdk.mercadopago.com/js/v2"></script>

<?php
require_once __DIR__ . "/../../../vendor/autoload.php";
require '../../config/conexao.php';
require '../../consultasSQL/consultaProdutosNoCarrinho.php';
require '../../manipulacoes/manipularDadosUser/consultaDadosUser.php';

$amout = $_POST['total'];
$email = $_POST['email'];
$nome = $_POST['payerFirstName'];
$sobrenome = $_POST['payerLastName'];
$tipo_documento = $_POST['identificationType'];
$num_documento = $_POST['identificationNumber'];

$cep = $exibeDadosUserLogado['cep'];
$rua = $exibeDadosUserLogado['nome_rua'];
$num_casa = $exibeDadosUserLogado['num_casa'];
$bairro = $exibeDadosUserLogado['nome_bairro'];
$cidade = $exibeDadosUserLogado['cidade'];
$estado = $exibeDadosUserLogado['estado'];



 MercadoPago\SDK::setAccessToken('TEST-6819797163859486-042622-0bb4b98962c0524f7c5f20053166a16b-669050670');

 $payment = new MercadoPago\Payment();
 $payment->transaction_amount = $amout;
 $payment->description = "Título do produto";
 $payment->payment_method_id = "pix";

   $payer = new MercadoPago\Payer();
   $payer->first_name = $nome;
   $payer->last_name = $sobrenome;
   $payer->email = $email;
   $payer->identification = array(
       "type" => $tipo_documento,
       "number" => $num_documento
   );
   $payment->payer = $payer;

 $payment->save();


 $response = array(
    'status' => $payment->status,
    'status_detail' => $payment->status_detail,
    'id' => $payment->id,
    'description' =>$payment->description,
    'identification' =>$payment->payer->identification

);

$log = date('Y-m-d H:i:s') . ' - ' . json_encode($response) . PHP_EOL;
file_put_contents('log.txt', $log, FILE_APPEND);


?>

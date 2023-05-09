<?php
session_start();
$dados_pix = json_decode(file_get_contents("php://input"));
?>
<script src="https://sdk.mercadopago.com/js/v2"></script>

<?php
require_once __DIR__ . "/../../../vendor/autoload.php";
require '../../config/conexao.php';
require '../../consultasSQL/consultaProdutosNoCarrinho.php';
require '../../manipulacoes/manipularDadosUser/consultaDadosUser.php';

$amout = $dados_pix->total;
$email = $dados_pix->email;
$nome = $dados_pix->first_name;
$sobrenome = $dados_pix->last_name;
$tipo_documento = $dados_pix->identification->type;
$num_documento = $dados_pix->identification->number;

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

 $resposta = array(
  'qr_code_base64' => $payment->point_of_interaction->transaction_data,
 );

$log = date('Y-m-d H:i:s') . ' - ' . json_encode($payment->point_of_interaction->transaction_data) . PHP_EOL;
file_put_contents('log.txt', $log, FILE_APPEND);

header('Content-Type: application/json');
echo json_encode($resposta);
?>

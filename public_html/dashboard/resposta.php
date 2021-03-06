<?php

include_once "../Classes/Usuario.php";

foreach ($_POST as $valor => $indice) {
  $$valor = $indice;
}

$id = $_GET['id'];
$tp = $_GET['tp'];

if ($tp == "cont") {
  $obj =  new Usuario();
  $dados = ["status" => $status, "idcontato" => $id];
  $obj->alterar("contato", "status=:status WHERE idcontato=:idcontato", $dados);
} else if ($tp == "sup") {
  $obj =  new Usuario();
  $dados = ["status" => $status, "idsuporte" => $id];
  $obj->alterar("suporte", "status=:status WHERE idsuporte=:idsuporte", $dados);
} else if ($tp == "orc") {
  $obj =  new Usuario();
  $dados = ["status" => $status, "idorcamento" => $id];
  $obj->alterar("orcamento", "status=:status WHERE idorcamento=:idorcamento", $dados);
}

// Variável que junta os valores acima e monta o corpo do email
require_once "../vendor/phpmailer/class.phpmailer.php";

define('EMAIL', 'suporte.ezy3d@gmail.com'); // <-- Insira aqui o seu GMail
define('SENHA', 'senhasegura123456'); // <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo)
{
  global $error;
  $mail = new PHPMailer();
  $mail->CharSet = 'UTF-8';
  $mail->IsSMTP(); // Ativar SMTP
  $mail->SMTPDebug = 1; // Debugar: 1 = erros e mensagens, 2 = mensagens apenas
  $mail->SMTPAuth = true; // Autenticação ativada
  $mail->SMTPSecure = 'ssl'; // TLS REQUERIDO pelo GMail
  $mail->Host = 'smtp.gmail.com'; // SMTP utilizado
  $mail->Port = 465; // A porta 587 deverá estar aberta em
  $mail->IsHTML(true);
  $mail->Username = EMAIL;
  $mail->Password = SENHA;
  $mail->SetFrom($de);
  $mail->Subject = $assunto;
  $mail->Body = $corpo;
  $mail->AddAddress($para);
  if (!$mail->Send()) {
    $error = 'Mail error: ' . $mail->ErrorInfo;
    echo $error;
    return false;
  } else {
    echo "<script>
      alert('Enviado com sucesso!');
      window.location.href='index.php';
      </script>";
    return true;
  }
}

smtpmailer($destinatario, 'suporte.ezy3d@gmail.com', null, $assunto, $resposta);

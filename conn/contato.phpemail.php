<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <title>Enviando E-mail com php</title>
</head>
<body>
   
<?php 
 
 require 'mailer/PHPMailerAutoload.php';

 $mail = new PHPMailer();
 $mail->isSMTP();
 $mail->SMPTAuth=true;
 $mail->SMTPSecure = 'tls';
 $mail->Username = 'exemplo@gmail.com';
 $mail->Password = 'senha';
 $mail->Port = 3306;

 $mail->setFrom('remetente@email.com.br');
$mail->addReplyTo('no-reply@email.com.br');
$mail->addAddress('email@email.com.br', ‘Nome’);
$mail->addAddress('email@email.com.br', 'Contato'’);
$mail->addCC('email@email.com.br', 'Cópia');
$mail->addBCC('email@email.com.br', 'Cópia Oculta')

$mail->isHTML(true);
$mail->Subject = 'Assunto do email';
$mail->Body    = 'Este é o conteúdo da mensagem em <b>HTML!</b>';
$mail->AltBody = 'Para visualizar essa mensagem acesse http://site.com.br/mail';
$mail->addAttachment('/tmp/image.jpg', 'nome.jpg');

if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada.';
}

$mail->SMTPDebug = 3;
$mail->Debugoutput = 'html';
$mail->setLanguage('pt');

require 'mailer/PHPMailerAutoload.php';

require 'mailer/PHPMailerAutoload.php';

     if (isset($_POST['assunto']) && !empty($_POST['assunto'])) {
               $assunto = $_POST['assunto'];
   }
   if (isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
                $mensagem = $_POST['mensagem'];
    }

    $mail = new PHPMailer;
 
    $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = 'tls';
  $mail->Username = 'exemplo@gmail.com';
   $mail->Password = 'senha';
   $mail->Port = 587;

   $mail->setFrom('ulicustodio@gmail.com', 'Contato');
   $mail->addAddress(' ulicustodio@mail.com.br');

  $mail->isHTML(true);
 
   $mail->Subject = $assunto;
   $mail->Body    = nl2br($mensagem);
  $mail->AltBody = nl2br(strip_tags($mensagem));

  if(!$mail->send()) {
       echo 'Não foi possível enviar a mensagem.<br>';
        echo 'Erro: ' . $mail->ErrorInfo;
             } else {
       header('Location: index.php?enviado');
   }





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
 $nome =$_POST['nome'];
 $email= $_POST['email'];
 $menssagem=$POST['Msg'];
 $data_envio =$_POST['d/m/y'];
 $hora_envio =$_POST['h:i:s'];

 // corpo do emmail//
 $arquivo = "

 <p><b>Nome: </b>$nome</p>
 <p><b>Nome: </b>$Email</p>
 <p><b>Nome: </b>$menssagem</p>
 <p><b>Nome: </b>$data_envio</p> as <b>$hora_envio<b></p>
 </html>
 ";
  // emailpara quem sera enviados o formulario//

  $destinos ="ulicustodio@gamil.com">
  $assunto  ="contato pelo site">

  // Este sempre devera existir para garantir a exibiçao dos caracteres

   $headers = "Mime-version: 1.0\n";
   $headers = "content - type:txt/html; charset=iso8859\n";
   $headers = "from: $nome <$email>";
   
   // Eenviar o Email//

   mail($destino, $assunto, $arquivo, $headers);

   echo "<email http-equiv= 'resfresch' content='10;URL=../contato.html'>";
   ?>










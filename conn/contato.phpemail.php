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

namespace app\Comunication;
  use PHPMAILER\PHPMAILER\PHPMAILER;
  use PHPMAILER\PHPMAILER\EXCEPTION;
use Stringable;

class Email{

const Host ='smtp.gmail.com';
const  USER ='ulicustodio@gmail.com';
const  PASS ='smtp.gmail.com';
const  Secure= 'chuletaquente';
const  Port =   '3306';
const  charset= 'UTEF';


const FROM_Email ='ulicustodio@gamil.com';
const FROM_NAME  = 'Ulisses Renato';



private $error;
public function geterror(){
    return $this->error;
}


}
//*
  //@param string array $addreses
 //@ param string $subject
 // @param string $body
 // @param string array $attachments
 // @param atring array $css
 // @param string array $bccs
 //@return  boolean
   //*  
 Public function sendemail($addders,$subject,$body,$attachments = [], $css = [], $bccs= []){
 $this->error ='';
}

$obmail = new PHPMAILER(true);
try{

$obEmaiL->isSmtp(true);
$obEmaiL->HOST = self::host;
$obEmaiL-> SMTPAuth=true;
$obEmaiL-> Username=self::User;
$obEmaiL-> Password=self::PASS;
$obEmail->SMTPSecure=self::Secure;
$oEbmaiL-> Port = self::Port;
$obEmaiL->charSet =self::CHARSET;
}

$obEmaiL->setfrom(self::FROM_EMAIL,self::FROM_Name);

$addresses = is_array($addreses) ? $addreses :[$addreses];
foreach($addders as $addders){
    $obmail->addAddress(address);
}

$attachments = is_array($attachments) ? $attachements : [$attachments];

foreach($attachements as $attachements){
    $obmail->addAttachment(attachements);
}


$css = is_array($ccs) ? $css :[$ccs];
foreach($css as $cc){
    $obmail->addCC($cc);

    $bss = is_array($bcs) ? $bss :[$bcs];
    foreach($bss as $bcc){
        $obmail->addbCC($cc);

  $obmai->isHTML(true);
  $obmail->Subject =$subject;
  $obmail->Body=$body;

}

return $obmail->send();

}'catch'(PHPMAILERException){
    $this->error =$e->getMessage();
  return false;
}


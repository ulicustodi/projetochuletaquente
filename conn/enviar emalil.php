<?php

require 'DIR'  .'/vendor/bin/php';

use \app\Comunication\Email;

$address='emailulicustodio@gamil.com';
$subject='ola Mundo:)';
$body ='<b>Ola Mundo</b><i>Ola mundo</';

$obEmail= new EMAIL;
$Sucesso= $obEmail-> sendEmail ($address,$subject,$body);

echo $sucesso ? 'Messagem enviada com sucesso!' : $obEmail->getError();
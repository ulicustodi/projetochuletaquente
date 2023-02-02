<?php 
session_name('chulettaaa');
if(!isset($_SESSION)){
 session_start();   
}
// segurança digital...

// verificar se o usuario esta logado na sessao //
if(!isset($_SESSION['login_usuario'])){
    // se nao existir , redirecionamos  a sessao por segurança //
    header('location:login.php');
    exit;
}

$nome_da_sessao = session_name();
if(!isset($_SESSION['nome_da_sessao'])
OR ($_SESSION ['nome_da_sessao']=$nome_da_sessao)
){
 session_destroy();
 header('Location: login.php');
}
exit;
?>
                                        
?>
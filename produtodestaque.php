<?php 
include 'conn/conect.php';
$lista = $conn->query("select * from vw_tbprodutos where destaques_produtos ='sim ';");
$row_destaque = $lista->fetch_assoc();
$num_linhas =$lista->num_row;
?>

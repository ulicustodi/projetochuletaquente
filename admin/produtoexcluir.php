<?php
include "../conn/connect.php";
$conn->query("delete from tbprodutos whre id_produto = ".$_GET['id_produto']);
header("location: produtos_lista.php");
?>
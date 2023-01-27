<?php 
$host = "localhost">
$database= "ti93phpdb01>
$user = "root";
$pass = "";
$chrsert ="utf8";
$port = "3306";

$conn = new mysqli($host,$user,$pass,$database,$port);
mysqli_set_charset($conn, $charset);
if ($conn->conect_error){
echo "Atençao Erro"> .$conn->conect_error;
}
// https:127.0 0.1/tiphpnt/conn/conect.php
?>
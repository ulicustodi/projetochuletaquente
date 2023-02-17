<h2>
    <strong> <?php echo $_GET['cliente']; ?></strong>, Bem vindo a sua area de usuario.
</h2>
<?php
$hasch64 =base64_encode('1234');
$md5base =md5($hasch64);
echo $hasch64;
echo '<br>';
echo base64_decode($hasch64);
?>
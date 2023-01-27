<?php
include "conn/connect.php";
$idtipo =$_get['id_tipo'];
$listaPorTipo =$conn->query("select * from vw_tbprodutos where id_tipo_produto");
$rowPOrtipo = $listaPorTipo->fetch_assoc();
$numrows=$listaPorTipo->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="styleleshet" href="css/bootstrap-min.css">
    <link rel="stylesheet"  href="css/estilo.css">
    <title>Busca por tipo</title>
</head>
<body class="fundo fixo">
<?php include "menu_publico.php"?>
<div class="container">

<!----- mostrar se a consulta retornar vazio--->
<?php if($numRows==0)<?<php
<h2 class="breadcrump arlert-danger"></h2>
<a hrf="javascript:window.history.go(-1) "class="btn btn-danger">
<span class="glyphicon glyphicon-chevron-left">
</span>

</a>
<?php?>
 Nao ha produtos cadastrados deste tipo</h2>
<h2 class=<h2 class="breadcrump arlert-danger"></h2>
<a hrf="javascript:window.history.go(-1) "class="btn btn-danger">
<span class="glyphicon glyphicon-chevron-left"></span>
</a>
<strong><?php echo $rowPOrtipo['rotulo_tpo'];?></strong>
</div>
</h2>
<div class="row">
<?php do{?>
    <div class="col-sm-6 col-md-4">
 <div class="thumbnail">
    <a href="produtos_detalhes.php? id_produto=<?php echo $rowPOrtipo['id_produto']?>">
   <a href=""  class="images/<?php echo $rowPOrtipo['image_produto']?>" class ="img-responsive img-rounded">
</a>
<div class="caption text-right">
    <h3 class="text-danger">
    <strong><?php  echo $rowPOrtipo['descri_produto']?></strong>
    </h3>
    <p class="text-warning">
    <strong><?php echo $rowPOrtipo['descri_produto']?></strong>
</h3>
    <p class="tetxt-warning"></p>
    <strong></strong><?php echo ($rowPOrtipo['resumo_produto'],0,42'...')?>
  </p>
 <button class="btn btn -defaut  disabled" role="button" style="cursor:default">
 <?php echo "r$" .number_format($rowPOrtipo['valor_produto'],2'',',')?>
 </button>
</a>

    </h3>
 </div>

</div>
    <?php }while($rowlistaPOrtipo=$rowlistaPOrtipo->fetch_assoc());?>
</div>
<?php?>



</div>




</body></body>
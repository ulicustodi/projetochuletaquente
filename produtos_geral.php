<?php 
include 'conn/connect.php';
$lista = $conn->query("select * from vw_");
$row_Produtos =$lista->fetch_assoc();
$num_linhas - $lista->num_rows;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<body class="fundofixo">
<?php include 'menu_publico.php'?>
<div class="container">
<!----Mostrar a consulta retornar vazio ---->
<?php if($numRows = = 0){?>
    <h2 class="breadcrump alert-danger">
     <a href="javascript:window.history.go(-1)"class="btn btn-danger"> 
    <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<strong><?php echo $rowPortipo['rotulo_tipo'];?></strong>
    </h2>
    <div class="row">
    <div class="col-sm-6-md-4">
    <a href="produto_detalhe.php?id_produto=<?php echo$rowPortipo['id_produto']?>">
</strong>
<img src="images/<?php echo $rowPorTipo['imagem_produto']?>" class="img-responsive img-rounded">
</a>
<div class="caption text-right">
<h3 class="text-danger">
<strong><?php echo $rowPorTipo['descri_produto']?>

</strong>
<p class="text-warning">
<strong><?php echo $rowPorTipo['rotulo_tipo']?></strong>
<p class="text-left">
<?php echo mb_strimwidth( $rowPorTipo['resumo_produto'],0,42,'...')?>
</p>

<button class="btn btn-default disabled" role="button"style="cursor:default">

<?php echo "R$ ".number_format($rowPorTipo['valor_produto'], 2,',',',')?>
</button>
<a href="">
<span></span>
</a>
</p>
</div>
</div>
</div>
<?php }while($rowPorTipo = $listaPorTipo -> fetch_assoc()); ?>
</div>
</div>
<?php{?>
    </div>
    </body>





</button>








</div>



</body>




    /body>
</html>
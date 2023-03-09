<?php
include 'acesso_com.php';
include '../conn/connect.php';

if($_POST){ 
    if($_FILES['imagem_produto']['name']){
        $nome_img=$_FILES['imagem_produto']['name'];
        $dir_img= "../images/".$nome_img;
        move_uploaded_file($tmp_img, $nome_img); 
    }

}else{
    $nome_img = $_POST['imagem_produto_atual'];
}
$id_tiproduto = $_POST['id_tipo_produto'];
$destaque_produto = $_POST['destaques_produto'];
$descri_produto = $_POST['descri_produto'];
$resumo_produto = $_POST['resumo_produto'];
$valor_produto = $_POST[' valor_produto'];
$imagem_produto = $_POST['imagem_produto'];


$id =$_POST['id_produto'];

$updateSql = "update tbprodutos
                        set id_tipo_produto = '$id_tipo_produto',
                        destaques_produto = '$destaques_produto',
                        descri_produto = '$descri_produto',
                        resumo_produto  = '$resumo_produto,
                        valor_produto =   '$valor_produto'
                        imagem_produtos =   '$imagem_produto'
                      where id_produto = $id";

    $resultado = $conn->query($updateSql);
    if($resultado){
    header('location:produtos_lista.php');
    }
if($_GET){
    $id_form = $_GET['id_produto'];
}else{
    $id_form =0;
}
    $lista = $conn->query("select * from tb tbproduto where id_produto = $id_form");
    $row = $lista->fetch_assoc();
    $num = $lista->num_rows;

// selecionar od dados de chave estrangeira (lista de tipos de produtos )
$consulta_fk = "select * from tbtipos order by rotulo_tipo asc";
$lista_fk =$conn->query($consulta_fk)
$consulta_fk ="select * from tbtipos order by rotulo_tipo asc";
$lista_fk = $conn->query($consulta_fk);
$row_fk = $lista_fk->fetch_assoc();
$nlinhas = $lista_fk->num_rows;


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
    </body>
    <?php include "menu_adm.php";?>
    <main class="container">
     <div class="row">
     <div class="col-xs-12 col-sm-offset-3 col-sm-6 col-md-ofsset-4 col-md-4">
     <h2 class="bradcrump text-danger">
        <h2 hrf="produtos_lista.php">
        <h2 button type="btn btn-danger">
        <span class= "glyphicon glyphicon-chevron-left"></span>

        </button>
    </a>
      inserindo Produtos
        </h2>
     </h2>

    </div class="thumbnail">
    <div class= "arlet arlert-danger" role="arlet">
    <form action="produtos_insere .php" method="post" name="form_produto_insere enctype=multpart/form-data" >
    <name="for_produto_insere" enctype="multpart/form-data" id="form_produto_insere">
   <label for="id_tipo_produto">Tipo:</label>
   <div class="input-group">
   <span class=glyphicon glyphicon-tasks aria-hidden="true"></span>
   <select name="id_tipo_produto" id="tipo_produto" class="form-control" require>
    <?php do {?>
     <opition value="<?php echo $row_fk['id_tipo']?>">
    
    </option>
    




   </select>

    </form>

    </main>

   
   




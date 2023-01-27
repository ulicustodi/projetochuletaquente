<?php 
include "conn/conect.php"
$lista_tipos= $conn->query('select *from tbtipos order by rotulo_tipo;');
$rows_tipos = $lista_tipos->fetch_all();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Menu publico</title>
</head>
<body>
 <!-- abre a barra de navegçao --> 
 <nav class="fixed navbar fixed-top navbar-light navbar-inverse bg-light">
    <div class="container-fluid">
       <!-- agrupamento mobile-->
       <div class="navbar-header">
        <button class="navbar-tooggle.collapsed" type="button" data-toggle="collapse" data-target="#menupublico" aria-expanded="false"></button>
        <div class=navbar-header>
     <span class="sr-only"> togglle<span>
      <span class="sr-only">icon-bar</span>
      <span class="sr-only">icon-bar</span>
     <span class="sr-only"> icon-bar</span>
         </button>
        <a href="index.php" class="navabar-brand">
        <img src="logo_png.jpg" alt="logotipo chuleta quente">
        </a>
        </div>
    <!--- fecha agrupamento mobile-->
    <!-- nav direita -->
    <div class="collapse navbar-collapse" id="menupublico">
    <ul class="nav bar navbar-nav navbar-right"><li></li>
    <li class= "actve"></li>
    <a href="index.php">
    <span class="glyphicon glyphicon-home"></span>
    <li><a href="index.php#destaques">DESTAQUES</a></li>
    <li><a href="index.php#destaques">Produtos</a></li>
    <!-- dropdown-->
    <li class="dropdown">
    <a class="droopdown-toggle" data-toggle="dropdown" role="button"  aria-haspopup="true" aria-expanded="false" >
     Tipos 
     <span class="caret"></span>
    </a>
     <ul class="dropdown-menu">
     <?php foreach($rows_tipos as $row){?>
     <li><a href="produtos_por_tipo.php? id_tipo=<?php echo $row[0]?>"><?php echo $row[2]?></a></li>
       <?php}?>
     </ul>
    </a>
     </li>
    <li>
    <li></li>
    <li><li><a href="index.php#destaques">Contato</a></li>
    <!-- inicio do formulario-->
      <form action="produtos_busca.php" method="get" name="form-busca"
      id="form-busca" class="navbar-form navbar-left"role="search">
      <div class="input-group">
     <input type="search" name="buscar" id="buscar" size="9" class="form-control"
     aria-label="search" placeholder="buscar produto" required>
    
     <div class="input"-group-btn>
      <button class="btn btn-defaut">
       <span class="glyphicon-search"></span>
      </button>
     </div>
     </div>
     <!--- fim do formulario -->
    </form>

    <li class="active">
     <a href="index.php">
     <span class="glyphicon gliphicon-user">&nbsp;ADIMIN/cliente</span>

     </a>
    



    </li>
    </div>
 </nav>
</body>
</html>
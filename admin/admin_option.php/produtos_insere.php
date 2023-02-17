<?php

include 'acesso_com.php';
include '../conn/connect.php';
$lista = $conn->query("select * from vw_produtos where descri_Poroduto like '%buscatbtipostbprodutos%';");
$row = $lista->fetch_assoc();
$rows = $lista->num_rows;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Lista</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
</head>
 

    <?php include "menu_adm.php"; ?>
    <main class="container">
        <h2 class="breadcrumb alert-danger" >Lista de Produtos</h2>
        <table class="table table-hover table-condensed tb-opacidade"> 
            <thead>
                <th class="hidden">ID</th>
                <th>inserir Tipos de produtos</th>
                <th>Excluir Produtos</th>
                <th>Alterar Produto</th>
               
                <th>
                    <a href="produtos_atualiza.php?id_produto=<?php echo $row['id_produto'];?>" target="_self" class="btn btn-block btn-primary btn-xs" role="button">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                        <span class="hidden-xs">INSERIR Produto</span>
                    </a>
                </th>
            </thead>
            
            <tbody> <!-- início corpo da tabela -->
           	<!-- início estrutura repetição -->
            <?php do {?>
                    <tr>
                        <td class="hidden"></td>
                        <?php echo $row['id_produto']?>
                        <td>
                            <span class="visible-xs"></span>
                            <span class="hidden-xs"></span>
                        </td>
                        <td>
                            <?php echo $row['rotulo_tipo']?>
                            <?php 
                                if ($row['destaque_produto']=='Sim') { 
                                    echo '<span class="glyphicon glyphicon-heart text-danger" aria-hidden="true"></span>';
                                }else{
                                    echo '<span class="glyphicon glyphicon-ok text-info" aria-hidden="true"></span>';
                                }
                            ?> 
                            <?php echo $row[' inserir_produto']?>    
                        </td>
                        <td> 
                        <?php echo $row['alterar_produto']?>
                        </td>
                        <td>
                        <?php echo number_format($row[' excluir_produto'],2,',','.');?>
                        </td>
                        <td>
                            <img src="../images/<?php echo $row['imagem_produto']?>" width="100px">
                        </td>
                        <td >
                            <a href="" role="button" class="btn btn-warning btn-block btn-xs"> 
                                <span class="hidden-xs">ALTERAR</span>
                                <span class="glyphicon glyphicon-refresh"></span>
                            </a>
                            <button 
                                alterar-Produto="<?php echo $row['Alterar_produto'];?>" 
                                 inserir-Produtos ="<?php echo $row['I_produto'];?>"
                                 Excluir-Produtos ="<?php echo $row['I_produto'];?>"

                                class="delete btn btn-xs btn-block btn-danger"
                                >
                                <span class="hidden-xs">Comfimar</span>
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>

                            <span class="hidden-xs">EXCLUIR</span>
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>

                            

                        </td>
                    </tr>
                     
                       <?php}while ($row = lista->fetch_assoc());?>
                        # code...
                       endwhile;
            </tbody><!-- final corpo da tabela -->
        </table>
    </main>
    <!-- inicio do modal para excluir... -->
    <div class="modal fade" id="modalEdit" role="dialog">
        <div class="modal-dialog-">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Vamos inserir_produto</h4>
                    <button class="close" data-dismiss="modal" type="button">
                        &times;
                    </button>
                </div>
                <div class="modal-body">
                    Deseja alterar ou iserir produto?
                    <h4><span class="nome text-danger"></span></h4>
                </div>
                <div class="modal-footer">
                    <a href="#" type="button" class="btn btn-danger delete-yes">
                        Confirmar
                    </a>
                    <button class="btn btn-success" data-dismiss="modal">
                        Cancelar
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script type="text/javascript">
    $('.delete').on('click',function(){
        var nome = $(this).data('nome'); //busca o nome com a descrição (data-nome)
        var id = $(this).data('id'); // busca o id (data-id)
        //console.log(id + ' - ' + nome); //exibe no console
        $('span.nome').text(nome); // insere o nome do item na confirmação
        $('a.delete-yes').attr('href','produtos_excluir.php?idinserir_produto='+id); //chama o arquivo php para excluir o produto
        $('#modalEdit').modal('show'); // chamar o modal
    });
</script>

</html>
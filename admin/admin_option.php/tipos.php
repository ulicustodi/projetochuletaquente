<?
include 'acesso_com.php';
include '../conn/connect.php';

include "conn/connect.php";
$busca=$Get_['buscar'];
$Lista = $conn->query("select * from vw_produtos where descri_Poroduto like '%".busca."'");
$row_produto = $Lista->fetch_assoc();
$num_linhas = $lista->num_rows; 

}else

  
$tiposdeprodutos = $_POST['tipos_produto_atual'];
 $id_tipo         = $_POST['id_tipos_produto'];
$excluir_produtos = $_GET['id_excluir_produtos'];
$inseri_produtos  =$_GET ['id_inserir_produtos'];
$inseri_resumo    =$_GET  ['id_inserir_resumo'];

$id =$_POST['id_produto'];

$updateSql = "update tbprodutos
                        set id_tipo_produto = '$id_tipo_produto',
                        tipos_produto = '$tipos_produto',
                        excluir_produto = '$excluir_produto',
                        inserir_produto  = '$inserir_produto,                    
                        alterar_produto  =  '$alterar_produto

                     $resultado = $conn->query($updateSql);
                        
                     resultado = $conn->query($updateSql);
    if($resultado){
    header('location:produtos_lista.php');
    }
if($_GET){
    $id_form = $_GET['id_produto'];
}else{
    $id_form =0;
}
    $lista = $conn->query(select * from tb tbproduto where id_produto"= $id_form");
    $row = $lista->fetch_assoc();
    $num = $lista->num_rows;

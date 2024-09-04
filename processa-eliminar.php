<?php 
	require_once  "inc/funcoes.php";
	verificarAcesso();

    //obter id do registro

    if(isset( $_GET['id']) &&  is_numeric($_GET['id'])){

     $id = $_GET['id'];

     //1- obter o nome ficheri  foto do resgsitro
      require_once "inc/basedados.php";
      $sql =  " SELECT * FROM tbchocolates WHERE id = $id";

      $linha = mysqli_query($bd, $sql);
      $campo = mysqli_fetch_assoc($linha);
      unlink("./uploads/").$campo['foto'];

      
      //2- eliminar resgistro da bas de dados
      $sql = "DELETE FROM tbchocolates WHERE id = $id";
      mysqli_query($bd,$sql);



        //exit;
    }


     header("Location: editar-chocolates.php");
     

?>
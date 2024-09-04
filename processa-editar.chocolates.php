<?php 
	require_once  "inc/funcoes.php";
	verificarAcesso();

	

    if($_SERVER["REQUEST_METHOD"] === "POST") {

		$tipo = $_POST["tipo"];
		$recheio = $_POST["recheio"];
		$caloria = $_POST['caloria'];
		$validade = $_POST['validade'];
		$codigo = $_POST['codigo'];
		$id = $_POST["id"];
		
		$fotoantiga = $_POST["fotoantiga"];
		

		// caso tenha que carragar uma fot nova
		if (isset($_FILES["foto"]["name"]) && $_FILES["foto"]["name"]!= ""){
			// elimina foto anterior
			unlink("./uploads/".$fotoantiga);

			//carrega foto nova
			$nomeFoto = uniqid().$_FILES["foto"]["name"];
			$caminho= "./uploads/".$nomeFoto;
			move_uploaded_file($_FILES["foto"]["tmp_name"], $caminho);

			//instruçao SQL de update
			$sql = " UPDATE tbchocolates SET
					 tipo ='$tipo',recheio ='$recheio', caloria ='$caloria', validade ='$validade',
					 codigo ='$codigo', foto ='$nomeFoto' 
					 WHERE id= $id";
					


		} else{

			// SQL sem carregamente de nova foto
			$sql = " UPDATE tbchocolates SET
					 tipo ='$tipo', recheio ='$recheio', caloria =  '$caloria',
					 validade ='$validade', codigo ='$codigo'					
					 WHERE id= $id";			
					

		}
		//importar base de dados 
		require_once "inc/basedados.php";
        mysqli_query($bd, $sql);

		header("Location: editar-chocolates.php");


	}	
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Processa Editar Fotos</title>
	<style>
			label{
				display: inline-block;
				width: 10%;
			}
			

			body{
				background-color: lightgoldenrodyellow;
			}


			h1{
				color: brown;
			}

		</style>
</head>
<body>
	
</body>
</html>
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
       
   
   
           
       }

       
?>


<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Chocolate Show</title>

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
		<h1>Editar Chocolates</h1>

		<?php require "inc/inc-menu.php"; ?>

		<h3>Olá, <?php echo	$_SESSION["nomeUtilizador"];?></h3>

		<h5>Editar Dados dos Chocolates</h5>

		<form  action="processa-editar.chocolates.php" method="post" enctype="multipart/form-data">
				<p>
					<label for ="tipo">Tipo</label>
					<select id="tipo" name="tipo" required>
						<option value="">Selecione o Tipo</option>
						<option value="1" <?php if ($campo['tipo']==1) { echo " selected ";} ?> >Branco</option>
						<option value="2" <?php if ($campo['tipo']==1) { echo " selected ";} ?> >Ao Leite</option>
						<option value="3"<?php if ($campo['tipo']==1) { echo " selected ";} ?> >Chocolate 60%</option>					
						<option value="4"<?php if ($campo['tipo']==1) { echo " selected ";} ?> >Preto</option>
					</select>

				</p>
				<p> 
					<label for = "recheio">Recheio</label>
					<select id="recheio" name="recheio" required>
						<option value="">Selecione o Recheio</option>
						<option value="1" <?php if ($campo['recheio']==1) { echo " selected ";} ?> >Castanha</option>
						<option value="2" <?php if ($campo['recheio']==1) { echo " selected ";} ?> >M&M's</option>
						<option value="3" <?php if ($campo['recheio']==1) { echo " selected ";} ?> >Frutas</option>				
						<option value="4" <?php if ($campo['recheio']==1) { echo " selected ";} ?> >Oreo</option>
					</select>
				</p>

				<p> 
					<label for = "ingredientes">Ingredientes</label>
					<input type="text" id="ingredientes" name="ingredientes" maxlength="50" required>
				</p>
				
				<p> 
					<label for = "caloria">Composição Calórica</label>
					<input value="<?php echo $campo['caloria']; ?>" type="number" id="caloria" name="caloria" maxlength="30" required>
				</p>
				<p> 
					<label for = "validade">Validade</label>
					<input value="<?php echo $campo['validade']; ?>" type="number" id="validade" name="validade" min=2023 max= "<?php echo date("Y");?>" required>
				</p>
				<p> 
					<label for = "codigo">Codigo</label>
					<input value="<?php echo $campo['codigo']; ?>" type="text" id="codigo" name="codigo" maxlength="10" required>
				</p>

				<p> 
					<label for = "foto">Foto</label>
					<input type="file" id="foto" name="foto" required>
				</p>

				<!-- Campo escondido com ID do registro a editar -->
					
				<input type="hidden" name="id" value=" <?php echo $id; ?>" />
				<input type="hidden" name="fotoantiga" value=" <?php echo $campo["foto"]; ?>" />
				

				<input type="submit" name="submit" value="Guardar Alterações" />
				

		</form>

	</body>
</html>

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
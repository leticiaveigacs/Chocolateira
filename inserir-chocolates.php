<?php 
	require_once  "inc/funcoes.php";
	verificarAcesso();
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
		<h1>Inserir Chocolates</h1>

		<?php require "inc/inc-menu.php"; ?>

		<h3>Olá, <?php echo	$_SESSION["nomeUtilizador"];?></h3>

		<h5>Registrar Novos Chocolates</h5>

		<form  action="processa-inserir.chocolates.php" method="post" enctype="multipart/form-data">
				<p>
					<label for ="tipo">Tipo</label>
					<select id="tipo" name="tipo" required>
						<option value="">Selecione o Tipo</option>
						<option value="1">Branco</option>
						<option value="2">Ao Leite</option>
						<option value="3">Chocolate 60%</option>					
						<option value="4">Preto</option>
					</select>

				</p>
				<p> 
					<label for = "recheio">Recheio</label>
					<select id="recheio" name="recheio" required>
						<option value="">Selecione o Recheio</option>
						<option value="1">Castanha</option>
						<option value="2">M&M's</option>
						<option value="3">Frutas</option>				
						<option value="4">Oreo</option>
					</select>
				</p>
				<p> 
					<label for = "ingredientes">Ingredientes</label>
					<input type="text" id="ingredientes" name="ingredientes" maxlength="50" required>
				</p>
				<p> 
					<label for = "caloria">Composição Calórica</label>
					<input type="number" id="caloria" name="caloria" maxlength="30" required>
				</p>
				<p> 
					<label for = "validade">Validade</label>
					<input type="number" id="validade" name="validade" min=2023 max= "<?php echo date("Y");?>" required>
				</p>
				<p> 
					<label for = "codigo">Codigo</label>
					<input type="text" id="codigo" name="codigo" maxlength="10" required>
				</p>

				<p> 
					<label for = "foto">Foto</label>
					<input type="file" id="foto" name="foto" required>
				</p>

				
					<input type="submit" name ="submit" value="Submit"/>
				

		</form>

	</body>
</html>
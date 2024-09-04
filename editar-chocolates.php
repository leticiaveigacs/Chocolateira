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
			table{
				width: 50%;
				border-collapse: collapse;
				margin: 2px 2px 2px 2px;
				text-align: center;
			}
			th,td{
				border: 3px solid burlywood;
				border-radius: 5px;

			}			

			body{
			background-color: lightgoldenrodyellow;
		}
		

		h1{
			color: brown;
		}
		</style>

	
		<script src="https://kit.fontawesome.com/65f22fe718.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


	</head>
	<body>
		<h1>Editar Chocolates</h1>

		<?php require "inc/inc-menu.php"; ?>


	<?php 
				
				require_once "inc/basedados.php";
				$sql = "SELECT * FROM tbchocolates ORDER BY id";
			
			
					//exsutar query e mostrar todas as linhas retornados

					$linhas= mysqli_query($bd, $sql);

					//inicio da tabela

					echo"
						<table>
							<thead>
								<tr>
									<th> ID </th>
									<th> Tipo </th>
									<th> Recheio </th>
									<th> Ingredientes </th>
									<th> Eliminar </th>
									<th> Editar </th>
								
								</tr>
							<thead>
							<tbody>	";

					while ($campo= mysqli_fetch_assoc($linhas)) 
					{

						switch ( $campo['tipo']) {
							case 1: $tipo= "Branco";break; 	
							case 2: $tipo= "Ao Leite";break; 
							case 3: $tipo= "Chocolote 60%";break; 
							default: $tipo= "Preto";
						}

						switch ( $campo['recheio']) {
							case 1: $recheio= "Casstanhas";break; 	
							case 2: $recheio= "M&M's";break; 
							case 3: $recheio= "Frutas";break; 
							default: $recheio= "Oreo";
						}

						//adicionar linha a tabela
						echo " 
							<tr>
								<td>{$campo['id']}</td>
								<td>$tipo</td>
								<td>$recheio</td>
								<td>{$campo['ingredientes']}</td>
								<td><a onclick=\" return confirm('Tem certeza?')\" href='processa-eliminar.php?id={$campo['id']}'><i class='fa-solid fa-trash'></i></a></td> 
								<td><a href='formulario-editar.php?id={$campo['id']}'> <i class='fa-solid fa-pen-to-square'></i></a></td>
							</tr>
						";
						
					}				

			
					echo"	</tbody>
					</table>  ";
	
	?>

	

</body>
</html>


		
		
		
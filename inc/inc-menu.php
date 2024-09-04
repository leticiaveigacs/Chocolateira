<?php 
	@session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inc-Menu</title>

	<!-- Link CSS  -->
    <link rel="stylesheet" href="inc/style.css">

</head>
<body>

<nav id="menu">
	<ul>
		
		<li><a href="index.php">Home</a></li>
		<!-- <li><a href="ver-user.php">Visualizar</a></li> -->
		<li><a href="pesquisar-user.php">Pesquisar</a></li>
		
		<?php 
			if (!isset($_SESSION["autenticado"])) {
				echo "<li><a href='autenticar.php'>Autenticar</a></li>";
			} else {
				echo "
				<li><a href='terminar-sessao.php'>Terminar Sessão</a></li>
				<li><a href='inserir-chocolates.php'>Inserir Chocolates</a></li>
				<li><a href='ver-chocolates.php'>Ver Chocolates</a></li>
				<li><a href='editar-chocolates.php'>Editar Chocolates</a></li>
				";
			}
		?>	
	</ul>
</nav>
	
</body>
</html>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Chocolate Show</title>

		<style> 
	

				body{
					background-color: lightgoldenrodyellow;
				}

				.caixa{
					border: 8px solid brown;
					width: 45%;
					height: auto;
					padding: 20px;
					margin-bottom: 30px;
					margin-left: auto;
					margin-right: auto;
					text-align: center;
					border-radius: 5px;

				}

				.caixa img {
					max-width: 100% ;
					max-height: 200px;
					height: auto;
					transition: 1s;

				}

				.caixa img:hover {
					/* transform: rotate(180deg); */
					max-height: 200px;
					transition: 1s;
					max-width: 100% ;
					max-height: 300px;

				}

				.tipo {
					color: blueviolet;
					background-color: #ffff;
					padding: 10px;
				}

				h1{
					color: brown;
				}

		</style>
		
	</head>
	<body>
		<h1>Autenticar</h1>

		<?php require "inc/inc-menu.php"; ?>
		
		<form action="processar-autenticacao.php" method="post">
			<p>
				<label for="email">e-Mail:</label>
				<input type="email" name="email" id="email" required>
			</p>	
			<p>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" required>
			</p>	
				
			<input type="submit" value="Autenticar">
		</form>
	</body>
</html>

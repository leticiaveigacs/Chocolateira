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

	<?php 
	
	$email = $_POST["email"];
	$password = md5($_POST["password"]);

	//conexao com a base dde  dados
	require_once ("inc/basedados.php");
	$sql= " SELECT * FROM tbutilizadores 
			 WHERE email='$email' AND password='$password'";
	
	$resultadoSql = mysqli_query($bd, $sql);

	if(mysqli_num_rows($resultadoSql)==1){
		//converter registro retornados pela SQL em array assossiativo
		$linha = mysqli_fetch_assoc($resultadoSql);		


		
	
	//dados de acesso validos
	session_start();
	$_SESSION["horaLogin"] = date("Y-m-d H:i:s");
	$_SESSION["autenticado"] = true;
	$_SESSION["nomeUtilizador"] = $linha['nome'];

	
	echo"<p> Autenticado com Sucesso!</p>";
	echo"<a href='index.php'> Clique para continuar</p>";
	
	}else{
		echo"<p style= 'color: red'> Dados de acesso inválidos!</p>";
	}


	?>
		
	</body>
</html>
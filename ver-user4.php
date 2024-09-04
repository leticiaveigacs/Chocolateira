<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Chocolate Show</title>

        <style>
            body{
                    background-color: bisque;
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
		<h1>Visualizar </h1>

		<?php require "inc/inc-menu.php"; ?>

        <?php
        require_once "inc/basedados.php";
        


		$sql = "SELECT * FROM tbchocolates ORDER BY id DESC LIMIT 1	"; 
		
		
				//exsutar query e mostrar todas as linhas retornados

				$linhas= mysqli_query($bd, $sql);

				while ($campo= mysqli_fetch_assoc($linhas)) 
				{

					switch ( $campo['tipo']) {
						case 1: $tipo= "Branco";break; 	
						case 2: $tipo= "Ao Leite";break; 
						case 3: $tipo= "Chocolote 60%";break; 
						default: $tipo= "Preto";
					}

					switch ( $campo['recheio']) {
						case 1: $recheio= "Castanhas";break; 	
						case 2: $recheio= "M&M's";break; 
						case 3: $recheio= "Frutas";break; 
						default: $recheio= "Oreo";
					}		


					echo " <div class = 'caixa'>
					<h3><span class='tipo'> $tipo</span>|$recheio</h3>
					
					<p>
						<a href='ver-user.php'>
							<img alt='' src='uploads/{$campo['foto']}'>
						</a> 
					 </p>

					</div> ";

				}		
    ?>

	</body>
</html>
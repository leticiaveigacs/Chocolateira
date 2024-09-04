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

            #botao {
                margin-left: 100px;
                margin-top: 10px;
            }

			#lupa{
				margin-left: 10px;
                margin-top: 10px;

			}



		</style>

		<script src="https://kit.fontawesome.com/65f22fe718.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


			
	</head>
	<body>
		<h1>Pesquisar</h1>

		<?php require "inc/inc-menu.php"; ?>	

		

		<?php 
		require_once "inc/basedados.php";
		
		?>


            <form action="processa-pesquisar-user.php" method="post" >
                     <p> 
                        <label for = "pesquisar">Palavra-Chave:</label>
                         <input placeholder="PESQUISAR" type="text" id="pesquisar" name="pesquisar" maxlength="30" required> <i id="lupa" class="fa-solid fa-magnifying-glass"></i>
                    </p>

                    <input id="botao" type="submit" name="submit" value="Enviar pesquisa" />
					
					
            </form>

			
            

     

	</body>
</html>
			
			
			
<!--         $nomeLivro = $_GET["pesquisarc"];
        $sql = "SELECT * FROM tblivraria WHERE titulo LIKE '%$nomeLivro%'"; -->


	


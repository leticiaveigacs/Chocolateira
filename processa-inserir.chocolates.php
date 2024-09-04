<?php 
	require_once  "inc/funcoes.php";
	verificarAcesso();

    if($_SERVER['REQUEST_METHOD'] === "POST") {
   
    
        // recuperar o dados digitsdos nos formulaiorios
        $tipo= $_POST["tipo"];
        $recheio = $_POST["recheio"];
        $ingredientes = $_POST["ingredientes"];
        $caloria = $_POST["caloria"];
        $validade=$_POST["validade"];
        $codigo=$_POST["codigo"];

        $nomeFoto=uniqid().$_FILES["foto"]["name"];

    // mover da pasta temporararia para pasta definitiva

    $caminho= "./uploads/".$nomeFoto;
    move_uploaded_file($_FILES["foto"]["tmp_name"], $caminho);

    //guardar o registro na base de dados

    require_once "inc/basedados.php";
    $sql= " 

    INSERT INTO tbchocolates(tipo, recheio, ingredientes, caloria, validade, codigo, foto)
    VALUES ('$tipo', '$recheio', '$ingredientes', '$caloria', '$validade','$codigo', '$nomeFoto')
    " ;

     mysqli_query($bd, $sql);


        //confirma a inserçao  do registro com sucesso
        $nrLinhasInseridas = mysqli_affected_rows($bd);
        if($nrLinhasInseridas ==1){
            echo "<p>Chocolate inserido com sucesso!</p>";
        } else {
            "<p>Ocorreu um erro ao inserir o Chocolate!! </p>";
        }

        //voltar formulário de inserçao
        echo "<a href= 'inserir-chocolates.php'>Inserir Chocolates</a>";

} else {
    echo "<p>Submeter Formulário</p>";
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
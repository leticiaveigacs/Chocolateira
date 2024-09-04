<?php 

// dados de  ligaçao a base de dados

$servidor = "localhost";
$basedados = "chocolateshow";
$utilizadorBD = "root";
$passwordBD = "";

//estaceler e guardar a ligacao

$bd = mysqli_connect($servidor, $utilizadorBD, $passwordBD, $basedados);

//confirmar a ligaçao com sucesso
if (!$bd) {
    echo "<p>Erro ao estabelecerr a ligaçao com a base de dados!</p>";
    echo "<p>Motivo do Erro:" .mysqli_connect_error()."</p>";
}



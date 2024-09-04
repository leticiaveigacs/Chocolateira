<?php

//verificar se ococreu autenticaçao com sucesso
function verificarAcesso(){

    //inicia a seccao caso nao tenha sido feito
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }


	if (!isset($_SESSION["autenticado"])) {

		header("Location: autenticaticar.php");
		exit;		
	}

}

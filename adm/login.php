<?php

	require_once 'conx.php';

	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['password']);

	try {
		
		$data = $pdo->query("SELECT id FROM usuario WHERE email='$email' AND senha='$senha'")->fetchAll();
		


	} catch (Exception $e) {

		echo "Erro: ".$e->getMessage();
		
	}

?>
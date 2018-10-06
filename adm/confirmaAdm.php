<?php

$host = "mysql:dbname=id7372057_projca;host=localhost";
$usuario = "id7372057_root";
$senha = "projeto";

	try {		

		$pdo = new PDO($host,$usuario,$senha);

	} catch (PDOException $e) {

		echo "Falha: ".$e->getMessages();

	}

	$h = $_GET['h'];

	if (!empty($h)) { /*Se variável h não estiver vazia, muda o status para 1 = Significa que o email foi confirmado*/
		
		$pdo->query("UPDATE usuario SET status='1' WHERE MD5(id)= '$h'");
		echo "Cadastro Confirmado com sucesso!";


	}

?>
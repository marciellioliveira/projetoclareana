<?php

$host = "mysql:dbname=projca;host=localhost";
$usuario = "root";
$senha = "";

	try {		

		$pdo = new PDO($host,$usuario,$senha);
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	} catch (PDOException $e) {

		    echo "Erro: ".$e->getMessage();

	}

?>
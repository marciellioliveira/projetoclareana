<?php 

	/* Pega os dados do usuário, faz o cadastro no banco de dados e envia mensagem de confirmação no email
	O status é iniciado com 0 e quando o usuário confirmar no email ele será um 
	OBS: Tem que ter STM para o email ser enviado*/


$host = "mysql:dbname=id7372057_projca;host=localhost";
$usuario = "id7372057_root";
$senha = "projeto";

	try {		

		$pdo = new PDO($host,$usuario,$senha);

	} catch (PDOException $e) {

		    echo "Erro: ".$e->getMessage();

	}

	$username = addslashes($_POST['username']);
	$email = addslashes($_POST['email']);
	$senha1 = md5(addslashes($_POST['senha1']));

	$pdo->query("INSERT INTO usuario SET username='$username', email='$email', senha='$senha1'");

	$id = $pdo->lastInsertId();
	$md5 = md5($id);

	$assunto = "Confirme seu cadastro<br>";
	$link = "confirma.php?h=".$md5;
	$mensagem = "<br>Clique aqui para confirmar seu cadastro".$link;
	$header = "From: Projeto Clareana";

	mail($email, $assunto, $mensagem, $header);

	header('Location: http://localhost/www/projetoclareana/adm/');

?>
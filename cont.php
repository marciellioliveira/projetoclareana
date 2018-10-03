 <?php 

  if (isset($_POST['BTEnvia'])) {

  	$nome = $_POST['nome'];
  	$email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

  	//echo $nome."\n".$email."\n".$telefone."\n".$mensagem;

  	 //Remetente
     $email_remetente = $email; //Envia mensagem

     //Configuração do Email
     $email_destinatario = "m-oliveiraa@live.com"; //Recebe mensagem
     $email_reply = "$email";
     $email_assunto = "Contato Formmail";

     //Monta o corpo da mensagem
     $email_conteudo = "Nome = $nome\n";
     $email_conteudo = "Email = $email\n";
     $email_conteudo = "Telefone = $telefone\n";
     $email_conteudo = "Mensagem = $mensagem\n";

     //Seta os headers
     $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );

     //Enviando Email
     if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
        echo "</b>E-Mail enviado com sucesso!</b>"; 
     } else { 
       echo "</b>Falha no envio do E-Mail!</b>"; 
     } 

  }    //Fecha BTEnvia       

  //https://king.host/wiki/artigo/formulario-de-contato-php/

?>

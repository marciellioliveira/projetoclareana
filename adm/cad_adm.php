 <?php 

  if (isset($_POST['btCadAdm'])) {

  	$email = $_POST['email'];
    $senha = $_POST['senha'];

  	 //Remetente
     $email_remetente = "projetoclareana@gmail.com"; //Envia mensagem

     //Configuração do Email
     $email_destinatario = $email; //Recebe mensagem
     $email_reply = $email_remetente;
     $email_assunto = "Confirmar Cadastro | Projeto Clareana";

     //Monta o corpo da mensagem
     $email_conteudo = "Email = $email\n";
     $email_conteudo = "Senha = $senha\n";

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

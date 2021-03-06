<!DOCTYPE html>
<html lang="en">
<head>
  <title>Projeto Clareana</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS -->  
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  


  <!-- JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
 <nav class="navbar navbar-default"> <!-- Inicio Menu -->
  <div class="container-fluid" id="menu">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" id="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Projeto Clareana</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav" id="collapse">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="sobre.php">Sobre</a></li>
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="voluntarios.php">Voluntários</a></li>
        <li><a href="fundadores.php">Fundadores</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>
      
      <ul class="nav navbar-nav navbar-right" id="navbar-right">
        <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="pesquisar aqui">
        </div>
        <button type="submit" class="btn btn-default">Enviar</button>
      </form>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav> <!-- Fim Menu -->
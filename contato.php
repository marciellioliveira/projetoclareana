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

  <?php
    require_once 'navbar.php';
  ?>

  <div class="jumbotron" id="jumbotron">  
    
    <!-- Inicio Meio -->
    <div class="row">

      <h5 id="contato">Contato</h5>
      <hr id="separacao">
      <br>
      <div class="col-sm-6">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.843834476319!2d-45.01627668523655!3d-22.659610434793912!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cccac0b2f092dd%3A0x3c5dab004e1c683f!2sR.+Bom+Jesus%2C+Cachoeira+Paulista+-+SP%2C+12630-000!5e0!3m2!1spt-BR!2sbr!4v1538584303052" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-sm-6">

          <form class="form-horizontal" role="form" method="post" action="cont.php" id="formulario">
            <h3>Projeto Clareana</h3><hr>
            <div class="form-group">
              <label for="name" class="col-sm-2 control-label">Nome</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo" value="">     </div>
            </div>
            <div class="form-group">
              <label for="email" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="exemplo@exemplo.com" value="">
              </div>
            </div>
            <div class="form-group">
              <label for="telefone" class="col-sm-2 control-label">Telefone</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="telefone" name="telefone" placeholder="(xx) x xxxx-xxxx" value="">     </div>
            </div>
            <div class="form-group">
              <label for="message" class="col-sm-2 control-label">Mensagem</label>
              <div class="col-sm-10">
                <textarea class="form-control" rows="4" name="mensagem" value=""></textarea>
                
              </div>
            </div>
            <div class="form-group" id="btn">
              <div class="col-sm-10 col-sm-offset-2">
                <input id="submit" type="submit" name="BTEnvia" value="Enviar" class="btn btn-primary">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-10 col-sm-offset-2">
               
              </div>
            </div>
          </form>

         

      </div>
    </div>
    <!-- Fim Meio -->

  </div> <!-- Fim jumbotron --> 

     <?php
        require_once 'footer.php';
     ?> 

  </div> <!-- Fim container-fluid -->


</body>
</html>

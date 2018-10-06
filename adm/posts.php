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

    <h2 id="o-projeto">O Projeto</h2>

     <div class="row" id="posts">
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="/w3images/lights.jpg">
            <img src="imgs/teste.png" alt="Lights" style="width:100%">           
          </a>      
        </div>


      </div>

       

      <div class="col-md-8" id="texts">
         
       <p>Uma explicação sobre o projeto aqui Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>

       <p>Uma explicação sobre o projeto aqui Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>

       <p>Uma explicação sobre o projeto aqui Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>

       <p>Uma explicação sobre o projeto aqui Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>

       <!--<p>Uma explicação sobre o projeto aqui Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>

       <p>Uma explicação sobre o projeto aqui Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>-->
         
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

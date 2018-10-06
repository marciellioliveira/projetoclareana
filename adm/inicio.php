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
    <div class="row">
      <div class="col-sm-6">
        <!-- Inicio Slide de Imagens -->
        
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="imgs/teste.png" alt="Los Angeles">
              </div>

              <div class="item">
                <img src="imgs/teste.png" alt="Chicago">
              </div>

              <div class="item">
                <img src="imgs/teste.png" alt="New York">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        <!-- Fim Slide de Imagens-->
      </div>
      <div class="col-sm-6" id="sobre-o-projeto">
        <!-- Inicio Sobre o Projeto -->
          <h1>Projeto Clareana</h1>
          <br>
          <p>Uma explicação sobre o projeto aqui
          Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.
          Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.
          </p>

          <p>Uma explicação sobre o projeto aqui
          Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.
          </p>
        
          <button type="button" class="btn btn-info btn-block" id="btn">Clique aqui para ser voluntário</button>
          <br>
          <div class="btn-group btn-group-justified">
            <a href="#" class="btn btn-primary" id="btn">Facebook</a>
            <a href="#" class="btn btn-primary" id="btn">Youtube</a>
            <a href="#" class="btn btn-primary" id="btn">Pinterest</a>
          </div>         
        <!-- Fim Sobre o Projeto -->
      </div> <!-- Fecha sobre-o-projeto -->
    </div> <!-- Fecha row -->

    <hr id="separacao">
    <!-- Inicio Meio -->

    <h2 id="o-projeto">O Projeto</h2>

     <div class="row" id="posts">
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="/w3images/lights.jpg">
            <img src="imgs/teste.png" alt="Lights" style="width:100%">
            <div class="caption">
              <h1>Titulo do Post</h1>              
            </div>
          </a>
          <p>Uma explicação sobre o projeto aqui Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="/w3images/nature.jpg">
            <img src="imgs/teste.png" alt="Nature" style="width:100%">
            <div class="caption">
              <h1>Titulo do Post</h1>              
            </div>
          </a>
          <p>Uma explicação sobre o projeto aqui Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="/w3images/fjords.jpg">
            <img src="imgs/teste.png" alt="Fjords" style="width:100%">
            <div class="caption">
              <h1>Titulo do Post</h1>
            </div>
          </a>
          <p>Uma explicação sobre o projeto aqui Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>
        </div>
      </div>
    </div>
    <div class="row" id="posts">
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="/w3images/lights.jpg">
            <img src="imgs/teste.png" alt="Lights" style="width:100%">
            <div class="caption">
              <h1>Titulo do Post</h1>              
            </div>
          </a>
          <p>Uma explicação sobre o projeto aqui Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="/w3images/nature.jpg">
            <img src="imgs/teste.png" alt="Nature" style="width:100%">
            <div class="caption">
              <h1>Titulo do Post</h1>              
            </div>
          </a>
          <p>Uma explicação sobre o projeto aqui Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="thumbnail">
          <a href="/w3images/fjords.jpg">
            <img src="imgs/teste.png" alt="Fjords" style="width:100%">
            <div class="caption">
              <h1>Titulo do Post</h1>
            </div>
          </a>
          <p>Uma explicação sobre o projeto aqui Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in.</p>
        </div>
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

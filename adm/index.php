 

  <?php 
    require_once 'header.php';
  ?>

  <div class="container-fluid" >   
    <div class="row" >
      <div class="col-md-6 col-md-offset-3" >
        <div class="panel panel-login" id="caixa">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <a href="#" class="active" id="login-form-link">Entrar</a>
              </div>
              <div class="col-xs-6">
                <a href="#" id="register-form-link">Cadastrar</a>
              </div>
            </div>
            <hr>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-lg-12">
                <form id="login-form" action="login.php" method="post" role="form" style="display: block;">               
                  <div class="form-group">
                    <input type="email" name="email" id="emailLog" tabindex="1" class="form-control" placeholder="email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="password" id="passwordLogin" tabindex="2" class="form-control" placeholder="senha">
                  </div>
                  <div class="form-group text-center">
                    <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                    <label for="remember" > Lembrar senha</label>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Entrar">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="text-center">
                          <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password" >Esqueceu a senha?</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>

                <script type="text/javascript">
                  
                  function validarSenha() {                    

                    var senha1 = document.getElementById("password").value;
                    var senha2 = document.getElementById("confirm_password").value;

                    //alert("Senha1: "+senha1+"            senha2: "+senha2);

                    if (senha1 == senha2) {
                      
                      return true;

                    } else {
                      
                      alert("As senhas estão diferentes!")
                      return false;

                    }

                  }



                </script>
                        
                <!-- Formulário de Cadastro -->
                <form id="register-form" action="cadastro.php" method="post" name="f1" role="form" style="display: none;" onsubmit="return validarSenha()">
                  <div class="form-group">
                    <input required type="text" minlength="4" name="username" id="username" tabindex="1"  class="form-control" placeholder="nome de usuario">
                  </div>
                  <div class="form-group">
                    <input required type="email" name="email" id="emailCad" tabindex="1" class="form-control" placeholder="email@email.com"  data-type="email">
                  </div>
                  <div class="form-group">
                    <input required type="password" pattern=".{6,}" title="A senha deve ter no minimo 6 caracteres" name="senha1" tabindex="2" class="form-control" placeholder="senha" data-type="password" id="password">
                  </div>
                  <div class="form-group">
                    <input required type="password" pattern=".{6,}" title="A senha deve ter no minimo 6 caracteres" name="senha2" tabindex="2" class="form-control" placeholder="confirmar senha" data-type="password" id="confirm_password">
                  </div>
                  <div class="form-group">
                    <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="submit" name="btCadAdm" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Cadastrar" >
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <?php
  require_once 'footer.php';
  ?>  




<!-- https://www.youtube.com/watch?v=-Ntvs91NEJE 
https://files.000webhost.com/
-->
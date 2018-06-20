<!DOCTYPE html>
<html>
<title>Login</title>
<head>
  <style type="text/css">
  .container {
    position:absolute;
    left:10px;
    top: 0%;
    width:10px;
    height:400px;
    z-index:1;
    opacity:.6;
    background-color: #58FAF4; 
  }

</style>
<?php
require_once('Shared/Header.php');
?> 
</head>

<body>
  <div id='painel'>
    <img src="../img/eng.jpg">
  </div>
  <?php
  require_once('Shared/Panel.php');
  ?>
<div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-10">
  <div class="container col-md-8">
    <div class="row">
      <div class="col-md-2 col-md-offset-4 text-center logo-margin ">
      </div>
      <div class="col-md-4 col-md-offset-4">
        <img src="../img/logo.png" alt="" width="350" height="150" class="img-responsive" />
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
      </div>
      <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">                  
          <div class="panel-heading">
            <h3 class="panel-title">Login</h3>
            <?php

            if(isset($_REQUEST['erro']))
            {
              $erro = $_REQUEST['erro'];
              echo "<font face='Arial' color='red'><strong>".$erro."</strong></font>";
            }
            else
            {
              echo "";
            }
            ?>
          </div>
          <div class="panel-body">
            <form role="form" action="../Controller/loginController.php?opcao=1" method="post">
              <fieldset>
                <div class="form-group">
                  <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                </div>
                <div class="form-group">
                  <input class="form-control" placeholder="Senha" name="senha" type="password" value="">
                </div>
                <div class="checkbox">
                  <label>
                    <a class="wow fadeInUp" href="Cliente/cadastrocliente.php"><font face='Arial' color='black'><strong>Sem cadastro?</strong></font></a>
                  </label>
                </div>
                <input class="btn btn-lg btn-primary btn-block" type="submit" value="Login"/>
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-1">
  </div>
</div>
  <script src="../../js/jquery-2.1.1.min.js"></script>      
  <script src="../../js/bootstrap.min.js"></script> 
  <script src="../../js/parallax.min.js"></script>
  <script src="../../js/wow.min.js"></script>
  <script src="../../js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="../../js/fliplightbox.min.js"></script>
  <script src="../../js/functions.js"></script>
</body>

</html>

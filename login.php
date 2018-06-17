<!DOCTYPE html>
<html>
    <title>Login</title>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/overwrite.css">
    <link href="../../css/animate.min.css" rel="stylesheet"> 
    <link href="../../css/style.css" rel="stylesheet" />  
</head>

<body style="background: #5882FA;">

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
            </div>
            <div class="col-md-4 col-md-offset-4">
              <img src=".../../img/logo.png" alt="" width="350" height="150" class="img-responsive" />
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
                        <form role="form" action="Controller\loginController.php?opcao=1" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Senha" name="senha" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <a class="wow fadeInUp" href="View/Cliente/cadastrocliente.php"><font face='Arial' color='black'><strong>Sem cadastro?</strong></font></a>
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
    <script src="../../js/jquery-2.1.1.min.js"></script>      
    <script src="../../js/bootstrap.min.js"></script> 
    <script src="../../js/parallax.min.js"></script>
    <script src="../../js/wow.min.js"></script>
    <script src="../../js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="../../js/fliplightbox.min.js"></script>
    <script src="../../js/functions.js"></script>
</body>

</html>

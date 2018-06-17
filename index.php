<!DOCTYPE html>
<html>
  <head>
    <title>Serviços.com</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/overwrite.css">
	<link href="css/animate.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet" />	
  </head>
  <body>	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Serviços.com</a>
                </div>              
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="">Home</a></li>
                        <li><a href="">Sobre</a></li>
                        <li><a href="Controller/tipoController.php?opcao=6">Serviços</a></li>
                        <?php
                            session_start();
                            if(isset($_SESSION['usuario']))
                            {
                            $user = $_SESSION['usuario'];
                            echo"<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>Bem Vindo: $user->Nome<span class='caret'></span></a>
                                    <ul class='dropdown-menu' role='menu'>
                                        <li><a href='Controller/clienteController.php?opcao=3&id=$user->CodCli'>Alterar meus dados</a></li>
                                        <li class='divider'></li>
                                        <li><a href='Controller/loginController.php?opcao=2'>Sair</a></li>
                                    </ul>
                                </li>";
                            }
                            else
                            {
                                echo"<li><a href='login.php'>Entrar</a></li>";
                                echo"<li><a href='View/Cliente/cadastrocliente.php'>Cadastrar</a></li>";
                            }
                        ?>
                        </a></li> 
                    </ul>
                </div>
            </div>
        </nav>       
    </header>

	<div class="slider">		
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">
				
				<ol class="carousel-indicators visible-xs">
					<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-slider" data-slide-to="1"></li>
					<li data-target="#carousel-slider" data-slide-to="2"></li>
				</ol>

				<div class="carousel-inner">
					<div class="item active">						
						<img src="img/7.jpg" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2><span>Os Melhores Profissionais</span></h2>

							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">				
								<form class="form-inline" action="Controller/tipoController.php?opcao=6">
									<div class="form-group">
										<input type="hidden" name="opcao" value="6">
										<button type="livedemo" class="btn btn-primary btn-lg" required="required">Escolha seu serviço</button>
									</div>	
								</form>
							</div>
						</div>
				    </div>
			
				    <div class="item">
						<img src="img/6.jpg" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.0s">								
								<h2>Equipes engajadas</h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.3s">								
								<p>Comprometimento com as necessidades do cliente.</p>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">				
								<form class="form-inline" action="Controller/tipoController.php?opcao=6">
									<div class="form-group">
										<input type="hidden" name="opcao" value="6">
										<button type="livedemo" class="btn btn-primary btn-lg" required="required">Escolha seu serviço</button>
									</div>	
								</form>
							</div>
						</div>
				    </div> 
				    <div class="item">
						<img src="img/1.jpg" class="img-responsive" alt=""> 
						<div class="carousel-caption">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">								
								<h2>Contrate </h2>
							</div>
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.9s">								
								<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="1.6s">				
								<form class="form-inline" action="Controller/tipoController.php?opcao=6">
									<div class="form-group">
										<input type="hidden" name="opcao" value="6">
										<button type="livedemo" class="btn btn-primary btn-lg" required="required">Escolha seu serviço</button>
									</div>	
								</form>
							</div>
							</div>
						</div>
				    </div> 
				</div>
				
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div>
		</div>
	</div>
	
	
	
	<footer>
		<div class="text-center">
			<div>
				 2018 . Desenvolvedores . Adriano Xavier . Bruna Alves
			</div>
        </div>									
	</footer>
    <script src="js/jquery-2.1.1.min.js"></script>		
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/parallax.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script type="text/javascript" src="js/fliplightbox.min.js"></script>
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>	
  </body>
</html>
    <header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="../../index.php">Serviços.com</a>
                </div>              
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="../../index.php">Home</a></li>
                        <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>Clientes<span class='caret'></span></a>
                            <ul class='dropdown-menu' role='menu'>
                                <li><a href="../../View/Cliente/cadastrocliente.php">Cadastrar cliente</a></li>
                                <li><a href="../../Controller/tipoController.php?opcao=2">Exibir clientes</a></li>
                            </ul>
                        </li>
                        <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>Serviços<span class='caret'></span></a>
                            <ul class='dropdown-menu' role='menu'>
                                <li><a href="../../View/Servico/cadastrar_servico.php">Cadastrar serviços</a></li>
                                <li><a href="../../Controller/servicoController.php?opcao=2">Exibir serviços</a></li>
                            </ul>
                        </li>
                        <li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'><a href="#">Tipo<span class='caret'></span></a>
                            <ul class='dropdown-menu' role='menu'>
                                <li><a href="../../View/Tipo/cadastrarTipo.php">Cadastrar Tipo</a></li>
                                <li><a href="../../Controller/tipoController.php?opcao=2">Exibir Tipo</a></li>
                            </ul>
                        </li>
                        <li><a href="../../Controller/tipoController.php?opcao=6">Contratação de Serviços</a>
                        </li>
                        <li><a href="../../Controller/carrinhoController.php?opcao=3">Meu carrinho</a>
                        </li>
                        <li><a href="">Sobre</a></li>
                        <?php
                            session_start();
                            if(isset($_SESSION['usuario']))
                            {
                            $user = $_SESSION['usuario'];
                            echo"<li class='dropdown'><a class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'>Bem Vindo: $user->Nome<span class='caret'></span></a>
                                    <ul class='dropdown-menu' role='menu'>
                                        <li><a href='../../Controller/clienteController.php?opcao=3&id=$user->CodCli'>Alterar meus dados</a></li>
                                        <li class='divider'></li>
                                        <li><a href='../../Controller/loginController.php?opcao=2'>Sair</a></li>
                                    </ul>
                                </li>";
                            }
                            else
                            {
                                echo"<li><a href='../../login.php'>Entrar</a></li>";
                                echo"<li><a href='../Cliente/cadastrocliente.php'>Cadastrar</a></li>";
                            }
                        ?>
                        </a></li> 
                    </ul>
                </div>
            </div>
        </nav>       
    </header>
    
    
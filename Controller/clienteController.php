<?php
     require_once('../Model/DAO/ClienteDao.php');
     require_once('../Model/Cliente.php');

     $opcao = $_REQUEST['opcao'];

     switch($opcao)
     {
                   case 1:
                        $cliente = new Cliente();
                        $cliente->setCliente($_REQUEST['nome'], $_REQUEST['tipo'], $_REQUEST['end'], $_REQUEST['tel'], $_REQUEST['cpf'], $_REQUEST['dt_nasc'], $_REQUEST['email'], $_REQUEST['senha']);
                        $clienteDao = new clienteDao();

                        $clienteDao->ClienteDao();
                        $clienteDao->incluirCliente($cliente);
                        header("Location:clienteController.php?opcao=6&pagina=1");
                        break;
                        
                   case 2:
                        $clienteDao = new clienteDao();
                        $lista = $clienteDao->getClientes();
                        session_start();
                        $_SESSION['clientes'] = $lista;
                        header("Location:clienteController.php?opcao=6&pagina=1");
                        break;
                        
                   case 3:
                        $id = $_REQUEST['id'];
                        $clienteDao = new ClienteDao();
                        
                        $cliente = $clienteDao->getCliente($id);
                        session_start();
                        $_SESSION['cliente'] = $cliente;
                        header('Location:../View/Cliente/atualizarCliente.php');
                        break;
                        
                   case 4:
                        $id = (int)$_REQUEST['id'];
                        $clienteDao = new ClienteDao();
                        $clienteDao->deletaCliente($id);
                        header("Location:clienteController.php?opcao=6&pagina=1");
                        break;
                        
                   case 5:
                        session_start();
                        $user = $_SESSION['usuario'];
                        $cliente = new Cliente();
                        $cliente->setCliente($_REQUEST['nome'], $_REQUEST['tipo'], $_REQUEST['end'], $_REQUEST['tel'], $_REQUEST['cpf'], $_REQUEST['dt_nasc'], $_REQUEST['email'], $_REQUEST['senha']);
                        $cliente->setCliente_id($_REQUEST['id']);
                        $clienteDao = new ClienteDao();
                        $clienteDao->atualizaCliente($cliente);
                        if ($user->Tipo_user==0) {
                        header("Location:clienteController.php?opcao=6&pagina=1");
                        }
                        elseif ($user->Tipo_user==1){
                        header("Location:../index.php");
                        }
                        break;

                   case 6:
                        $pagina = (int)$_REQUEST['pagina'];
                        
                        $clienteDao = new ClienteDao();
                        
                        $lista = $clienteDao->getClientesPaginacao($pagina);
                        $numpaginas = $clienteDao->getPagina();
                        
                        session_start();
                        
                        $_SESSION['clientes'] = $lista;
                        
                        header("Location:../View/Cliente/exibirclientes.php?paginas=$numpaginas");
                        break;     
}
?>


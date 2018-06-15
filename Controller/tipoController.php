<?php
     require_once('../Model/DAO/TipoDao.php');
     require_once('../Model/Servico.php');
     require_once('../Model/Tipo.php');

     $opcao = $_REQUEST['opcao'];

     switch($opcao)
     {

                    //CRIA TIPOS DE SERVIÇO NO BANCO.
                    case 1:
                        {
                        $tipo = new Tipo();
                        $tipo->setTipo($_REQUEST["nome"], $_REQUEST["valor"]);
                        $tipoDao = new TipoDao();
                        $tipoDao->incluirTipo($tipo);
                        header("Location:tipoController.php?opcao=2");
                        }
                        break;

                    //EXIBE OS TIPOS DE SERVIÇO CADASTRADOS
                   case 2:
                        {
                        $tipoDao = new tipoDao();
                        $lista = $tipoDao->getTipos();
                        session_start();
                        $_SESSION['tipos'] = $lista;
                        header("Location:../View/Tipo/exibirTipos.php");
                        }
                        break;

                    case 3:
                        $id = $_REQUEST['id'];
                        $tipoDao = new tipoDao();
                        
                        $tipo = $tipoDao->getTipo($id);
                        session_start();
                        $_SESSION['tipo'] = $tipo;
                        header('Location:../View/Tipo/atualizarTipo.php');
                        break;
                        
                   case 4:
                        $id = (int)$_REQUEST['id'];
                        $tipoDao = new tipoDao();
                        $tipoDao->deletaTipo($id);
                        header("Location:tipoController.php?opcao=2");
                        break;
                        
                   case 5:
                        $tipo = new Tipo();
                        $tipo->setTipo($_REQUEST['nome'], $_REQUEST['valor']);
                        $tipo->setTipo_id($_REQUEST['id']);
                        $tipoDao = new tipoDao();
                        $tipoDao->atualizaTipo($tipo);
                        header("Location:tipoController.php?opcao=2");
                        break;

                   
}
?>

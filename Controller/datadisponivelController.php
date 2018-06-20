<?php

    require_once('..\Model\DAO\conexao.inc');
    require_once('..\Model\DAO\servicoDAO.php');
    require_once('..\Model\DAO\dataDisponivelDAO.php');

    require_once('..\Model\DataDisponivel.php');

    $opcao = (int) $_REQUEST['opcao'];
    $idserv = (int) $_REQUEST['id_servico'];
    
    if ($opcao == 1) {
        $id = (int) $_REQUEST['id'];

        $dataDisponivelDAO = new dataDisponivelDAO();

        $dataDisponivelDAO->excluirDataDisponivel($id);

        header("Location:ServicoController.php?opcao=3&id=".$idserv);
    }
    if ($opcao == 2) {

         $id = (int) $_REQUEST['id'];

        $servicoDao = new servicoDAO();

        $servico = $servicoDao->getServico($id);

        session_start();
        $_SESSION['servico'] = $servico;


        header("Location:../View/Servico/alterar_servico.php");
    }
     if ($opcao == 3) {

        $datadisp = $_GET["data"];

        $dataDisponivelDao = new dataDisponivelDao();

        $dataDisponivelDao->incluirDatasDisponiveis($idserv, $datadisp);

         header("Location:ServicoController.php?opcao=3&id=".$idserv);

         
    }
?>
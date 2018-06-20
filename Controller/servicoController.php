<?php

require_once('..\Model\DAO\conexao.inc');
require_once('..\Model\DAO\servicoDAO.php');
require_once('..\Model\DAO\dataDisponivelDAO.php');

require_once('..\Model\Servico.php');

$opcao = (int) $_REQUEST['opcao'];

if ($opcao == 1) {

    $servico = new Servico($_POST["nome"], $_POST["valor"], $_POST["descricao"], $_POST["tipo"]);

    $datadisp = $_POST["data"];
    $servicoDAO = new servicoDAO();

    $servicoDAO->incluirServico($servico, $datadisp);

    header("Location:servicoController.php?opcao=2");
}
if ($opcao == 2) {

    $servicoDao = new servicoDAO();

    $lista = $servicoDao->getServicos();

    session_start();

    $_SESSION['servicos'] = $lista;

    header("Location:../View/Servico/exibir_servicos.php");
}
if ($opcao == 3) {
    $id = (int) $_REQUEST['id'];

    $servicoDao = new servicoDAO();

    $servico = $servicoDao->getServico($id);

    session_start();
    $_SESSION['servico'] = $servico;


    header("Location:../View/Servico/alterar_servico.php");
}
if ($opcao == 4) {
    $servico = new Servico($_POST["nome"], (int) $_POST["valor"], $_POST["descricao"], $_POST["id_tipo"]);
    $servico->setServico_id($_POST['id_servico']);

    $servicoDAO = new servicoDAO();

    $servicoDAO->atualizarServico($servico);

    $idDD[] = ($_POST["id_disponibilidade"]);
    $DD[] = ($_POST["data"]);

        /*
          foreach ($idDD as $key => $value) {
          print_r($value);
          }

          foreach ($DD as $key => $value) {
          print_r($value);
          }
         */

          foreach ($DD as $key => $value) {
            foreach ($idDD as $keyy => $val) {

                $datadisp = new DataDisponivel();
                $datadisp->setData($value);
                $datadisp->setId_disponibilidade($val);
                $datadisp->setId_servico($_POST['id_servico']);

                //	print_r($datadisp);
                $dataDisponivelDAO = new dataDisponivelDAO();
                $dataDisponivelDAO->atualizarDataDisponivel($datadisp);

                # code...
            }
        }


        header("Location:servicoController.php?opcao=2");
    }
    if ($opcao == 5) {
        $id = (int) $_REQUEST['id'];

        $servicoDao = new servicoDAO();

        $servicoDao->excluirServico($id);

        header("Location:servicoController.php?opcao=2");
    }
    if ($opcao == 6) {
        $id = (int) $_REQUEST['id'];

        $servicoDao = new servicoDAO();

        $lista = $servicoDao->getServicosDetalhados($id);
        $lista2 = $servicoDao->retornaDatas();

        session_start();

        $_SESSION['servicos'] = $lista;
        $_SESSION['datas'] = $lista2;

        header("Location:../View/Servico/BuscaServico.php");
    }
    ?>
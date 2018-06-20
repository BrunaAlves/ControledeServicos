<?php

require_once('..\Model\DAO\conexao.inc');
require_once('..\Model\DAO\servicoDAO.php');

require_once('..\Model\Servico.php');

$opcao = (int) $_REQUEST['opcao'];

if ($opcao == 1) {

    $id = (int) $_REQUEST['id'];

    $servicoDAO = new servicoDao();

    $servico = $servicoDAO->getServico($id);

    session_start();

    if (!isset($_SESSION['carrinho']))
        $carrinho = array();
    else
        $carrinho = $_SESSION['carrinho'];

    $carrinho[] = $servico;
    $_SESSION['carrinho'] = $carrinho;

    header("Location:../View/Carrinho/exibir_carrinho.php");
} elseif ($opcao == 2) {


    $index = $_REQUEST['index'];
    session_start();

    $carrinho = $_SESSION['carrinho'];
    unset($carrinho[$index]);
    $_SESSION['carrinho'] = $carrinho;

    header('Location:carrinhoController.php?opcao=3');
} elseif ($opcao == 3) {

    session_start();
    if (!isset($_SESSION['carrinho']) || sizeof($_SESSION['carrinho']) == 0)
        header('Location:../View/Carrinho/exibir_carrinho.php?status=1');
    else
        header('Location:../View/Carrinho/exibir_carrinho.php');
}

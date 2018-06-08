<?php
	require_once('..\Model\DAO\conexao.inc');
	require_once('..\Model\DAO\servicoDAO.php');

	require_once('..\Model\Servico.php');

	$opcao = (int)$_REQUEST['opcao'];

	if($opcao == 1){

		$servico = new Servico($_POST["nome"],(int)$_POST["valor"],$_POST["descricao"],$_POST["tipo"]);

		$servicoDAO = new servicoDAO();

		$servicoDAO->incluirServico($servico);

		 header("Location:servicoController.php?opcao=2");
		//echo "Sucesso! Serviço incluso.";
	}
	if($opcao==2){
		
		$servicoDao = new servicoDAO();

		$lista = $servicoDao->getServicos();

		session_start();

		$_SESSION['servicos'] = $lista;

		header("Location:../View/Servico/exibir_servicos.php");

	}
?>
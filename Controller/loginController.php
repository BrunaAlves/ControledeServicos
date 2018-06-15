<?php
	require_once('..\Model\DAO\conexao.inc');
	require_once('..\Model\DAO\ClienteDAO.php');
	require_once('..\Model\Cliente.php');

	$email = $_REQUEST['email'];
	$senha = $_REQUEST['senha'];

	$user = new Cliente();
	$clienteDao = new ClienteDAO();
	$user = $clienteDao->efetuarLogin($email, $senha);
	
	if($user==false)
	{	
		$erro = "Login ou senha incorretos, tente novamente!";
		header("Location:../login.php?erro=".$erro);
	}
	else
	{
	    if ($user->Tipo_user==0)
		{
			session_start();
			$_SESSION['Logado'] = true;
			$_SESSION['usuario'] = $user;
			header("Location:restrito/areaRestrita.php");
		}
		else if ($user->Tipo_user==1) 
		{
			session_start();
			$_SESSION['Logado'] = true;
			$_SESSION['usuario'] = $user;
			header("Location:index.php");
		}
	}

?>
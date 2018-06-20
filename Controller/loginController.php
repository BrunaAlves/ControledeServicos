<?php

require_once('..\Model\DAO\conexao.inc');
require_once('..\Model\DAO\ClienteDAO.php');
require_once('..\Model\Cliente.php');

$email = $_REQUEST['email'];
$senha = $_REQUEST['senha'];
$opcao = $_REQUEST['opcao'];

switch ($opcao) {
    case 1: {
            $user = new Cliente();
            $clienteDao = new ClienteDAO();
            $user = $clienteDao->efetuarLogin($email, $senha);

            if ($user == false) {
                $erro = "Login ou senha incorretos, tente novamente!";
                header("Location:../login.php?erro=" . $erro);
            } else {
                if ($user->Tipo_user == 0) {
                    session_start();
                    $_SESSION['Logado'] = true;
                    $_SESSION['usuario'] = $user;
                    header("Location:../index.php");
                } else if ($user->Tipo_user == 1) {
                    session_start();
                    $_SESSION['Logado'] = true;
                    $_SESSION['usuario'] = $user;
                    header("Location:../index.php");
                }
            }
        }
        break;

    case 2: {
            session_start();
            session_destroy();
            header("Location:../login.php");
        }
        break;
}
?>
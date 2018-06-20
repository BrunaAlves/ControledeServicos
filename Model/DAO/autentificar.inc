<?php

session_start();
$estado = $_SESSION['Logado'];
if (!$estado || !isset($_SESSION['Logado'])) {
    header("Location:../../View/login.php?erro=Você precisa logar para ter acesso a essa página!");
}
?>
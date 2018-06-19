<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">

</head>
<body>

	<?php

		$nome 	= $_REQUEST['nome'];
		$cpf 	= $_REQUEST['cpf'];
		$end 	= $_REQUEST['end'];
		$cidade = $_REQUEST['cidade'];
		$uf 	= $_REQUEST['uf'];
		$cep 	= $_REQUEST['cep'];
		$total	= $_REQUEST['total'];

		echo 'nome ' .$nome. '<br>';
		echo 'cpf ' .$cpf. '<br>';
		echo 'end ' .$end. '<br>';
		echo 'cidade '.$cidade.'<br>';
		echo 'uf '.$uf.'<br>';
		echo 'cep '.$cep.'<br>';
		echo 'total '.$total.'<br>';

	?>

</body>
</html>
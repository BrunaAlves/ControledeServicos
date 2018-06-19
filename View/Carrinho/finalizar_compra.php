<!DOCTYPE html>
<html>
<head>
	<title>Finalizar Compra</title>
	<style type="text/css">
		body {
			margin: 12px;
			font-family: Arial, Helvetica, sans serif;
		}
		.form {
			margin: 0;
			padding: 6px;
			background-color: #f3f3f3;
			width: 50%;

		}

		.btn {
			padding: 12px;

		}

		input[type=text], select {
			width: 100%;
			padding: 3px;
		}
		
	</style>
</head>

<body>
	<?php

		$total = (double)$_REQUEST['total'];
	?>
	<h2>Dados do comprador</h2>
	<p>Informe os dados para finalizar a compra</p>
	<form action="boleto/meuBoleto.php" method="POST">

		<div class="form">

			<label for="nome"><b>Nome<b></label>
			<input type="text" name="nome" maxlength="50" placeholder="Informe seu nome..." required="required">

			<label for="cpf"><b>CPF<b></label>
			<input type="text" name="cpf" maxlength="14" placeholder="Informe o CPF..." required="required">

			<label for="end"><b>Endereço<b></label>
			<input type="text" name="end" maxlength="50" required="required">

			<label for="cidade"><b>Cidade<b></label>
			<input type="text" name="cidade" maxlength="50" required="required">

			<label for="uf"><b>Estado<b></label>
			<select name="uf">
				<option value="MG">MG</option>
				<option value="RJ">RJ</option>
				<option value="SP">SP</option>
			</select>

			<label for="cep"><b>CEP<b></label>
			<input type="text" name="cep" maxlength="10">

			<input type="hidden" name="total" value="<?php echo $total; ?>" >

			<div class="btn">

				<button type="submit">Emitir Boleto</button>
				<button type="reset">Cancelar</button>

			</div>
		</div>
		
	</form>

	<?php 
		echo 'Total da compra ' .$total;
	?>

</body>
</html>
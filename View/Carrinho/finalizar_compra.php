<!DOCTYPE html>
<html>
<?php
require_once('../Shared/Header.php');
?>
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
	session_start();
	require_once('../Shared/MenuHeader.php');
	require_once('../Shared/Panel.php');

	$total = (double)$_REQUEST['total'];
	?>
	<center><h2>Dados do comprador</h2></center>
</div>
<div class="panel-body">
	<center><h4>Informe os dados para finalizar a compra</h4></center>
	<form action="boleto/meuBoleto.php" method="POST">
		<div class="row">
			<div class="col-md-9">
				<label for="nome">Nome</label>
				<input class="form-control" type="text" name="nome" maxlength="50" placeholder="Informe seu nome..." required="required">
			</div>
			<div class="col-md-3">
				<label for="cpf">CPF</label>
				<input class="form-control" type="text" name="cpf" maxlength="14" placeholder="Informe o CPF..." required="required">
			</div>
		</div>
		<label for="end">Endereço</label>
		<input class="form-control" type="text" name="end" maxlength="50" placeholder="Informe o seu endereço..." required="required">
		<label for="cidade">Cidade</label>
		<input class="form-control" type="text" name="cidade" maxlength="50" placeholder="Informe o sua cidade..." required="required">
		<div class="row">
			<div class="col-md-6">
				<label for="uf">Estado</label>
				<select class="form-control" name="uf">
					<option value="AC">Acre</option>
					<option value="AL">Alagoas</option>
					<option value="AP">Amapá</option>
					<option value="AM">Amazonas</option>
					<option value="BA">Bahia</option>
					<option value="CE">Ceará</option>
					<option value="DF">Distrito Federal</option>
					<option value="ES">Espírito Santo</option>
					<option value="GO">Goiás</option>
					<option value="MA">Maranhão</option>
					<option value="MT">Mato Grosso</option>
					<option value="MS">Mato Grosso do Sul</option>
					<option value="MG">Minas Gerais</option>
					<option value="PA">Pará</option>
					<option value="PB">Paraíba</option>
					<option value="PR">Paraná</option>
					<option value="PE">Pernambuco</option>
					<option value="PI">Piauí</option>
					<option value="RJ">Rio de Janeiro</option>
					<option value="RN">Rio Grande do Norte</option>
					<option value="RS">Rio Grande do Sul</option>
					<option value="RO">Rondônia</option>
					<option value="RR">Roraima</option>
					<option value="SC">Santa Catarina</option>
					<option value="SP">São Paulo</option>
					<option value="SE">Sergipe</option>
					<option value="TO">Tocantins</option>
				</select>
			</div>
			<div class="col-md-6">
				<label for="cep">CEP</label>
				<input class="form-control" type="text" name="cep" maxlength="10" placeholder="Informe o seu CEP..." required="required">
				</>
				<input type="hidden" name="total" value="<?php echo $total; ?>" >
			</div>
		</div>
		<div class="btn">

			<button class="btn btn-primary" type="submit">Emitir Boleto</button>
			<button class="btn btn-danger" type="reset">Cancelar</button>

		</div>
		
	</form>
</div>
<?php 
echo "<h3 style='color:red;'>Total da compra: R$" .$total."</h3>";
?>

</body>
</html>
<!DOCTYPE html>
<html>
<?php
require_once('../Shared/Header.php');
?>
<body>
	<?php
	require_once('../Shared/MenuHeader.php');
	require_once('../Shared/Panel.php');
	?>
	<h2 style="color: red;">Meu Carrinho de Compras</h2>
	<p style="text-align: center;"></p>

	<?php 

	require_once('..\..\Model\Servico.php');


	$cont = 1;
	$soma = 0;


	if (isset($_REQUEST['status'])) {

		echo '<div style="background-color: tomato; width:100%;">';

		echo '<p style="text-align: center;">Nenhum item foi incluído no carrinho de compras</p>';
		echo '<p style="text-align: center;"><a href="..\Servico\BuscaServico.php">Visualizar Serviços</p>';

		echo '</div>';

		die();


	} else {
		?>

		<table>
			<tr>
				<th>#</th>
				<th>Id</th>
				<th>Nome</th>
				<th>Tipo</th>
				<th>Valor</th>
				<th></th>
			</tr>
			<tr align="left">

				<?php

				session_start();
				$carrinho = $_SESSION['carrinho'];

				foreach ($carrinho as $item) {
					?>

					<td><?php echo $cont; ?></td>
					<td><?php echo $item->id_servico; ?></td>
					<td><?php echo $item->nome; ?></td>
					<td><?php echo $item->id_tipo; ?></td>
					<td><?php echo 'R$ '.$item->valor; ?></td>
					<td><a href="..\..\Controller\carrinhoController.php?opcao=2&index=<?php echo $cont-1;?>">Remover</a></td>
				</tr>
				<?php
				$soma += $item->valor;
				$cont++;
			}
		}
		?>
		<tr align="center">
			<td colspan="6" style="font-family: Verdana;color: red;">
				<b>Valor total = R$ <?php echo $soma;?></b>
			</td>
		</tr>
	</table>
	<br>
	<a href="..\Servico\BuscaServico.php">Continuar comprando</a>
	<a href="finalizar_compra.php?total=<?php echo $soma;?>">Finalizar compra</a>
</body>
</html>

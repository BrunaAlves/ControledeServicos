<?php
      require_once('../../Model/DAO/autentificar.inc');
            
      if(isset($_SESSION['usuario']))
      {
      $user = $_SESSION['usuario'];
            if ($user->Tipo_user == 0) {
?>

<HTML>
<HEAD>
 <TITLE>Cadastro de Serviço</TITLE>
</HEAD>
<BODY>
<?php

	$servico = $_SESSION['servico'];

?>
	<h1>Alterar Serviço</h1>
<form action="..\..\Controller\servicoController.php?opcao=4" method="POST">
	<div>
    	<div>
    		<div>
			    <label>ID:</label>
			        <div>
			    		<input type="text" name="id_servico" value="<?php echo $servico->id_servico ?>" readonly>
			  		</div>
			</div>
			<div>
			    <label>Nome do serviço:</label>
			        <div>
			    		<input type="text" name="nome" value="<?php echo $servico->nome ?>">
			  		</div>
			</div>
			<div>
			    <label>Valor:</label>
			        <div>
			    		<input type="text" name="valor" value="<?php echo $servico->valor ?>">
			  		</div>
			</div>
			<div>
			    <label>Descrição:</label>
			        <div>
			    		<input type="text" name="descricao" value="<?php echo $servico->descricao ?>">
			  		</div>
			</div>
			<div>
			    <label>Tipo:</label>
			        <div>
			    		<input type="text" name="id_tipo" value="<?php echo $servico->id_tipo ?>">
			  		</div>
			</div>
			<input type="hidden" name="opcao" value="4">
		    <div>
		        <button type="submit" class="btn btn-primary" value="Atualizar">Atualizar</button>
		    </div>
		</div>
	</div>
</form>
</BODY>
</HTML>
<?php
      }
      else
      {
      $erro = "Você não tem permissão de acesso para essa página!";
      header("Location:../Erro/erro.php?erro=".$erro);
      }
      }        
?>

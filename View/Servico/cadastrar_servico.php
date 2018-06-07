<HTML>
<HEAD>
 <TITLE>Cadastro de Serviço</TITLE>
</HEAD>
<BODY>
	<h1>Cadastrar Serviço</h1>
<form action="..\..\Controller\servicoController.php" method="POST">
	<div>
    	<div>
			<div>
			    <label>Nome do serviço:</label>
			        <div>
			    		<input type="text" name="nome">
			  		</div>
			</div>
			<div>
			    <label>Valor:</label>
			        <div>
			    		<input type="text" name="valor">
			  		</div>
			</div>
			<div>
			    <label>Descrição:</label>
			        <div>
			    		<input type="text" name="descricao">
			  		</div>
			</div>
			<div>
			    <label>Tipo:</label>
			        <div>
			    		<input type="text" name="tipo">
			  		</div>
			</div>
			<input type="hidden" name="opcao" value="1">
		    <div>
		        <button type="submit" class="btn btn-primary">Enviar</button>
		    </div>
		</div>
	</div>
</form>
</BODY>
</HTML>
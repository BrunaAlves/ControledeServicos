<HTML>
<HEAD>
<TITLE>Atualizar de Tipo</TITLE>
</HEAD>
<BODY>
	<?php
           session_start();
           $tipo = $_SESSION['tipo'];
	?>

      <center>
      <h2>Atualizar Tipo</h2>
      <form action="../../Controller/tipoController.php" method="post">
            <input type="hidden" name="opcao" value="5">
            <label>ID</label>
            <input type="text" size="20" name="id" value="<?php echo $tipo->id_tipo ?>" readonly>
            <label>Tipo de Serviço</label>
            <input type="text" size="20" name="nome" value="<?php echo $tipo->nome ?>">
            <label>Valor</label>
            <input type="text" size="20" name="valor" value="<?php echo $tipo->valor ?>">
            <input type="submit" value="Atualizar">
            <input type="reset" value="Cancelar">
      </form>
      </center>
</BODY>
</HTML>

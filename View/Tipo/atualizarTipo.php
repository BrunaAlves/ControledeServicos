<?php
      require_once('../../Model/DAO/autentificar.inc');
            
      if(isset($_SESSION['usuario']))
      {
      $user = $_SESSION['usuario'];
            if ($user->Tipo_user == 0) {
?>

<HTML>
<HEAD>
<TITLE>Atualizar de Tipo</TITLE>
</HEAD>
<BODY>
	<?php
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
<?php
      }
      else
      {
      $erro = "Você não tem permissão de acesso para essa página!";
      header("Location:../Erro/erro.php?erro=".$erro);
      }
      }        
?>


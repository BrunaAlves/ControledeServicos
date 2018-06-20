<?php
require_once('../../Model/DAO/autentificar.inc');

if(isset($_SESSION['usuario']))
{
      $user = $_SESSION['usuario'];
      if ($user->Tipo_user == 0) {
            ?>

            <HTML>
            <?php
            require_once('../Shared/Header.php');
            ?>
            <BODY>
                  <?php
                  require_once('../Shared/MenuHeader.php');
                  require_once('../Shared/Panel.php');
                  ?>
                  <?php
                  $tipo = $_SESSION['tipo'];
                  ?>

                  <center>
                        <center><h3 class="panel-title">Atualizar Tipo</h3></center>
                  </div>
                  <div class="panel-body">
                        <form action="../../Controller/tipoController.php" method="post">
                              <input type="hidden" name="opcao" value="5">
                              <div>
                                    <label>ID</label>
                                    <input class="form-control" type="text" size="20" name="id" value="<?php echo $tipo->id_tipo ?>" readonly>
                              </div>
                              <div>
                                    <label>Tipo de Serviço</label>
                                    <input class="form-control" type="text" size="20" name="nome" value="<?php echo $tipo->nome ?>">
                              </div>
                              <div>
                                    <label>Valor</label>
                                    <input class="form-control" type="text" size="20" name="valor" value="<?php echo $tipo->valor ?>">
                              </div>
                              <br>
                              <input class="btn btn-primary" type="submit" value="Atualizar">
                              <input class="btn btn-danger" type="reset" value="Cancelar">
                        </form>
                  </div>
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


    <?php
    session_start();
    $tipos = $_SESSION['tipos'];
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
      <center>
        <center><h3 class="panel-title">Busca de Serviços</h3></center>
      </div>
      <div class="panel-body">
        <form action="../../Controller/servicoController.php" method="post">
          <input type="hidden" name="opcao" value="6">
          <div>
            <label>Escolha um tipo de serviço!</label>
            <select name="id">

              <?php
              foreach ($tipos as $tipo) {
                echo "<option value=".$tipo->id_tipo.">".$tipo->nome."</option>";
              }
              ?>
            </div>
          </select>
          <input type="submit" value="Buscar">
        </form>
      </div>
    </center>
  </body>
  </html>
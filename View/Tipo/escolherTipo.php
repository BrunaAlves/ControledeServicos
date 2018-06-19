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
    <h2>Busca de Serviços</h2>
      
      <form action="../../Controller/servicoController.php" method="post">
            <input type="hidden" name="opcao" value="6">
            <label>Escolha um tipo de serviço!</label>
            <select name="id">
            
            <?php
              foreach ($tipos as $tipo) {
              echo "<option value=".$tipo->id_tipo.">".$tipo->nome."</option>";
            }
            ?>
            
            </select>
            <input type="submit" value="Buscar">
      </form>
    
    </body>
</html>
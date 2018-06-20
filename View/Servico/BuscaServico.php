<HTML>
<?php
require_once('../Shared/Header.php');
?>
<BODY>
  <?php
  session_start();
  
  $servicos = $_SESSION['servicos'];
  $datas = $_SESSION['datas'];
  $tipos = $_SESSION['tipos'];
  function formatarData($data)
  {
    return date('d/m/Y',$data);
  }
  require_once('../Shared/MenuHeader.php');
  require_once('../Shared/Panel.php');
  ?>
  <center>
    <center><h3 class="panel-title">Visualização de serviços</h3></center>
  </div>

  <form action="../../Controller/servicoController.php" method="post">
    <input type="hidden" name="opcao" value="6">
    <br>
    <div class="row">
      <div class="col-md-3">
        <label>Escolha um tipo de serviço!</label>
      </div>
      <div class="col-md-5">
        <select name="id" class="form-control">
          <?php
          foreach ($tipos as $tipo) {
            echo "<option value=".$tipo->id_tipo.">".$tipo->nome."</option>";
          }
          ?>
        </select>
      </div>
      <div class="col-md-2">
        <input class="btn btn-info" type="submit" value="Buscar">
      </div>
    </div>
  </form>
  <table class="table table-striped table-bordered" align="center">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">NOME</th>
        <th scope="col">TIPO</th>
        <th scope="col">VALOR</th>
        <th scope="col">DATAS DISPONIVEIS</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>

      <?php
      foreach($servicos as $servico)
      {
        ?>
        <tr align='center'>
          <td scope="row"><?=$servico->id; ?></td>
          <td><?=$servico->nome; ?></td>
          <td><?=$servico->tipo; ?></td>
          <td><?=$servico->valor; ?></td>
          <td>
            <select>
              <?php
              
              foreach($datas as $data)
              {
                if ($servico->id == $data->id) {
                  echo "<option value=$data->id>";
                  echo formatarData(strtotime($data->data));
                  echo "</option>";
                }
              }
              ?>
            </select>
          </td>
          
          <td>
              <a href="..\..\Controller\carrinhoController.php?opcao=1&id=<?php echo $servico->id;?>">
                <input type='button' class='btn btn-primary' value='Contratar'/>
              </a>
          </td>
          <?php
        }
        ?>
      </tr>
    </table>
  </tbody>
</center>
</BODY>
</HTML>
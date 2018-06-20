<HTML>
<?php
require_once('../Shared/Header.php');
?>
<BODY>
  <?php
  session_start();
  
  $servicos = $_SESSION['servicos'];
  $datas = $_SESSION['datas'];
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
  <div>
    <a href="..\..\Controller\carrinhoController.php?opcao=3">
      Visualizar carrinho
    </a>
  </div>
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
              Carrinho
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
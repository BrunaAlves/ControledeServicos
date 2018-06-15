<?php
      require_once('../../Model/DAO/autentificar.inc');
            
      if(isset($_SESSION['usuario']))
      {
      $user = $_SESSION['usuario'];
            if ($user->Tipo_user == 0) {
?>

<HTML>
<HEAD>
 <TITLE>Serviços</TITLE>
 </HEAD>
<BODY>
      <center>
        <h1>Serviços cadastrados</h1>
      <p>
<?php
      $servicos = $_SESSION['servicos'];
?>
    <font face="Tahoma">
  <table border="1" cellspacing="2" cellspadding="1" width="50%">
    <tr>
      <th>Nome</th>
      <th>Valor</th>
      <th>Descrição</th>
      <th>Tipo</th>
      <th>Alterar</th>
      <th>Excluir</th>
    </tr>


<?php
          foreach($servicos as $serv)
          {
?>
              <tr align='center'>
                <td><?=$serv->nome; ?></td>
                <td><?=$serv->valor; ?></td>
                <td><?=$serv->descricao; ?></td>
                <td><?=$serv->id_tipo; ?></td>
                <td><a href='..\..\Controller\ServicoController.php?opcao=3&id=<?=$serv->id_servico; ?>' >A</a></td>
                <td><a href='..\..\Controller\ServicoController.php?opcao=5&id=<?=$serv->id_servico; ?>' >X</a></td>
              </tr>
          <?php
          }
          ?>
               </table>
             </font>
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

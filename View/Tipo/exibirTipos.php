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
<center>
<h2>Tipos de Serviço<h2>

<?php
    $tipos = $_SESSION['tipos'];
?>
<table border = "1" width="80%">
                <thead>
                <td>COD</td>
                <td>NOME</td>
                <td>VALOR</td>
                </thead>
                <tbody>
<?php
     foreach($tipos as $tipo)
     {
                      echo"<tr align='center'>";
                      echo"<td>".$tipo->id_tipo."</td>";
                      echo"<td>".$tipo->nome."</td>";
                      echo"<td>".$tipo->valor."</td>";
                      echo"<td><a href='../../Controller/tipoController.php?opcao=3&id=".$tipo->id_tipo."'><input type='button' value='Alterar'/></a>&nbsp;";
                      echo"<a href='../../Controller/tipoController.php?opcao=4&id=".$tipo->id_tipo."'><input type='button' value='Excluir'/></a></td>";
     }
?>
</tbody>
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
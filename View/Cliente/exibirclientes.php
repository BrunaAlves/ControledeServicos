<HTML>
<HEAD>
 <TITLE>Lista de Clientes</TITLE>
</HEAD>
<BODY>
<center>
<h2>Lista de clientes<h2>

<?php
    header("Content-Type: text/html;  charset=ISO-8859-1",true);
    session_start();
    $clientes = $_SESSION['clientes'];
    $numpaginas = $_REQUEST['paginas'];
    function formatarData($data)
    {
      return date('d/m/Y',$data);
    }
?>
<table border = "1" width="80%">
                <thead>
                <td>COD</td>
                <td>NOME</td>
                <td>CPF</td>
                <td>DATA DE NASCIMENTO</td>
                <td>ENDERECO</td>
                <td>TELEFONE</td>
                </tr>
                </thead>
                <tbody>
<?php
     foreach($clientes as $cliente)
     {
                      echo"<tr align='center'>";
                      echo"<td>".$cliente->CodCli."</td>";
                      echo"<td>".$cliente->Nome."</td>";
                      echo"<td>".$cliente->CPF."</td>";
                      echo"<td>".formatarData(strtotime($cliente->DtNascimento))."</td>";
                      echo"<td>".$cliente->Endereco."</td>";
                      echo"<td>".$cliente->Telefone."</td>";
                      echo"<td><a href='../../Controller/clienteController.php?opcao=3&id=".$cliente->CodCli."'><input type='button' value='Alterar'/></a>&nbsp;";
                      echo"<a href='../../Controller/clienteController.php?opcao=4&id=".$cliente->CodCli."'><input type='button' value='Excluir'/></a></td>";
     }
?>
<div>
     <?php
          for($i = 1; $i <= $numpaginas; $i++)
          {
     ?>
          <a href="../../Controller/clienteController.php?opcao=6&pagina=<?php echo $i ?>"><?php echo $i ?></a>
     <?php
          }
     ?>
</div>
</tbody>
</center>
</BODY>
</HTML>

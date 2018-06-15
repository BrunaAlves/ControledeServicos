<HTML>
<HEAD>
 <TITLE>Tipos de Serviço</TITLE>
</HEAD>
<BODY>
<center>
<h2>Tipos de Serviço<h2>

<?php
    session_start();
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

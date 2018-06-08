<?php
    // header('Content-Type: text/html; charset=ISO-8859-1');
     //require_once('autenticar.inc');
     require_once('..\..\Model\Servico.php');
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

      session_start();
      
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
                <td>A</a></td>
                <td>X</td>
              </tr>
          <?php
          }
          ?>
               </table>
             </font>
           </BODY>
</HTML>

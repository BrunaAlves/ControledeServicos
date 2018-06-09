<HTML>
<HEAD>
<TITLE>Atualizar de Clientes</TITLE>
</HEAD>
<BODY>
	<?php
           header("Content-Type: text/html;  charset=ISO-8859-1",true);
           function formatarData($data)
           {
                    return date('d/m/Y',$data);
           }
           session_start();
           $cliente = $_SESSION['cliente'];
	?>

      <center>
      <h2>Atualizar Clientes</h2>
      <form action="../../Controller/clienteController.php" method="post">
            <input type="hidden" name="opcao" value="5">
            <input type="hidden" name="tipo" value="1">
            <label>ID</label>
            <input type="text" size="20" name="id" value="<?php echo $cliente->CodCli ?>" readonly>
            <label>Nome</label>
            <input type="text" size="20" name="nome" value="<?php echo $cliente->Nome ?>">
            <label>Endereço</label>
            <input type="text" size="20" name="end" value="<?php echo $cliente->Endereco ?>">
            <label>Telefone</label>
            <input type="text" size="20" name="tel" value="<?php echo $cliente->Telefone ?>">
            <label>CPF</label>
            <input type="text" size="20" name="cpf" value="<?php echo $cliente->CPF ?>">
            <label>Data de Nascimento</label>
            <input type="text" size="20" name="dt_nasc" value="<?php echo formatarData(strtotime($cliente->DtNascimento)) ?>">
            <label>Email</label>
            <input type="text" size="20" name="email" value="<?php echo $cliente->Email ?>">
            <label>Senha</label>
            <input type="text" size="20" name="senha" value="<?php echo $cliente->Senha ?>">
            <input type="submit" value="Atualizar">
            <input type="reset" value="Cancelar">
      </form>
      </center>
</BODY>
</HTML>

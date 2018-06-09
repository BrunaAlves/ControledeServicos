<HTML>
<HEAD>
<TITLE>Cadastro de Clientes</TITLE>
</HEAD>
<BODY>
      <center>
      <h2>Cadastrar Clientes</h2>
      <form action="../../Controller/clienteController.php" method="post">
            <input type="hidden" name="opcao" value="1">
            <input type="hidden" name="tipo" value="1">
            <label>Nome</label>
            <input type="text" size="20" name="nome">
            <label>Endereço</label>
            <input type="text" size="20" name="end">
            <label>Telefone</label>
            <input type="text" size="20" name="tel">
            <label>CPF</label>
            <input type="text" size="20" name="cpf">
            <label>Data de Nascimento</label>
            <input type="date" size="20" name="dt_nasc">
            <label>Email</label>
            <input type="text" size="20" name="email">
            <label>Senha</label>
            <input type="text" size="20" name="senha">
            <input type="submit" value="Cadastrar">
      </form>
      </center>
</BODY>
</HTML>

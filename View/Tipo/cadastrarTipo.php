<html>
    <head>
        <title>Cadastro de Tipos de Serviço</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <center>
        <h2>Cadastrar Tipos de Serviço</h2>
        <form action="../../Controller/tipoController.php" method="post">
            <input type="hidden" name="opcao" value="1">
            <label>Nome</label>
            <input type="text" size="20" name="nome">
            <label>Valor</label>
            <input type="text" size="20" name="valor">
            <input type="submit" value="Cadastrar">
        </form>
        </center>
    </body>
</html>
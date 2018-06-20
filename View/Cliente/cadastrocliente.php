<HTML>
    <?php
    require_once('../Shared/Header.php');
    ?>
    <BODY>
        <?php
        session_start();
        require_once('../Shared/MenuHeader.php');
        require_once('../Shared/Panel.php');
        ?>

    <center><h3 class="panel-title">Cadastro de Cliente</h3></center>
</div>
<div class="panel-body">
    <form action="../../Controller/clienteController.php" method="POST"  style="margin: 0% 0;">
        <input type="hidden" name="opcao" value="1">
        <input type="hidden" name="tipo" value="1">
        <label>Nome Completo</label>
        <input class="form-control" type="text" name="nome" placeholder="Nome Completo" />
        <div class="row">
            <div class="col-md-9">
                <label>Endereço</label>
                <input class="form-control" type="text" size="20" name="end" placeholder="Endereço">
            </div>
            <div class="col-md-3">
                <label>Telefone</label>
                <input class="form-control" type="text" size="20" name="tel" placeholder="Telefone">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>CPF</label>
                <input class="form-control" type="text" size="20" name="cpf" placeholder="CPF">
            </div>
            <div class="col-md-6">
                <label>Data de Nascimento</label>
                <input class="form-control" type="date" size="20" name="dt_nasc">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Email</label>
                <input class="form-control" type="email" size="20" name="email">
            </div>
            <div class="col-md-6">
                <label>Senha</label>
                <input class="form-control" type="text" size="20" name="senha">
            </div>
        </div>
        <br>
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary btn-lg pull-right"><span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>Cadastrar</button>
        </div>
    </form>

</BODY>
</HTML>

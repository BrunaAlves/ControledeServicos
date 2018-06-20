<HTML>
    <?php
    require_once('../Shared/Header.php');
    ?>
    <BODY>
        <?php

        function formatarData($data) {
            return date('d/m/Y', $data);
        }

        session_start();
        $cliente = $_SESSION['cliente'];
        require_once('../Shared/MenuHeader.php');
        require_once('../Shared/Panel.php');
        ?>

    <center><h3 class="panel-title">Atualizar Clientes</h3></center>
    </div>
    <div class="panel-body">
        <form action="../../Controller/clienteController.php" method="post">
            <input type="hidden" name="opcao" value="5">
            <input type="hidden" name="tipo" value="1">

            <div>
                <label>ID</label>
                <input class="form-control" type="text" size="20" name="id" value="<?php echo $cliente->CodCli ?>" readonly>
            </div>
            <div>
                <label>Nome</label>
                <input class="form-control" type="text" size="20" name="nome" value="<?php echo $cliente->Nome ?>">
            </div>
            <div>
                <label>Endereço</label>
                <input class="form-control" type="text" size="20" name="end" value="<?php echo $cliente->Endereco ?>">
            </div>
            <div>
                <label>Telefone</label>
                <input class="form-control" type="text" size="20" name="tel" value="<?php echo $cliente->Telefone ?>">
            </div>
            <div>
                <label>CPF</label>
                <input class="form-control" type="text" size="20" name="cpf" value="<?php echo $cliente->CPF ?>" readonly>
            </div>
            <div>
                <label>Data de Nascimento</label>
                <input class="form-control" type="text" size="20" name="dt_nasc" value="<?php echo formatarData(strtotime($cliente->DtNascimento)) ?>">
            </div>
            <div>
                <label>Email</label>
                <input class="form-control" type="text" size="20" name="email" value="<?php echo $cliente->Email ?>">
            </div>
            <div>
                <label>Senha</label>
                <input class="form-control" type="text" size="20" name="senha" value="<?php echo $cliente->Senha ?>">
            </div>
            <input type="submit" value="Atualizar">
            <input type="reset" value="Cancelar">
        </form>
    </div>
</center>
</BODY>
</HTML>

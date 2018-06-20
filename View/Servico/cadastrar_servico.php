<?php
require_once('../../Model/DAO/autentificar.inc');

if (isset($_SESSION['usuario'])) {
    $user = $_SESSION['usuario'];
    if ($user->Tipo_user == 0) {
        ?>

        <HTML>
            <?php
            require_once('../Shared/Header.php');
            ?>
            <HEAD>
                <TITLE>Cadastro de Serviço</TITLE>
                <script type="text/javascript">
                    var totalCampos = 7;

        //Não altere os valores abaixo, pois são variáveis controle;
                    var iLoop = 1;
                    var iCount = 0;
                    var linhaAtual;


                    function AddCampos() {
                        var hidden1 = document.getElementById("hidden1");
                        var hidden2 = document.getElementById("hidden2");

                        //Executar apenas se houver possibilidade de inserção de novos campos:
                        if (iCount < totalCampos) {

                            //Limpar hidden1, para atualizar a lista dos campos que ainda estão vazios:
                            hidden2.value = "";

                            //Atualizando a lista dos campos que estão ocultos.
                            //Essa lista ficará armazenada temporiariamente em hidden2;
                            for (iLoop = 1; iLoop <= totalCampos; iLoop++) {
                                if (document.getElementById("linha" + iLoop).style.display == "none") {
                                    if (hidden2.value == "") {
                                        hidden2.value = "linha" + iLoop;
                                    } else {
                                        hidden2.value += ",linha" + iLoop;
                                    }
                                }
                            }
                            //Quebrando a lista que foi armazenada em hidden2 em array:

                            linhasOcultas = hidden2.value.split(",");


                            if (linhasOcultas.length > 0) {
                                //Tornar visível o primeiro elemento de linhasOcultas:
                                document.getElementById(linhasOcultas[0]).style.display = "block";
                                iCount++;

                                //Acrescentando o índice zero a hidden1:
                                if (hidden1.value == "") {
                                    hidden1.value = linhasOcultas[0];
                                } else {
                                    hidden1.value += "," + linhasOcultas[0];
                                }

                            }
                        }
                    }

                    function RemoverCampos(id) {
                        //Criando ponteiro para hidden1:
                        var hidden1 = document.getElementById("hidden1");

                        //Pegar o valor do campo que será excluído:
                        var campoValor = document.getElementById("data" + id).value;
                        //Se o campo não tiver nenhum valor, atribuir a string: vazio:
                        if (campoValor == "") {
                            campoValor = "vazio";
                        }

        //	if(confirm("O campo que contém o valor:\n» "+campoValor+"\nserá excluído!\n\nDeseja prosseguir?")){
                        document.getElementById("linha" + id).style.display = "none";
                        iCount--;

                        //Removendo o valor de hidden1:
                        if (hidden1.value.indexOf(",linha" + id) != -1) {
                            hidden1.value = hidden1.value.replace(",linha" + id, "");
                        } else if (hidden1.value.indexOf("linha" + id + ",") == 0) {
                            hidden1.value = hidden1.value.replace("linha" + id + ",", "");
                        } else {
                            hidden1.value = "";
                        }
        //    }
                    }
                </script>
            </HEAD>
            <BODY>
                <?php
                require_once('../Shared/MenuHeader.php');
                require_once('../Shared/Panel.php');
                ?>
                <center><h3 class="panel-title">Cadastrar Serviço</h3></center>
                </div>
                <div class="panel-body">
                    <form action="..\..\Controller\servicoController.php" method="POST" style="margin: 0% 0;">
                        <div>
                            <div>
                                <div>
                                    <label>Nome do serviço:</label>
                                    <div>
                                        <input class="form-control" type="text" name="nome">
                                    </div>
                                </div>
                                <div>
                                    <label>Valor:</label>
                                    <div>
                                        <input class="form-control" type="text" name="valor">
                                    </div>
                                </div>
                                <div>
                                    <label>Descrição:</label>
                                    <div>
                                        <input class="form-control" type="text" name="descricao">
                                    </div>
                                </div>
                                <div>
                                    <label>Tipo:</label>
                                    <div>
                                        <input class="form-control" type="text" name="tipo">
                                    </div>
                                </div>
                                <div><br>
                                    <label>Adicionar datas disponíveis:</label>
                                    <input class="btn btn-info" type="button" value="+" onclick="AddCampos()">
                                    <script type="text/javascript">
                                        //Escrevendo o código-fonte HTML e ocultando os campos criados:
                                        for (iLoop = 1; iLoop <= totalCampos; iLoop++) {
                                            document.write("<span id='linha" + iLoop + "' style='display:none'><label>Data " + iLoop + ": <input class='form-control' type='date' id='data" + iLoop + "' name='data[]'> <input type='button' value='Remover' onclick='RemoverCampos(\"" + iLoop + "\")'></span><label>");
                                        }
                                    </script>
                                    <input type="hidden" name="hidden2" id="hidden2">

                                </div>
                                <input type="hidden" name="opcao" value="1">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary btn-lg pull-right"><span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>Salvar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </BODY>
        </HTML>
        <?php
    } else {
        $erro = "Você não tem permissão de acesso para essa página!";
        header("Location:../Erro/erro.php?erro=" . $erro);
    }
}
?>

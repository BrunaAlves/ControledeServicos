<HTML>
<HEAD>
<TITLE>Cadastro de Clientes</TITLE>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/overwrite.css">
    <link href="../../css/animate.min.css" rel="stylesheet"> 
    <link href="../../css/style.css" rel="stylesheet" />  
    <style type="text/css">
      #painel {
      position:relative;
      top:0px;
      left:0px;
      background-color:#000;
      filter:opacity(alpha=50);
        -moz-opacity:0.3;
        opacity:0.3;
      border:1px solid #1B1B1B;
      }

    </style>
</HEAD>
<BODY>
      <?php
            require_once('../Menus/menu.php');
      ?>
      <div id='painel'>
      <img src="../../img/eng.jpg">
      </div>
      <div style='position:absolute; top:170px; left:10%; width: 80%'>
      <div class="panel panel-primary">
      <div class="panel-heading">
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
      <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-primary btn-lg pull-right"><span class="glyphicon glyphicon-floppy-save" aria-hidden="true"></span>Cadastrar</button>
      </div>
      </form>
      </div>
      </div>
      </div>
<script src="../../js/jquery-2.1.1.min.js"></script>      
<script src="../../js/bootstrap.min.js"></script> 
<script src="../../js/parallax.min.js"></script>
<script src="../../js/wow.min.js"></script>
<script src="../../js/jquery.easing.min.js"></script>
<script type="text/javascript" src="../../js/fliplightbox.min.js"></script>
<script src="../../js/functions.js"></script>
<script>
    wow = new WOW(
     {
    
      }   ) 
      .init();
</script>
</BODY>
</HTML>

<?php 
if(! empty($_REQUEST)){
  $nomeUser = $_REQUEST['nome'];
  $codUser = $_REQUEST['matricula'];
  $funUser = $_REQUEST['funcao'];
}else{
  $nomeUser = "";
  $codUser = "";
  $funUser = "";
}
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Editar usuário</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link href="../css/carousel.css" rel="stylesheet">
  </head>
  <body>
    <div class="navbar-wrapper">
      <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand" href="inicio.php">Project Web</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="inicio.php">Início</a></li>             
                <li class="dropdown">
                  <a href="inserirUser.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuário<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    
                    <li><a href="listarUser.php">Listar usuários</a></li>
                    <li><a href="inserirUser.php">Inserir  usuário</a></li>
                  </ul>
                  <li class="dropdown">
                  <a href="inserirUser.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Laboratório<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="listarLab.php">Listar laboratórios</a></li>
                    <li><a href="inserirLab.php">Inserir</a></li>
                    <li><a href="reservarLab.php">Reservar laboratório</a></li>
                    <li><a href="listarRes.php">Laboratórios reservados</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>

<hr class="featurette-divider">
       <div class="container">       
    <form class="form" method="post" action="../controller/controllerUser.php">
        
        <h2 class="form">Usuário</h2>
        <label for="nome" class="only">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?php print $nomeUser; ?>" required autofocus>

        <label for="matricula" class="only">Matrícula</label>
        <input type="number" name="matricula" id="matricula" class="form-control" <?php print "value='$codUser' readonly"; ?> required autofocus>

        <label for="funcao" class="only">Ocupação</label>
        <input type="text" name="funcao" id="funcao" class="form-control" value="<?php print $funUser; ?>"  required><br>

        <div class="btn-group btn-group-justified">
      <!--<div class="btn-group">
        <button class="btn btn-primary" type="submit" name="btn" value="inserir">
        <span class="glyphicon glyphicon-ok"></span>Inserir</button>

      </div>-->
      <div class="btn-group">
        <button class="btn btn-success" type="submit" name="btn" value="atualizar"><span class="glyphicon glyphicon-refresh"></span>Salvar</button>
      </div>
      <div class="btn-group">
        <button class="btn btn-danger" type="submit" name="btn" value="cancelar"><span class="glyphicon glyphicon-ban-circle"></span>Cancelar</button>
      </div>
      <!--<div class="btn-group">
        <button class="btn btn-danger" type="submit" name="btn" value="deletar"><span class="glyphicon glyphicon-remove"></span>Deletar</button>
      </div>-->
      </div>
      </div>
    </form>
	  </div>
      </div>

    
<hr class="featurette-divider">
    <div class="container marketing">
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2016 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/bootstrap.min.js"></script>
    
  </body>
</html>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
  <!-- Bootstrap -->
  <!-- Antigo css/bootstrap.min.css, foi trocado pois a navbar não funcionava -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/stylesheet.css">
  <!-- Fonte -->
   <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,300italic,500,700" rel="stylesheet" type="text/css">
   <!--Imagem topo navegador -->
   <link rel="shortcut icon" href="../images/pp.png">

  <!-- Jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="/js/action.js"></script>
    <title>
      Hause Software
    </title>
</head>

<body>
<?php 
  include_once("analyticstracking.php");
?>
<section id="home">
  <div class="header">
    <div class="container">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-  expanded="true" aria-controls="navbar" id="button_menu">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">
                <img id="logo" src="images/pp_backup2.png" class="img-rounded" alt="Smiley face">
                
            </a>
          </div>

          <div id="navbar" class="collapse navbar-collapse navbar-right">
            <ul class="nav navbar-nav">
              <li><a href="#">INÍCIO</a></li>
              <li><a href="#">SERVIÇOS</a></li>
              <li><a href="#">CLIENTES</a></li>
              <li><a href="contato.php">CONTATO</a></li>
        <li><a href="https://play.google.com/store/apps/dev?id=4809273991361857537&hl=pt_BR">PLAYSTORE</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </div><!-- fim do container -->
  </div><!-- Fim do header -->
  <div class="jumbotron jumbotron" id="jumbotron_home">
    <div class="container">
      <center><p style="font-size: 40px">Quer um bom serviço? Tá em casa!</p></center>
      <br>
      <center><p style="font-size: 25px; margin-top: -20px;">Uma nova empresa oferendo o melhor serviço!</p></center>
      <br>
      <center><button id="botao_home" class="btn btn-link btn-sm">Saiba mais</button></center>
      </div>        
    </div>
 </section><!-- fim do home -->
</body>
</html>

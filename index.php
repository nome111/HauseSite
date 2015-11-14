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
              <li><a href="#objetivo">SERVIÇOS</a></li>
              <li><a href="#">CLIENTES</a></li>
              <li><a href="contato.php">CONTATO</a></li>
        <li><a href="https://play.google.com/store/apps/dev?id=4809273991361857537&hl=pt_BR">PLAYSTORE</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    </div><!-- fim do container -->
  

  <div class="jumbotron jumbotron" id="home_jumbotron">
    <div class="container">
      <center><p style="font-size: 40px">Quer um bom serviço? Tá em casa!</p></center>
      <br>
      <center><p style="font-size: 25px; margin-top: -20px;">Uma nova empresa oferendo o melhor serviço!</p></center>
      <br>
      <center><button id="botao_home" class="btn btn-link btn-sm">Saiba mais</button></center>
      </div>        
    </div>
 </section><!-- fim do home -->

 <section id="objetivo">
  <div class="container">
    
      <h2 id="objetivo_h2">
        MI CASA ÉS SU CASA!
      </h2>
    

    <div id="objetivo_head">
      <div class="row">
        <div class="col-sm-2 col-md-1 col-md-offset-1">
          <img src='/images/pp.png' class='img-rounded center' alt='Logo' id="objetivo_img"> <p style="background: #f0f0f0; width: 100px; margin-left: 100px;">Hause Group</p>
        </div>
        
        <div class="clearfix visible-md"></div>

        <div class="col-sm-6 col-md-6"><!-- nothing comes here --></div>

        <div class="col-sm-4 col-md-3">
          <p  style="text-align: right;font-size: 16px;">
            Criada em 2015, a Hause Group veio com o objetivo de facilitar a comunicação entre homens e tecnologia.
          </p>
        </div>
      </div>
    </div>
  </div>  
 </section>

 <section id="servicos">
   
 </section>

 <section id="contato">
   
 </section>
</body>
</html>

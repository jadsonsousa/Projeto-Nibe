<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <link rel="icon" href="imagens/favicon.png">


  <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  <script
        src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
          
      $(document).ready(function(){

        $("#btn_entrar").click(function(){
          $("#btn_entrar").hide();
        });
        
      });

  </script>


</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand logo" href="#"><span><img src="imagens/logonav.png"></span></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="empresa.php">Empresa</a></li>
          <li><a href="servicos.php">Serviços</a></li>
          <li><a href="clientes.php">Clientes</a></li>
          <li><a href="contato.php">Contatos</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
            <li>
              <a href="#" data-toggle="modal" data-target="#myModal">
                <span class="glyphicon glyphicon-log-in"></span>
                Login
              </a>
            </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <form method="post" action="validar_acesso.php" >
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="email" placeholder="Digite seu email" id="email">
              </div>

              <div class="form-group">
                <label for="senha">Senha</label>
                <input class="form-control" type="password" name="senha" placeholder="Digite sua senha" id="senha">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
              <button type="submit" id="btn_entrar" class="btn btn-primary">Entrar</button>
              <br>
              <br>
              <label style="text-align: center; margin-right: 10px;">
                <a href="#">1º Acesso</a>
              </label>
              
            </div>
          </form>

        </div>

      </div>
    </div>

  </div>

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="imagens/banner1.png" alt="Image">
        <div class="carousel-caption">
          <h3>Monitoramento Interno</h3>
          <p>Cameras ideais para monitorar ambientes internos.</p>
        </div>      
      </div>

      <div class="item">
        <img src="imagens/banner2.jpg" alt="Image">
        <div class="carousel-caption">
          <h3>Monitoramento Externo</h3>
          <p>Cameras de longo alcançe com boa qualidade de imagem.</p>
        </div>      
      </div>

      <div class="item">
        <img src="imagens/banner3.png" alt="Image">
        <div class="carousel-caption">
          <h3>Monitoramento Residencial</h3>
          <p>Maior segurança para sua residência.</p>
        </div>      
      </div>
      <div class="item">
        <img src="imagens/banner4.png" alt="Image">
        <div class="carousel-caption">
          <h3>Cameras com Infravermelho</h3>
          <p>Seu uso é indicado para ambientes como: garagens, portos, áreas externas com pouca iluminação, dependendo da necessisade até mesmo em cofres ou lojas que precisam de vigilância 24h.</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

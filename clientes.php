<!DOCTYPE html>
<html lang="en">
<head>
  <title>Clientes</title>
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

  <script src="js/javascript.js"></script>
   
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

  <div class="container">

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <form action="">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Login</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="text" name="Nome" placeholder="Digite seu email" id="email">
              </div>

              <div class="form-group">
                <label for="senha">Email</label>
                <input class="form-control" type="password" name="senha" placeholder="Digite sua senha" id="senha">
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
              <button type="submit" class="btn btn-primary" data-dismiss="modal">Logar</button>
            </div>
          </form>

        </div>

      </div>
    </div>

  </div>


  
  <div class="container">
    <div class="page-header">

      <h1>Clientes</h1>
      
    </div>    

    
    <div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="imagens/golden.png" target="_blank">
        <img src="imagens/golden.png" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="imagens/pinacoteca.png" target="_blank">
        <img src="imagens/pinacoteca.png" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="imagens/metro.png" target="_blank">
        <img src="imagens/metro.png" alt="Fjords" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="imagens/uns.png" target="_blank">
        <img src="imagens/uns.png" alt="Lights" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  <div class="col-md-4">
    <div class="thumbnail">
      <a href="imagens/bovespa.png" target="_blank">
        <img src="imagens/bovespa.png" alt="Nature" style="width:100%">
        <div class="caption">
          <p>Lorem ipsum...</p>
        </div>
      </a>
    </div>
  </div>
  
</div>

  

</div>
<br>

<footer class="container-fluid">
  <p>Footer Text</p>
  <nav class="nav navbar">
    <ul class="nav navbar-nav" id="links">
      <li><a href="#">Home</a></li>
      <li><a href="#">Empresa</a></li>
      <li><a href="#">Serviços</a></li>
      <li><a href="#">Clientes</a></li>
      <li><a href="#">Contatos</a></li>
    </ul>
  </nav>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

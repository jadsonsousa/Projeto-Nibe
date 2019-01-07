<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contato</title>
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

    <style>
    
  </style>
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

    <div class="page-header">
      <h3>Contato</h3><br>
    </div>    

    <div class="row">
      <form action="/action_page.php" name="formContato">
        <div class="col-md-6">

          <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" placeholder="Digite o nome" name="nome" required>
          </div>

          <div class="form-group">
            <label for="endereco">Endereço:</label>
            <input type="text" class="form-control" id="endereco" placeholder="Digite o endereço" name="endereco" required>
          </div>

          <div class="form-group">
            <label for="fone">Fone:</label>
            <input type="text" class="form-control" id="fone" placeholder="Digite o telefone ou celular" name="fone" required>
          </div>

          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Digite o email" name="email" required>
          </div>

          <div class="form-group">
            <label for="empresa">Empresa:</label>
            <input type="text" class="form-control" id="empresa" placeholder="Digite o nome de sua empresa" name="endereco" required>
          </div>

          <div class="checkbox">
           <label><input type="checkbox" name="remember"> Remember me</label>
         </div>

         

       </div>
       <div class="col-md-6">
        <div class="form-group">
          <label for="mensagem">Mensagem:</label>
          <textarea type="text" rows="10" class="form-control" id="mensagem" placeholder="Digite o nome de sua empresa" name="mensagem" required>
          </textarea> 
        </div>
        <button type="reset" class="btn btn-default">Cancelar</button>
        <button type="submit" class="btn btn-primary" onclick="">Enviar</button>
      </form>
    </div>
    
  </div>
</div><br>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>

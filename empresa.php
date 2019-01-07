<!DOCTYPE html>
<html lang="en">
<head>
  <title>Empresa</title>
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

  </div>
  
  <div class="container text-justify">
    <div class="page-header">
      <h1>Empresa</h1>
      <p>A Nibe Security se especializou ao longo dos anos no fornecimento de SISTEMAS DE SEGURANÇA ELETRÔNICA para as 
      mais distintas necessidades. Oferecemos produtos com a mais alta tecnologia de plataformas de desenvolvimento própio
      ou sistemas do mercado garantindo a segurança dos segmentos empresariais e residenciais.</p>

      <h3>Estes são os seguintes exemplos dos serviços que oferecemos:</h3>

      <h4>- Consultoria e desenvolvimento de Projetos de Segurança Eletrônica;</h4>
      <h4>- Implantação de sistemas com serviço de monitoramento remoto;</h4>
      <h4>- instalação de sistemas;</h4>
      <h4>- Manutenção preventiva e corretiva;</h4>
      <h4>- Assistência técnica;</h4>
      <h4>- Treinamento operacional e prático;</h4>
      <h4>- Programas de reciclagem.</h4>

      <p>Para isto, contamos com uma equipe com profissionais altamente qualificados que dedicam seu tempo para criai soluções de segurança personalizada, aplicando os mais avançados conceitos de proteção e prevenção de perdas através da utilização de equipamentos de ultima geração. desta forma, harmonizamos alta tecnologia com os melhores recursos humanos disponiveis no mercado.</p>
    </div>    

    <div class="row">
      <div class="col-md-4 text-justify">

          <div class="page-header text-center">
            <h3>Visão</h3>
          </div>
          <p>Estabelecemos um relação de confiança quando oferecemos segurança aos nossos clientes. Atraves dela, asseguramos bem estar e qualidade de vida. Assim, almejamos ser a melhor empresa de segurança e nos consolidar como referência nacional no setor.</p>

      </div>


      <div class="col-md-4 text-justify">

          <div class="page-header text-center">
            <h3>Missão</h3>
          </div>
          <p>
            Prover a confiança necessária para que nosso cliente possa fesfrutar de seus negócios e sua qualidade de vida com a mais competente e preparada equipe de colaboradores, comprometida em fazer de sua segurança o nosso principal e único objetivo.
          </p>

      </div>


      <div class="col-md-4 text-justify">

          <div class="page-header text-center">
            <h3>Valores</h3>
          </div>
          <p><strong>Confiança</strong> - Fornecer confiança é a alma do nosso negócio. Primanod pela ética aliada ao trabalho de excelência e comprometimento, asseguramos confiança aos nossos clientes para o pleno exercício de suas atividades cotidianas.</p>
          <p><strong>Excelência</strong> - Nossa equipe competente e coesa em conjunto com a qualidade dos nossos produtos e serviços são a base para a excelência. Queremos sempre ir muito além das expectativas.</p>
          <p><strong>Inovação</strong> - Buscamos incessantemente estar em passo a frente das soluções oferecidas pelo mercado. Por meio desta atualização contante e da adoção de alta tecnologia é que proporcionamos a segurança necessária aos nossos clientes.</p>
      

      </div>

    </div>

    </div> 

  </div>
  <br>

  <footer class="container-fluid">
    <p>Footer Text</p>
    <nav class="nav navbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
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

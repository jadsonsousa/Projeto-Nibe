<!DOCTYPE html>
<html lang="en">
<head>
  <title>Serviços</title>
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
    <div class="panel-group">
      <div class="panel-heading">
        <h1>Serviços</h1>
      </div>

      <div class="panel panel-warning">
          <div class="panel-heading">Panel with panel-warning class</div>
          <div class="panel-body">Panel Content</div>
      </div>
      
      <p>Desenvolvemos solução integrada de sistemas para indústrias, condominios e espaços de grande fluso de pessoas, como escolas, hospitais, shopping centers, estacionamentos, dentre outrosestabelecimentos, fornecendo a segurança necessária para a sua qualidade de vida e exercicio de suas atividades cotidianas. De acorodo com as mais modernas diretrizes de segurança é possivel controlar todos os dispositivos e equipamentos remotamente, à prova de invasores, dentro ou fora. A Nibe Security concebe e executa cada Projeto de Segurança como sendo único, customizando a solução da maneira mais adequada para cada caso e cada emprendimento. Tendo desenvolvido e impementado centenas de projetos no Brasil, os profissionais da Nibe Security estão habilitados a oferecer soluções estratégicas.</p>

      <h3>Opções de Aquisição</h3>
      <p>A Nibe Security oferece a seus clientes, além da venda convencional, a possibilidade de Locação.</p>
      <p>A <strong>Locação</strong> é muito interessante apara casos de condominios já habitados, o gasto mensal é facilmente absorvido evitando investimentos pontuais mais levados.</p>
      <p>No caso de indústrias, a opção Locação é extremamente bem vista, evita que haja investimentos em ativos fora da área de concentração, fando com que este capital seja despesado mensalmente.</p>
    



    </div>
   

    <!-- row 1 -->
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading center"><strong>Análise de Risco</strong></div>
          <div class="panel-body">
            <img src="imagens/servicos1.png" class="img-responsive img-rounded">
            <br/>
            <p>Indicados para quem deseja um alto grau de segurança e um plano de segurança mais completo e abrangente, o Diagnóstico e a Análise de Riscos são os passos iniciais de um projeto de sistemas eletrônicos de segurança e vêm antes da compra dos equipamentos e serviços</p>
            <p>Ou seja, é fundamental identificar os riscos e suas origens, e fazerum diagnóstico de segurança, com o levantamento de variáveis externas e internas que impactão na segurança do imóvel, bem como as vulnerabilidades da instalação.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading"><strong>Controle de Acesso</strong></div>
          <div class="panel-body">
            <img src="imagens/servicos.png" class="img-responsive img-rounded">
            <p>O sistema de controle de acesso é eficaz para o controle de fluxo de pessoas e veículos por meio da combinação de hardwares e software ajustados a necessidade de casa projeto.</p>
            <p>Este sistema de destaca pela flexibilidade e capacidade de integração com outros sistemas para funcionar de formas mais inteligente. Dotado de uma interface totalmente Web, dispensa a instalação de software para operação. Basta abrir o navegador de internet e apontar para o servidor para ter na tela o sistema totalmente funcional, esta tendência global em software agora disponível nos sistemas de segurança. Além de aumentar a segurança no funcionamento, esta característica permite o suso do sistema até mesmo em tablets e computadores usando internet 3g para cadastros e consultas.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-heading"><strong>CFTV</strong></div>
          <div class="panel-body">
            <img src="imagens/servicos2.png" class="img-responsive img-rounded">
            <br/>
            <div class="panel panel-warning">
              <div class="panel-heading">CFTV IP</div>
              <div class="panel-body">
                <p>As câmeras realizam o envio das imagens para o sistema de gerenciamento utilizando comunicação totalmente digital, método de transmissão absolutamente sem perda de qualidade.</p>
              </div>
            </div>

             <div class="panel panel-warning">
                <div class="panel-heading">Características CFTV IP</div>
                <div class="panel-body">
                <p>As câmeras realizam o envio das imagens para o sistema de gerenciamento utilizando comunicação totalmente digital, método de transmissão absolutamente sem perda de qualidade.</p>
                <h5>Transmissão de vídeo sem perda de qualidade;</h5>
                <h5>Alta definição das imagens;</h5>
                <h5>Facilidade de implantação;</h5>
                <h5>Flexibilidade no gerenciamento e operação;</h5>
                <h5>Maior padronização de equipamentos;</h5>
                <p>As câmeras utilizam um endereço de ip para serem localizadas na rede. Esta tecnologia possibilita o uso de redes de dados existentes para trafegar as imagens de CFTV, reduzindo em alguns casos a necessidade de novas estruturas.</p>
              </div>
            </div>
          </div>
      </div>
    </div>



 
    <!-- fim row 1 -->

    <!-- row 2 -->
    <div class="row">
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="page-header text-center">
            <img src="imagens/servicos3.png" class="img-rounded">
            <h3>Alarme Perimetral e Intrusão</h3>
          </div>
          <p>O sistema de detecção de intrusão é fundamental para detectar e antecipar uma tentativa de invasão de forma automática, produzindo alarmes locais (Sirenes e Luzes) e remotos (informando as ocorrências a um local fora do ambiente protegido), a fim de proteger seu patrimônio e preservar a integridade das pessoas.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="page-header text-center">
            <img src="imagens/servicos4.png" class="img-rounded">
            <h3>Ronda Eletrônica</h3>
          </div>
          <p>O sistema de controle de ronda é uma ferramenta indispensável. Com a utilização do Bastão Deggy, serão registrados a passagem do vigilante pelos locais, o horário horário que que ele esteve nos locais, o circuito realizado pelo homem, e por meio de uma cartela com eventos programados, poderão ser registrados ocorrências associadas a esses locais. Aumente a qualidade de seus serviços de segurança utilizando o Bastão de Ronda Deggy.</p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="page-header text-center">
            <img src="imagens/servicos5.png" class="img-rounded">
            <h3>Sistema de Detecção e Alarme de incêndio</h3>
          </div>
          <p>É um conjunto de equipamentos destinados a gerar um alarme ou uma ação automática de extinção quando um de seus comportamentos entrarem em atuação em função de um princípio de incêndio. O Sistema é formado por:</p>
          <h5>Central de Detecção e Alarme de Incêndio</h5>
          <h5>Central Supervisora</h5>
          <h5>Subcentral</h5>
          <h5>Painel Repetidor</h5>
          <h5>Detectores Automáticos</h5>
          <h5>Acionadores Manuais</h5>
          <h5>Indicadores Sonoros e Visuais</h5>
          <h5>Circuito de Detecção</h5>
          <h5>Alarme Geral</h5>
        </div>
      </div>
    </div>
    <!-- fim row 2 -->

    <!-- row 3 -->
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-default">
          <div class="panel-heading"><strong>Os Sistemas de Detecção e Alarme são divididos em 03 tipos de sistemas</strong></div>
          <div class="panel-body">

            <div class="col-md-4">
              <div class="panel panel-warning">
                <div class="panel-heading">Sistema Convencional</div>
                <div class="panel-body">
                  <p>Sistema Convencional simples com informações limitadas. Geram infomrações baseadas nas transmissão de níveis de tensão, divididos em 4 situações: <strong>Operação Normal, Alarme, Falha e Circuito Aberto ou em Curto</strong>. As centrais neste tipo de sistema não possuem CPU.</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="panel panel-warning">
                <div class="panel-heading">Sistema Endereçavel</div>
                <div class="panel-body">
                  <p>Sistema operacional baseado em pulsos codificados com processadas por uma CPU que reconhece o código do dispositivo acionado e disponibiliza na central a localização do ponto alarmado.</p>
                  <p>Todos os dispositivos desse sistema possui um código de endereçamento, através deste código a central tem a exata localização dos ponto acionado. Todas as informações são exibidas em um visor de LCD.</p>
                  <p>Este tipo de sistema possui comunicação do tipo via única ("Half Duplex"), que limita o numero de dispositivos no sistema devido ao processamento que se torna mais lento à medida que aumenta os números de endereços.</p>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="panel panel-warning">
                <div class="panel-heading">Panel with panel-warning class</div>
                <div class="panel-body">Panel Content</div>
              </div>
            </div>



            <!-- row 4 -->
            <div class="row">
              <div class="col-md-4">
                <div class="panel panel-default">
                  <div class="page-header text-center">
                    <h4></h4>
                  </div>
                  
                </div>
              </div>

              <div class="col-md-4">
                <div class="panel panel-default">
                  <div class="page-header text-center">
                    <h4>Sistema Microprocessado</h4>
                  </div>
                  <p>Sistemas operacional inteligente, transmissão de dados são tipos binária (0 e 1) de alta velocidade, multiplexados (vários dados transmitidos simultaneamente).</p>
                  <p>A central disponibiliza um conjunto completo de informações sobre os diversos eventos. Este sistema é totalmente programável.</p>
                  <p>Sistemas microprocessados possuem vantagens e desvantagens em relação aos outros tipos de sistema: Suas vantagens são que mais de uma informação são gerenciadas ao mesmo tempo; Informações mas detalhadas e confiáveis; Suas ações são mais complexas e suas desvantagens são que os operadores devem ser previstas antes do inicio de sua instalação.</p>
                </div>
              </div>
            </div>
            <!-- fim row 4 -->
          </div>
        </div>
      </div>
    </div>
    <!-- fim row 3 -->

  
</div>
</div>
</div>

  </div>
</body>

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

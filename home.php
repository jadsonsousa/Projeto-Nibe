
<?php
	echo ' Seja Bem Vindo!<br/>';
	echo 'home funcionando';

	//session_start();

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Twitter clone</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<script type="text/javascript">
			$(document).ready( function(){

				//associar o evento de click ao botão
				$('#btn-tweet').click( function(){

					
					if ($('#texto_tweet').val().length > 0) {

						$.ajax({
							url: 'inclui_tweet.php',
							method: 'post',
							data: $('#form_tweet').serialize(),
							success: function(data){
								$('#texto_tweet').val('');
								atualizaTweet();
							}
						});
					}	
				});

				function atualizaTweet() {
					// carrega os tweets

					$.ajax({
						url: 'get_tweet.php',
						success: function (data) {
							$('#tweets').html(data);
							
						}
					});
					
				}

				atualizaTweet();

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
              <a href="#">
                Sair
              </a>
            </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>


	    <div class="container">
	    	<div class="col-md-3">
	    		<div class="panel panel-default">
	    			<div class="panel-body">
	    				<button class="btn btn-primary btn-block">Cadastrar Usuários</button>
						<button class="btn btn-primary btn-block">Cartão de Ponto</button>

	    			</div>
	    		</div>
	    	</div>
	    	<div class="col-md-6">

	    		<div class="panel panel-default">
	    			<div class="panel-body">
	    				<form method="post" action="insere_usuario.php" id="form_usuario" class="form-horizontal">

								Nome:
								<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" />
								<br>

								Usuário:
								<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário" />
								<br>

								Email:
								<input type="email" name="email" id="email" class="form-control" placeholder="Senha">
								<br>

								Senha:
								<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
								<br>

								<button class="btn btn-primary" id="btn-cadastrar" type="submit">Cadastrar</button>

	    				</form>	
	    			</div>
	    		</div>

					<div id="tweets" class="list-group"></div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<h4><a href="procurar_pessoas.php">Procurar por pessoas</a></h4>
					</div>
				</div>
			</div>

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>


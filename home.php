
<?php
	echo ' Seja Bem Vindo!<br/>';
	echo 'home funcionando';

	$cad = isset($_GET['cad']) ? $_GET['cad'] : 0;

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

				//$('#cad_sucesso').show();

				$('#form_usuario').hide();

				

				//exibe o formulário
				$('#btn_usuario').click(
					
					function(){$("#form_usuario").show(1000);
					
				
				});

				$('#btn-cadastrar').click(function(){


						//alert('funcionando');
		

				});

				

				$('#btn_ponto').click( function(){
					
					$("#form_usuario").hide(1000);
					
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
	    				<button class="btn btn-primary btn-block" id="btn_usuario">Cadastrar Usuários</button>
						<button class="btn btn-primary btn-block" id="btn_ponto">Cartão de Ponto</button>

	    			</div>
	    		</div>
	    	</div>
	    	<div class="col-md-6">

	    		<div class="panel panel-default" id="form_usuario">
	    			<div class="panel-body">
	    				<form method="post" action="insere_usuario.php"  class="form-horizontal" >

								Nome:
								<input type="text" name="nome" id="nome" class="form-control" placeholder="Nome" required/>
								<br>

								Usuário:
								<input type="text" name="usuario" id="usuario" class="form-control" placeholder="Usuário" required/>
								<br>

								Email:
								<input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
								<br>

								Senha:
								<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
								<br>

								<button class="btn btn-primary" id="btn-cadastrar" type="submit">Cadastrar</button>

	    				</form>
						
						<!-- <div class="alert alert-success alert-dismissible">
    						<a href="#" id="cad_sucesso" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    						<strong>Usuário cadastrado com sucesso!</strong>
  						</div> -->
	    			</div>
	    		</div>
				<?php
						if ($cad) {
							echo '<div class="alert alert-success alert-dismissible">
    						<a href="#" id="cad_sucesso" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    						<strong>Usuário cadastrado com sucesso!</strong>
  						</div>';

						}

						?>

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


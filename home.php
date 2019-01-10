
<?php
	echo ' Seja Bem Vindo!<br/>';

	$cad = isset($_GET['cad']) ? $_GET['cad'] : 0;
	echo $data = date("d-m-Y H:i");

	session_start();

	// verificar se o usuario já esta autenticado
	if(!isset($_SESSION['email'])){ 			
		header('Location: index.php?erro=1'); //redireciona para pagina principal com erro
	}

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
              <a href="sair.php">
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
				<!-- Cadastro Usuário -->
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

								<button class="btn btn-success" id="btn-cadastrar" type="submit">Cadastrar</button>

	    				</form>
	    			</div>
	    		</div>				

				<!-- Cadastro Ponto -->
				<div class="panel panel-default" id="form_ponto">
	    			<div class="panel-body">
	    				<form method="post" action="insere_ponto.php"  class="input-group" >
							<input class="form-control" type="text" name="p_nome" id="p_nome" />
							<div id="mostra_data">
								<?php
									echo ' <input class="form-control" type="text" name="p_nome" id="p_nome" value=" '.$data.' " /> ';
									?>
								<br>
							</div>
							<span class="input-group">
							<div class="radio-inline">
								<label for="">
									<input type="radio" name="opcao" value="entrada_manha" id="opcao">
									Entrada manhã
								</label>
							</div>
							<div class="radio-inline">
								<label for="">
									<input type="radio" name="opcao" value="saida_manha" id="opcao">
									Saída manhã
								</label>
							</div>
							<div class="radio-inline">
								<label for="">
									<input type="radio" name="opcao" value="entrada_manha" id="opcao">
									Entrada Tarde
								</label>
							</div>
							<div class="radio-inline">
								<label for="">
									<input type="radio" name="opcao" value="saida_tarde" id="opcao">
									Saída Tarde
								</label>
							</div>
							</span>
							

							
							
								
								
								<!-- <span class="input-group"> -->
	    							<button class="btn btn-default btn-block" id="btn-ponto" type="button">
										<span class="glyphicon glyphicon-hand-up" aria-hidden="true"></span> Apontar
									</button>
									<button class="btn btn-success btn-block" id="btn-registar" type="submit">
										<span class="glyphicon glyphicon-send" aria-hidden="true"></span> Registrar
									</button>
	    						<!-- </span> -->
	    				</form>
	    			</div>
	    		</div>

				<div id="cad_sucesso">
					<?php
						if ($cad == 1) {
							echo '<div class="alert alert-success alert-dismissible">
    						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    						<strong>Usuário cadastrado com sucesso!</strong>
  						</div>';

						} elseif($cad == 2){
							echo '<div class="alert alert-success alert-dismissible">
    						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    						<strong>Apontamento registrado com sucesso!</strong>
  						</div>';
						}

						?>
				</div>


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


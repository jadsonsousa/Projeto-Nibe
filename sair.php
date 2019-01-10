<?php

	session_start();
	unset($_SESSION['usuario']); //elimina as super globais de sesseion
	unset($_SESSION['email']); //elimina as super globais de sesseion
	

	//header('Location: index.php?erro=1'); //redireciona para pagina principal com erro
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sair</title>
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
  </script>
  <script src="js/javascript.js"></script>
</head>
<body>
	<div class="container" style="padding: 20px;">
		<div class="alert alert-success alert-dismissible" id="sair">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Esperamos você em breve!!!</strong>
  		</div>
	</div>

	

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
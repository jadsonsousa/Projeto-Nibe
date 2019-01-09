<?php

	//por convenssão o session devera ser no inicio de qualquer script
	//session_start(); // cria uma session e indica pro script que terá acesso as variaveis de session

	require_once('db.class.php');

    $nome = $_POST['nome'];
    $usuario = $_POST['usuario']; // captura do input
    $email = $_POST['email'];
	$senha = md5($_POST['senha']);


	$sql = " INSERT INTO usuarios (nome, usuario, email, senha ) VALUES ('$nome', '$usuario', '$email', '$senha') ";

	$objDb = new db(); // instancia a classe

	$link = $objDb->conecta_mysql(); //conecta com o banco

	$resultado_id = mysqli_query($link, $sql); // executa a query


	if ($resultado_id) {

		$dados_usuario = mysqli_fetch_array($resultado_id); // recunpera dados do banco e gera um array

		if (isset($dados_usuario['nome'])) {

			//$_SESSION['id_usuario'] = $dados_usuario['id'];
			//$_SESSION['usuario'] = $dados_usuario['usuario']; // recumpera uma super global session
			$_SESSION['email'] = $dados_usuario['email']; // recumpera uma super global session

			header('Location: home.php'); //redireciona a pagina autenticada

		}else{

			header('Location: index.php?erro=1'); // redireciona a pagina principal com erro 
		}

	}else{

		echo "Erro na execução da consulta favor entrar em contato com o admin do site";

	}


/*
	//executar a query
	if (mysqli_query($link, $sql)) { //executa o commit da instrução
		echo "Usuario consultado com sucesso!";
	} else{
		echo "Erro ao consultar usuário!";
	}
*/	
	// update true/false
	// insert true/false
	// select false/resource
	// delete true/false
/
?>
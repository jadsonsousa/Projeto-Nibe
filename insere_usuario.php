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

	//executar a query
	if (mysqli_query($link, $sql)) { //executa o commit da instrução
        echo "Usuario cadastrado com sucesso!";
        header('Location: home.php?cad=1');
	} else{
		echo "Erro ao cadastrar usuário!";
	}

	// update true/false
	// insert true/false
	// select false/resource
	// delete true/false

?>
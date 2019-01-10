<?php

	//por convenssão o session devera ser no inicio de qualquer script
	//session_start(); // cria uma session e indica pro script que terá acesso as variaveis de session

	require_once('db.class.php');

    //echo $ponto = $_GET['p_nome'].'<br />';
    $data_db = date("Y-m-d H:i");
    $opcao = $_POST['opcao'];


	$sql = " INSERT INTO ponto (entrada_manha ) VALUES ('$data_db') ";

	$objDb = new db(); // instancia a classe

	$link = $objDb->conecta_mysql(); //conecta com o banco

	//executar a query
	if (mysqli_query($link, $sql)) { //executa o commit da instrução
        echo "Ponto registrado com sucesso!";
        header('Location: home.php?cad=2');
	} else{
		echo "Erro ao registrar o ponto!";
	} 

	// update true/false
	// insert true/false
	// select false/resource
	// delete true/false

?>